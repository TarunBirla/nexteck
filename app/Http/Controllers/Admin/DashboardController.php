<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\LeadRequest;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBlogs = Blog::count();
        $totalLeads = LeadRequest::count();

        $recentBlogs = Blog::latest()->take(5)->get();
        $recentLeads = LeadRequest::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalBlogs', 'totalLeads', 'recentBlogs', 'recentLeads'));
    }

    public function leads()
    {
        $leads = LeadRequest::latest()->paginate(10);
        return view('admin.leads.index', compact('leads'));
    }
}
