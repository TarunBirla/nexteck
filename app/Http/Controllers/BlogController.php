<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of active blogs sorted by sort_order (6 per page).
     */
    public function index()
    {
        $blogs = Blog::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->latest()
            ->paginate(6);

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Display the specified blog detail.
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('blogs.show', compact('blog'));
    }
}
