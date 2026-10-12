<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class AdminAnalyticsController extends Controller
{
    public function index(Request $request)
    {
        Visitor::ensureTableExists();

        $allVisitors = Visitor::orderByDesc('last_visited_at')->get();

        // Summary KPIs
        $uniqueVisitorsCount = $allVisitors->count();
        $totalPageViews      = $allVisitors->sum('total_visits');
        $todayActiveCount    = $allVisitors->filter(fn($v) => $v->last_visited_at && $v->last_visited_at->isToday())->count();

        $totalFormsFilled = $allVisitors->sum(function ($v) {
            return is_array($v->forms_submitted) ? count($v->forms_submitted) : 0;
        });

        // Chart 1: Last 7 Days Active Unique Visitors (by last_visited_at date)
        $dailyLabels = [];
        $dailyCounts = [];
        for ($i = 6; $i >= 0; $i--) {
            $dateStr = now()->subDays($i)->format('Y-m-d');
            $dailyLabels[] = now()->subDays($i)->format('d M');
            $dailyCounts[] = $allVisitors->filter(function ($v) use ($dateStr) {
                return $v->last_visited_at && $v->last_visited_at->format('Y-m-d') === $dateStr;
            })->count();
        }

        // Chart 2: Browser Breakdown
        $browserBreakdown = $allVisitors->groupBy(fn($v) => $v->browser ?: 'Other')
            ->map(fn($group) => $group->count())
            ->sortDesc()
            ->take(6);

        // Chart 3: Top Countries Breakdown
        $countryBreakdown = $allVisitors->groupBy(fn($v) => $v->country ?: 'Unknown')
            ->map(fn($group) => $group->count())
            ->sortDesc()
            ->take(6);

        // Chart 4: Top Visited Pages Breakdown
        $pageCounts = [];
        foreach ($allVisitors as $v) {
            if (is_array($v->pages_visited)) {
                foreach ($v->pages_visited as $pv) {
                    $label = $pv['page'] ?? ($pv['path'] ?? 'Unknown');
                    $pageCounts[$label] = ($pageCounts[$label] ?? 0) + 1;
                }
            }
        }
        arsort($pageCounts);
        $topPages = array_slice($pageCounts, 0, 6, true);

        // Paginated table ordered by latest visit time
        $visitors = Visitor::orderByDesc('last_visited_at')->paginate(15);

        return view('admin.analytics.index', compact(
            'visitors',
            'uniqueVisitorsCount',
            'totalPageViews',
            'todayActiveCount',
            'totalFormsFilled',
            'dailyLabels',
            'dailyCounts',
            'browserBreakdown',
            'countryBreakdown',
            'topPages'
        ));
    }

    public function destroy($id)
    {
        Visitor::ensureTableExists();
        $visitor = Visitor::findOrFail($id);
        $visitor->delete();

        return redirect()
            ->route('admin.analytics.index')
            ->with('success', 'Visitor record deleted successfully.');
    }
}
