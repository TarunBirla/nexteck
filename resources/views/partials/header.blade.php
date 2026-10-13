<div class="announcement-bar">
    <span>Advisory Dossier &middot; <b>Taking on 6 engagements per quarter.</b> London &middot; UK-wide</span>
</div>

<nav class="masthead">
    <div class="wrap masthead-in">
        <a class="wordmark" href="{{ route('home') }}">
            <span class="wordmark-title">Nexteck</span>
            <span class="wordmark-subtitle">Strategy &middot; Technology &middot; London</span>
        </a>
        
        <div class="nav-menu" id="primaryNav">
            <a class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}#audit">The Audit</a>
            <a class="nav-item" href="{{ route('home') }}#method">Methodology</a>
            <a class="nav-item" href="{{ route('home') }}#nasar">Principal</a>
            <a class="nav-item {{ request()->routeIs('industries.*') ? 'active' : '' }}" href="{{ route('industries.index') }}">Industries</a>
            <a class="nav-item {{ request()->routeIs('toolkit.*') ? 'active' : '' }}" href="{{ route('toolkit.index') }}">SME Toolkit</a>
            <a class="nav-item {{ request()->routeIs('blogs.*') ? 'active' : '' }}" href="{{ route('blogs.index') }}">Journal</a>
            <a class="btn btn-primary" href="{{ route('landing') }}#book" style="padding: 0.55rem 1.15rem; font-size: 0.86rem;">Book Discovery Call</a>
        </div>

        <button class="burger-btn" id="burgerToggle" aria-label="Toggle Navigation" onclick="toggleNavMenu()">
            <span id="burgerIcon">&#9776;</span>
        </button>
    </div>
</nav>

<style>
    @media (max-width: 960px) {
        .nav-menu.mobile-open {
            display: flex !important;
            flex-direction: column;
            position: absolute;
            top: 70px;
            left: 0;
            right: 0;
            background: var(--paper-warm);
            border-bottom: 1px solid var(--line);
            padding: 1.5rem 1.8rem;
            gap: 1.2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
            align-items: flex-start;
        }
    }
</style>

<script>
    function toggleNavMenu() {
        const menu = document.getElementById('primaryNav');
        const icon = document.getElementById('burgerIcon');
        if (menu) {
            const isOpen = menu.classList.toggle('mobile-open');
            if (icon) icon.innerHTML = isOpen ? '&times;' : '&#9776;';
        }
    }
</script>
