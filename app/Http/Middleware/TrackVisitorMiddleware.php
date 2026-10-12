<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitorMiddleware
{
    /**
     * Handle an incoming request and track unique visitor activity.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only track public GET page views
        if (!$request->isMethod('GET') || $request->ajax()) {
            return $response;
        }

        $path = '/' . ltrim($request->path(), '/');

        // Skip admin routes, setup routes, sitemaps, and static assets
        $excludedPrefixes = [
            '/admin',
            '/run-migrations',
            '/setup-',
            '/sitemap.xml',
            '/robots.txt',
            '/llms.txt',
            '/favicon',
            '/build',
            '/assets',
            '/_ignition',
        ];

        foreach ($excludedPrefixes as $prefix) {
            if (str_starts_with($path, $prefix)) {
                return $response;
            }
        }

        try {
            Visitor::ensureTableExists();

            $ip     = Visitor::resolveIp($request);
            $ua     = $request->userAgent();
            $uaInfo = Visitor::parseUserAgent($ua);
            $now    = now()->format('Y-m-d H:i:s');

            // Friendly page title mapping
            $pageLabels = [
                '/'        => 'Home Page (/)',
                '/home'    => 'Home Page (/home)',
                '/landing' => 'Strategy Call Landing (/landing)',
                '/toolkit' => 'SME Strategy Toolkit (/toolkit)',
                '/blogs'   => 'Blogs Listing (/blogs)',
            ];
            $pageLabel = $pageLabels[$path] ?? (str_starts_with($path, '/blogs/') ? 'Blog Post (' . $path . ')' : $path);

            $visitor = Visitor::where('ip_address', $ip)->first();

            if (!$visitor) {
                $geo = Visitor::fetchGeoLocation($ip);
                Visitor::create(array_merge([
                    'ip_address'       => $ip,
                    'user_agent'       => $ua,
                    'total_visits'     => 1,
                    'last_page'        => $pageLabel,
                    'pages_visited'    => [
                        [
                            'page'       => $pageLabel,
                            'path'       => $path,
                            'visited_at' => $now,
                        ],
                    ],
                    'forms_submitted'  => [],
                    'first_visited_at' => now(),
                    'last_visited_at'  => now(),
                ], $uaInfo, $geo));
            } else {
                // Same user returning: keep as 1 unique visitor row, increment total_visits, update latest timestamp & page history
                $pages = is_array($visitor->pages_visited) ? $visitor->pages_visited : [];
                array_unshift($pages, [
                    'page'       => $pageLabel,
                    'path'       => $path,
                    'visited_at' => $now,
                ]);

                // Backfill geo if previously unknown
                if (empty($visitor->country) || $visitor->country === 'Unknown') {
                    $geo = Visitor::fetchGeoLocation($ip);
                    $visitor->fill($geo);
                }

                $visitor->browser         = $uaInfo['browser'];
                $visitor->os              = $uaInfo['os'];
                $visitor->device          = $uaInfo['device'];
                $visitor->user_agent      = $ua;
                $visitor->total_visits    = ($visitor->total_visits ?? 1) + 1;
                $visitor->last_page       = $pageLabel;
                $visitor->pages_visited   = array_slice($pages, 0, 40);
                $visitor->last_visited_at = now();
                $visitor->save();
            }
        } catch (\Throwable $e) {
            // Never break page rendering if analytics DB/API fails
        }

        return $response;
    }
}
