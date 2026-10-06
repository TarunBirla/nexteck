<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') — Nexteck Management</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --sidebar-bg: #0C1B33;
            --sidebar-hover: #1E2D4A;
            --primary: #B8933F;
            --primary-dark: #a27f32;
            --bg: #F4F6F9;
            --card-bg: #FFFFFF;
            --text: #1E293B;
            --muted: #64748B;
            --border: #E2E8F0;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', system-ui, sans-serif; background: var(--bg); color: var(--text); display: flex; min-height: 100vh; }

        /* Sidebar */
        aside { width: 260px; background: var(--sidebar-bg); color: #fff; display: flex; flex-direction: column; flex-shrink: 0; }
        .aside-header { padding: 1.8rem 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.08); }
        .aside-header .logo { font-family: 'Fraunces', serif; font-size: 1.4rem; font-weight: 700; color: #fff; text-decoration: none; }
        .aside-header .logo span { color: var(--primary); }
        .aside-nav { padding: 1.5rem 0; flex-grow: 1; display: flex; flex-direction: column; gap: 0.3rem; }
        .nav-item { display: flex; align-items: center; gap: 0.8rem; padding: 0.8rem 1.5rem; color: #94A3B8; text-decoration: none; font-size: 0.95rem; font-weight: 500; transition: all 0.2s; }
        .nav-item:hover, .nav-item.active { background: var(--sidebar-hover); color: #fff; border-left: 4px solid var(--primary); }
        .aside-footer { padding: 1.5rem; border-top: 1px solid rgba(255,255,255,0.08); }
        .btn-logout { width: 100%; padding: 0.6rem 1rem; background: rgba(239, 68, 68, 0.15); color: #FCA5A5; border: 1px solid rgba(239, 68, 68, 0.3); border-radius: 8px; font-weight: 600; cursor: pointer; transition: background 0.2s; }
        .btn-logout:hover { background: rgba(239, 68, 68, 0.3); }

        /* Main Content */
        main { flex-grow: 1; display: flex; flex-direction: column; min-width: 0; }
        header { background: #fff; padding: 1.2rem 2rem; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center; }
        header h1 { font-size: 1.35rem; font-weight: 700; color: var(--text); }
        .user-info { font-size: 0.9rem; color: var(--muted); }

        .content-area { padding: 2rem; flex-grow: 1; }

        /* Alerts */
        .alert { padding: 1rem 1.2rem; border-radius: 8px; margin-bottom: 1.5rem; font-size: 0.95rem; }
        .alert-success { background: #DCFCE7; color: #166534; border: 1px solid #BBF7D0; }
        .alert-error { background: #FEE2E2; color: #991B1B; border: 1px solid #FECACA; }

        /* Tables & Forms */
        .card { background: var(--card-bg); border-radius: 12px; border: 1px solid var(--border); padding: 1.5rem; margin-bottom: 1.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
        .table-responsive { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; text-align: left; font-size: 0.92rem; }
        th { background: #F8FAFC; padding: 0.85rem 1rem; font-weight: 600; color: var(--muted); border-bottom: 1px solid var(--border); }
        td { padding: 1rem; border-bottom: 1px solid var(--border); vertical-align: middle; }
        tr:hover { background: #F8FAFC; }

        .badge { display: inline-block; padding: 0.25rem 0.65rem; border-radius: 50px; font-size: 0.78rem; font-weight: 600; }
        .badge-success { background: #DEF7EC; color: #03543F; }
        .badge-secondary { background: #F3F4F6; color: #4B5563; }

        .btn-sm { padding: 0.4rem 0.8rem; font-size: 0.82rem; border-radius: 6px; text-decoration: none; font-weight: 600; display: inline-block; cursor: pointer; border: none; }
        .btn-primary { background: var(--primary); color: #fff; }
        .btn-primary:hover { background: var(--primary-dark); }
        .btn-danger { background: #EF4444; color: #fff; }
        .btn-danger:hover { background: #DC2626; }
        .btn-secondary { background: #E2E8F0; color: #475569; }

        .form-group { margin-bottom: 1.2rem; }
        .form-group label { display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 0.4rem; }
        .form-control { width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 0.95rem; font-family: inherit; }
        .form-control:focus { outline: none; border-color: var(--primary); box-shadow: 0 0 0 3px rgba(184,147,63,0.15); }
        textarea.form-control { min-height: 140px; resize: vertical; }

        .pagination-container { margin-top: 1.5rem; display: flex; justify-content: flex-end; }

        @media (max-width: 768px) {
            body { flex-direction: column; }
            aside { width: 100%; }
        }
    </style>
    @yield('styles')
</head>
<body>
    <aside>
        <div class="aside-header">
            <a href="{{ route('admin.dashboard') }}" class="logo">Nexte<span>c</span>k Admin</a>
        </div>
        <nav class="aside-nav">
            <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                📊 Dashboard
            </a>
            <a href="{{ route('admin.blogs.index') }}" class="nav-item {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
                📝 Blogs
            </a>
            <a href="{{ route('admin.leads.index') }}" class="nav-item {{ request()->routeIs('admin.leads.*') ? 'active' : '' }}">
                📬 Lead Forms
            </a>
            <a href="{{ route('home') }}" target="_blank" class="nav-item">
                🌐 Visit Website &rarr;
            </a>
        </nav>
        <div class="aside-footer">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        </div>
    </aside>

    <main>
        <header>
            <h1>@yield('page_header', 'Dashboard')</h1>
            <div class="user-info">Logged in as <strong>{{ Auth::user()->email ?? 'Admin' }}</strong></div>
        </header>

        <div class="content-area">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if(session('error'))
                <div class="alert alert-error">{{ session('error') }}</div>
            @endif

            @yield('content')
        </div>
    </main>
</body>
</html>
