<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Database\Seeders\IndustrySeeder;

class IndustryController extends Controller
{
    /**
     * Ensure database table is seeded if empty.
     */
    protected static function ensureSeeded(): void
    {
        if (Schema::hasTable('industries') && Industry::count() === 0) {
            (new IndustrySeeder())->run();
        }
    }

    /**
     * Display the listing page of all industries with pagination (6 per page).
     */
    public function index()
    {
        self::ensureSeeded();

        if (Schema::hasTable('industries')) {
            $industries = Industry::where('is_active', true)
                ->orderBy('sort_order', 'asc')
                ->orderBy('id', 'asc')
                ->paginate(6);
        } else {
            // In case table not yet created, return empty paginator or empty collection
            $industries = new \Illuminate\Pagination\LengthAwarePaginator([], 0, 6);
        }

        return view('industries.index', compact('industries'));
    }

    /**
     * Display a single industry detail page with SEO metadata and related industries.
     */
    public function show($slug)
    {
        self::ensureSeeded();

        if (Schema::hasTable('industries')) {
            $industry = Industry::where('slug', $slug)
                ->where('is_active', true)
                ->firstOrFail();

            $related = Industry::where('is_active', true)
                ->where('id', '!=', $industry->id)
                ->orderBy('sort_order', 'asc')
                ->take(3)
                ->get();
        } else {
            abort(404);
        }

        return view('industries.show', compact('industry', 'related'));
    }
}
