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
