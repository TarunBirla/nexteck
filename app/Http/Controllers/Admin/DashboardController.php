<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\LeadRequest;
use App\Models\SmeToolkit;
use App\Models\Visitor;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBlogs    = Blog::count();
        $totalLeads    = LeadRequest::count();
        $totalToolkits = Schema::hasTable('sme_toolkits') ? SmeToolkit::count() : 0;
        $totalVisitors = Schema::hasTable('visitors') ? Visitor::count() : 0;

        $recentBlogs    = Blog::latest()->take(5)->get();
        $recentLeads    = LeadRequest::latest()->take(5)->get();
        $recentToolkits = Schema::hasTable('sme_toolkits') ? SmeToolkit::latest()->take(5)->get() : collect();

        return view('admin.dashboard', compact('totalBlogs', 'totalLeads', 'totalToolkits', 'totalVisitors', 'recentBlogs', 'recentLeads', 'recentToolkits'));
    }

    public function leads()
    {
        $leads = LeadRequest::latest()->paginate(10);
        return view('admin.leads.index', compact('leads'));
    }
}
