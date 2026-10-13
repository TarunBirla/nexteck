<style>
    footer { background: #0C1B33 !important; color: #fff !important; padding: 4.5rem 0 2.2rem !important; border-top: 1px solid rgba(255,255,255,0.08); font-family: 'Inter', system-ui, sans-serif !important; }
    footer .wrap { width: min(1180px, 92%) !important; margin: 0 auto !important; }
    .foot-grid { display: grid !important; grid-template-columns: 2fr 1fr 1fr 1.2fr !important; gap: 2.5rem !important; margin-bottom: 3.2rem !important; }
    .foot-grid h4 { color: #fff !important; margin-bottom: 1.2rem !important; font-size: 1rem !important; font-family: 'Fraunces', Georgia, serif !important; font-weight: 600 !important; letter-spacing: normal !important; text-transform: none !important; }
    .foot-links { display: flex !important; flex-direction: column !important; gap: 0.65rem !important; }
    .foot-links a { color: #8E99AD !important; text-decoration: none !important; font-size: 0.88rem !important; transition: color .2s ease !important; line-height: 1.5 !important; }
    .foot-links a:hover { color: #fff !important; }
    .foot-bottom { border-top: 1px solid rgba(255,255,255,.1) !important; padding-top: 1.8rem !important; display: flex !important; justify-content: space-between !important; align-items: center !important; flex-wrap: wrap !important; gap: 1rem !important; font-size: 0.82rem !important; color: #8E99AD !important; }
    .sticky-cta { position: fixed; bottom: 1.2rem; right: 1.5rem; z-index: 90; background: #0C1B33; color: #fff; padding: 0.6rem 1.2rem; border-radius: 50px; display: flex; align-items: center; gap: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,.3); border: 1px solid rgba(255,255,255,.12); font-size: 0.9rem; }
    .sticky-cta .btn-gold { background: #B8933F; color: #fff; padding: 0.6rem 1.2rem; border-radius: 999px; text-decoration: none; font-weight: 600; font-size: 0.88rem; transition: 0.2s; box-shadow: 0 8px 20px -6px rgba(184,147,63,0.5); }
    .sticky-cta .btn-gold:hover { background: #000; transform: translateY(-2px); }

    @media (max-width: 900px) {
        .foot-grid { grid-template-columns: 1fr 1fr !important; gap: 2rem !important; }
    }
    @media (max-width: 600px) {
        .foot-grid { grid-template-columns: 1fr !important; gap: 2rem !important; }
        .foot-bottom { flex-direction: column; text-align: center; gap: 0.6rem; }
        .sticky-cta { display: none; }
    }
</style>
<footer>
    <div class="wrap">
        <div class="foot-grid">
            <div>
                <a class="logo" href="{{ route('home') }}" style="color:#fff">Nexte<span>c</span>k<small style="color:#8E99AD">STRATEGY &amp; TECHNOLOGY</small></a>
                <p style="margin-top:1rem; max-width:36ch; font-size:.9rem; color:#8E99AD; line-height:1.6;">
                    Premier Software Development &amp; Industrial Sourcing Company in London. End-to-end business, custom software, IT strategy and AI readiness audits for founders.
                </p>
                <div style="margin-top:1.2rem; font-size:.84rem; color:#CBD5E1;">
                    📍 London, United Kingdom &nbsp;|&nbsp; Global Sourcing Bridge
                </div>
            </div>
            <div>
                <h4>Explore</h4>
                <div class="foot-links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('industries.index') }}">Industries (9 Sectors)</a>
                    <a href="{{ route('toolkit.index') }}">SME Strategy Toolkit</a>
                    <a href="{{ route('blogs.index') }}">Insights &amp; Blogs</a>
                    <a href="{{ route('home') }}#nasar">About Nasar</a>
                    <a href="{{ route('home') }}#method">Methodology</a>
                </div>
            </div>
            <div>
                <h4>SME Toolkit</h4>
                <div class="foot-links">
                    <a href="{{ route('toolkit.index') }}">Client Diagnostic</a>
                    <a href="{{ route('toolkit.index') }}">Industry Benchmark</a>
                    <a href="{{ route('toolkit.index') }}">Competitor Tracker</a>
                    <a href="{{ route('toolkit.index') }}">AI Opportunity Log</a>
                    <a href="{{ route('toolkit.index') }}">SOP Register</a>
                    <a href="{{ route('toolkit.index') }}">KPI Dashboard</a>
                </div>
            </div>
            <div>
                <h4>Contact &amp; Book</h4>
                <div class="foot-links">
                    <a href="{{ route('landing') }}#book" style="color:var(--gold-2); font-weight:700;">Book Free Strategy Call &rarr;</a>
                    <a href="mailto:nasar@nexteck.co.uk">nasar@nexteck.co.uk</a>
                    <a href="tel:+447879175585">+44 (0)78 7917 5585</a>
                    <a href="https://pearlconrail.co.uk" target="_blank" style="color:#CBD5E1;">Rail Partner: pearlconrail.co.uk</a>
                </div>
            </div>
        </div>
        <div class="foot-bottom">
            <span>&copy; {{ date('Y') }} Nexteck Consulting Ltd. All rights reserved. London, UK.</span>
            <span>Built on the Nexteck SME Strategy &amp; Tracking Toolkit™</span>
        </div>
    </div>
</footer>
<div class="sticky-cta">
    <span>Ready to eliminate operational bottlenecks?</span>
    <a class="btn btn-gold" href="{{ route('landing') }}#book">Book Free Call &rarr;</a>
</div>
