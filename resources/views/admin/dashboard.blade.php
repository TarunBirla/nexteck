@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page_header', 'Dashboard Overview')

@section('content')
<style>
    .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem; margin-bottom: 2rem; }
    .stat-card { background: #fff; padding: 1.8rem; border-radius: 12px; border: 1px solid var(--border); display: flex; align-items: center; justify-content: space-between; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
    .stat-number { font-size: 2.2rem; font-weight: 700; color: var(--sidebar-bg); font-family: 'Fraunces', serif; }
    .stat-label { font-size: 0.9rem; font-weight: 600; color: var(--muted); text-transform: uppercase; letter-spacing: 0.5px; margin-top: 0.2rem; }
    .stat-icon { width: 50px; height: 50px; border-radius: 10px; background: rgba(184,147,63,0.12); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; }
</style>

<div class="stats-grid">
    <div class="stat-card">
        <div>
            <div class="stat-number">{{ $totalBlogs }}</div>
            <div class="stat-label">Total Blogs</div>
        </div>
        <div class="stat-icon">📝</div>
    </div>

    <div class="stat-card">
        <div>
            <div class="stat-number">{{ $totalLeads }}</div>
            <div class="stat-label">Total Lead Forms</div>
        </div>
        <div class="stat-icon">📬</div>
    </div>
</div>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
    <div class="card">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 1rem;">
            <h3 style="font-size: 1.1rem; font-weight: 700;">Recent Blogs</h3>
            <a href="{{ route('admin.blogs.index') }}" class="btn-sm btn-secondary">View All</a>
        </div>
        @if($recentBlogs->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentBlogs as $blog)
                        <tr>
                            <td><strong>{{ $blog->title }}</strong></td>
                            <td>
                                @if($blog->is_active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-secondary">Inactive</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p style="color: var(--muted); font-size: 0.9rem;">No blogs created yet.</p>
        @endif
    </div>

    <div class="card">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 1rem;">
            <h3 style="font-size: 1.1rem; font-weight: 700;">Recent Lead Requests</h3>
            <a href="{{ route('admin.leads.index') }}" class="btn-sm btn-secondary">View All</a>
        </div>
        @if($recentLeads->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Company</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentLeads as $lead)
                        <tr>
                            <td><strong>{{ $lead->full_name }}</strong></td>
                            <td>{{ $lead->company }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p style="color: var(--muted); font-size: 0.9rem;">No lead requests received yet.</p>
        @endif
    </div>
</div>
@endsection
