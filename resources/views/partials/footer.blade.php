<footer class="broadsheet-footer">
    <div class="wrap">
        <div class="footer-top">
            <div>
                <a class="wordmark" href="{{ route('home') }}" style="display: inline-block; margin-bottom: 1.2rem;">
                    <span class="footer-masthead">Nexteck</span>
                    <span class="wordmark-subtitle" style="color: #9A9488;">STRATEGY &middot; TECHNOLOGY &middot; LONDON</span>
                </a>
                <p style="font-size: 0.92rem; color: #AFA89B; line-height: 1.65; max-width: 42ch;">
                    A senior IT strategy, AI audit, and custom software advisory firm for UK business owners. Led by 25-year industry architect Mohammed Nasar.
                </p>
                <div style="font-family: var(--font-mono); font-size: 0.74rem; color: #8A8478; margin-top: 1.4rem; letter-spacing: 0.04em;">
                    OFFICE: London, United Kingdom &nbsp;&middot;&nbsp; Global Sourcing Bridge
                </div>
            </div>

            <div>
                <div class="footer-col-title">Practice</div>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Home Dossier</a></li>
                    <li><a href="{{ route('industries.index') }}">Sectors &amp; Industries</a></li>
                    <li><a href="{{ route('toolkit.index') }}">SME Strategy Toolkit</a></li>
                    <li><a href="{{ route('blogs.index') }}">Journal &amp; Insights</a></li>
                    <li><a href="{{ route('home') }}#nasar">Principal Background</a></li>
                    <li><a href="{{ route('home') }}#method">4-Stage Methodology</a></li>
                </ul>
            </div>

            <div>
                <div class="footer-col-title">Diagnostics</div>
                <ul class="footer-links">
                    <li><a href="{{ route('toolkit.index') }}">Client Diagnostic</a></li>
                    <li><a href="{{ route('toolkit.index') }}">Industry Benchmark</a></li>
                    <li><a href="{{ route('toolkit.index') }}">Competitor Tracker</a></li>
                    <li><a href="{{ route('toolkit.index') }}">AI Opportunity Log</a></li>
                    <li><a href="{{ route('toolkit.index') }}">SOP Register</a></li>
                    <li><a href="{{ route('toolkit.index') }}">KPI Dashboard</a></li>
                </ul>
            </div>

            <div>
                <div class="footer-col-title">Inquiries</div>
                <ul class="footer-links">
                    <li><a href="{{ route('landing') }}#book" style="color: #E2DFD8; font-weight: 600; text-decoration: underline; text-underline-offset: 4px;">Book Discovery Call</a></li>
                    <li><a href="mailto:nasar@nexteck.co.uk">nasar@nexteck.co.uk</a></li>
                    <li><a href="tel:+447879175585">+44 (0)78 7917 5585</a></li>
                    <li><a href="https://pearlconrail.co.uk" target="_blank" style="color: #9E988C;">Rail Partner: pearlconrail.co.uk</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <span>&copy; {{ date('Y') }} Nexteck Consulting Ltd. Registered in England &amp; Wales.</span>
            <span>Nexteck SME Strategy &amp; Tracking Toolkit&trade; &middot; Editorial Advisory Release</span>
        </div>
    </div>
</footer>
