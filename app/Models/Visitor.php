<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'country',
        'country_code',
        'region',
        'city',
        'isp',
        'timezone',
        'browser',
        'os',
        'device',
        'user_agent',
        'total_visits',
        'last_page',
        'pages_visited',
        'forms_submitted',
        'first_visited_at',
        'last_visited_at',
    ];

    protected $casts = [
        'pages_visited'    => 'array',
        'forms_submitted'  => 'array',
        'first_visited_at' => 'datetime',
        'last_visited_at'  => 'datetime',
    ];

    /**
     * Ensure the visitors table exists on live server.
     */
    public static function ensureTableExists(): void
    {
        if (!Schema::hasTable('visitors')) {
            Schema::create('visitors', function (Blueprint $table) {
                $table->id();
                $table->string('ip_address', 64)->unique();
                $table->string('country')->nullable();
                $table->string('country_code', 12)->nullable();
                $table->string('region')->nullable();
                $table->string('city')->nullable();
                $table->string('isp')->nullable();
                $table->string('timezone')->nullable();
                $table->string('browser')->nullable();
                $table->string('os')->nullable();
                $table->string('device')->nullable();
                $table->text('user_agent')->nullable();
                $table->integer('total_visits')->default(1);
                $table->string('last_page')->nullable();
                $table->json('pages_visited')->nullable();
                $table->json('forms_submitted')->nullable();
                $table->timestamp('first_visited_at')->nullable();
                $table->timestamp('last_visited_at')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Extract client IP from headers or request.
     */
    public static function resolveIp(Request $request): string
    {
        if ($cfIp = $request->header('CF-Connecting-IP')) {
            return trim($cfIp);
        }
        if ($xff = $request->header('X-Forwarded-For')) {
            $parts = explode(',', $xff);
            return trim($parts[0]);
        }
        return $request->ip() ?: '0.0.0.0';
    }

    /**
     * Parse Browser, OS, and Device from User-Agent string.
     */
    public static function parseUserAgent(?string $ua): array
    {
        $ua = $ua ?: '';

        // Browser
        $browser = 'Other';
        if (stripos($ua, 'Edg/') !== false || stripos($ua, 'Edge/') !== false) {
            $browser = 'Microsoft Edge';
        } elseif (stripos($ua, 'OPR/') !== false || stripos($ua, 'Opera') !== false) {
            $browser = 'Opera';
        } elseif (stripos($ua, 'Chrome/') !== false && stripos($ua, 'Safari/') !== false) {
            $browser = 'Google Chrome';
        } elseif (stripos($ua, 'Firefox/') !== false) {
            $browser = 'Mozilla Firefox';
        } elseif (stripos($ua, 'Safari/') !== false && stripos($ua, 'Chrome/') === false) {
            $browser = 'Apple Safari';
        } elseif (stripos($ua, 'MSIE') !== false || stripos($ua, 'Trident/') !== false) {
            $browser = 'Internet Explorer';
        }

        // OS
        $os = 'Other';
        if (stripos($ua, 'Windows NT 10.0') !== false) {
            $os = 'Windows 10/11';
        } elseif (stripos($ua, 'Windows') !== false) {
            $os = 'Windows';
        } elseif (stripos($ua, 'Macintosh') !== false || stripos($ua, 'Mac OS X') !== false) {
            $os = 'macOS';
        } elseif (stripos($ua, 'Android') !== false) {
            $os = 'Android';
        } elseif (stripos($ua, 'iPhone') !== false || stripos($ua, 'iPad') !== false) {
            $os = 'iOS';
        } elseif (stripos($ua, 'Linux') !== false) {
            $os = 'Linux';
        }

        // Device
        $device = 'Desktop';
        if (stripos($ua, 'Tablet') !== false || stripos($ua, 'iPad') !== false) {
            $device = 'Tablet';
        } elseif (stripos($ua, 'Mobile') !== false || stripos($ua, 'Android') !== false || stripos($ua, 'iPhone') !== false) {
            $device = 'Mobile';
        }

        return compact('browser', 'os', 'device');
    }

    /**
     * Fetch geolocation using 3rd-party free APIs (ipwho.is -> freeipapi.com -> ip-api.com).
     */
    public static function fetchGeoLocation(string $ip): array
    {
        $lookupIp = in_array($ip, ['127.0.0.1', '::1', '0.0.0.0']) ? '' : $ip;

        // 1. Primary Free API: ipwho.is
        try {
            $res = Http::timeout(2)->get("https://ipwho.is/{$lookupIp}");
            if ($res->successful() && $res->json('success') !== false) {
                $d = $res->json();
                return [
                    'country'      => $d['country'] ?? 'Unknown',
                    'country_code' => $d['country_code'] ?? null,
                    'region'       => $d['region'] ?? null,
                    'city'         => $d['city'] ?? null,
                    'isp'          => $d['connection']['isp'] ?? ($d['isp'] ?? null),
                    'timezone'     => $d['timezone']['id'] ?? null,
                ];
            }
        } catch (\Throwable $e) {
            // Fallback below
        }

        // 2. Fallback Free API: freeipapi.com
        try {
            $res2 = Http::timeout(2)->get("https://freeipapi.com/api/json/{$lookupIp}");
            if ($res2->successful() && $res2->json('countryName')) {
                $d = $res2->json();
                return [
                    'country'      => $d['countryName'] ?? 'Unknown',
                    'country_code' => $d['countryCode'] ?? null,
                    'region'       => $d['regionName'] ?? null,
                    'city'         => $d['cityName'] ?? null,
                    'isp'          => null,
                    'timezone'     => is_array($d['timeZones'] ?? null) ? ($d['timeZones'][0] ?? null) : null,
                ];
            }
        } catch (\Throwable $e2) {
            // Fallback below
        }

        // 3. Fallback Free API: ip-api.com
        try {
            $res3 = Http::timeout(2)->get("http://ip-api.com/json/{$lookupIp}");
            if ($res3->successful() && $res3->json('status') === 'success') {
                $d = $res3->json();
                return [
                    'country'      => $d['country'] ?? 'Unknown',
                    'country_code' => $d['countryCode'] ?? null,
                    'region'       => $d['regionName'] ?? null,
                    'city'         => $d['city'] ?? null,
                    'isp'          => $d['isp'] ?? null,
                    'timezone'     => $d['timezone'] ?? null,
                ];
            }
        } catch (\Throwable $e3) {
        }

        return [
            'country'      => 'Unknown',
            'country_code' => null,
            'region'       => null,
            'city'         => null,
            'isp'          => null,
            'timezone'     => null,
        ];
    }

    /**
     * Record a form submission against this IP's unique visitor record.
     */
    public static function recordFormSubmission(Request $request, string $formName, array $details = []): void
    {
        try {
            self::ensureTableExists();
            $ip = self::resolveIp($request);
            $visitor = self::where('ip_address', $ip)->first();

            if (!$visitor) {
                $uaInfo = self::parseUserAgent($request->userAgent());
                $geo    = self::fetchGeoLocation($ip);
                $visitor = self::create(array_merge([
                    'ip_address'       => $ip,
                    'user_agent'       => $request->userAgent(),
                    'total_visits'     => 1,
                    'last_page'        => '/' . ltrim($request->path(), '/'),
                    'pages_visited'    => [],
                    'forms_submitted'  => [],
                    'first_visited_at' => now(),
                    'last_visited_at'  => now(),
                ], $uaInfo, $geo));
            }

            $forms = is_array($visitor->forms_submitted) ? $visitor->forms_submitted : [];
            array_unshift($forms, [
                'form_name'    => $formName,
                'details'      => $details,
                'submitted_at' => now()->format('Y-m-d H:i:s'),
            ]);

            $visitor->forms_submitted = array_slice($forms, 0, 30);
            $visitor->last_visited_at = now();
            $visitor->save();
        } catch (\Throwable $e) {
            // Silently ignore analytics error so form submission never fails
        }
    }
}
