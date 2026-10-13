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
