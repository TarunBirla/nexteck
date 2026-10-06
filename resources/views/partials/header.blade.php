<div class="topbar">Q4 2026 — <b>only 4 audit slots left this quarter.</b> Every week you wait, manual work costs
    you roughly 10+ owner-hours. &nbsp;<span class="cd">Ends in <span id="cd-d">--</span>d <span
            id="cd-h">--</span>h <span id="cd-m">--</span>m <span id="cd-s">--</span>s</span></div>

<nav>
    <div class="wrap nav-in">
        <a class="logo" href="{{ route('home') }}">Nexte<span>c</span>k<small>STRATEGY &amp; TECHNOLOGY</small></a>
        <div class="nav-links">
            <a href="{{ route('home') }}#audit">The Audit</a>
            <a href="{{ route('home') }}#method">Methodology</a>
            <a href="{{ route('home') }}#nasar">About Nasar</a>
            <a href="{{ route('home') }}#industries">Industries</a>
            <a href="{{ route('blogs.index') }}">Blogs</a>
            @if(Route::currentRouteName() === 'home')
                <a href="#urgency">Why Now</a>
            @endif
            <a class="btn btn-gold nav-cta" href="{{ route('landing') }}#book">Book Strategy Call</a>
        </div>
        <button class="burger"
            onclick="document.querySelector('.nav-links').style.display=document.querySelector('.nav-links').style.display==='flex'?'none':'flex';document.querySelector('.nav-links').style.position='absolute';document.querySelector('.nav-links').style.top='74px';document.querySelector('.nav-links').style.left='0';document.querySelector('.nav-links').style.right='0';document.querySelector('.nav-links').style.background='#fff';document.querySelector('.nav-links').style.flexDirection='column';document.querySelector('.nav-links').style.padding='1.2rem';document.querySelector('.nav-links').style.borderBottom='1px solid var(--line)';">☰</button>
    </div>
</nav>

<script>
    (function() {
        const target = new Date("2026-12-31T23:59:59+00:00").getTime();
        function tickHeader() {
            let d = target - Date.now(); if (d < 0) d = 0;
            const dd = Math.floor(d / 864e5), hh = Math.floor(d / 36e5) % 24, mm = Math.floor(d / 6e4) % 60, ss = Math.floor(d / 1e3) % 60;
            const set = (id, v) => { const e = document.getElementById(id); if (e) e.textContent = String(v).padStart(2, "0"); };
            set("cd-d", dd); set("cd-h", hh); set("cd-m", mm); set("cd-s", ss);
        }
        tickHeader(); setInterval(tickHeader, 1000);
    })();
</script>
