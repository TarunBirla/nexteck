<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industries &amp; Engineering Supply Chains | Nexteck London</title>
    <meta name="description" content="Explore Nexteck's 9 targeted industries: Oil &amp; Gas, Mining &amp; Drilling, Industrial Plants, Railways, Water Treatment, Chemicals, Manufacturing, Medical &amp; Global Sourcing.">
    <meta name="keywords" content="Industrial Sourcing London, Oil Gas Petrochemicals Sourcing, Mining Drilling Consumables, Railways pearlconrail.co.uk, Manufacturing Plants Supply, Low Cost Country Sourcing India Asia, UK Engineering Procurement">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url('/industries') }}">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nexteck">
    <meta property="og:title" content="Industries &amp; Engineering Supply Chains | Nexteck London">
    <meta property="og:description" content="Explore Nexteck's 9 targeted industries: Oil &amp; Gas, Mining &amp; Drilling, Industrial Plants, Railways, Water Treatment, Chemicals, Manufacturing, Medical &amp; Global Sourcing.">
    <meta property="og:url" content="{{ url('/industries') }}">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/editorial.css') }}">
    <style>
        .sec-sectors-hero {
            background-color: var(--paper-warm);
            border-bottom: 1px solid var(--line);
            padding: clamp(3.5rem, 6vw, 5rem) 0 3.5rem;
        }
        .sector-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3.5rem;
        }
        .sector-card {
            background-color: var(--paper-card);
            border: 1px solid var(--line);
            border-radius: var(--radius-sm);
            display: flex;
            flex-direction: column;
            transition: border-color 0.18s ease;
            position: relative;
        }
        .sector-card:hover {
            border-color: var(--ink);
        }
        .sector-img-frame {
            height: 220px;
            width: 100%;
            background-color: var(--paper-warm);
            overflow: hidden;
            border-bottom: 1px solid var(--line);
        }
        .sector-img-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: contrast(1.02);
        }
        .sector-body {
            padding: 1.8rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .sector-tag {
            font-family: var(--font-mono);
            font-size: 0.72rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--accent);
            margin-bottom: 0.6rem;
        }
        .sector-title {
            font-family: var(--font-serif);
            font-size: 1.4rem;
            color: var(--ink);
            line-height: 1.25;
            margin-bottom: 0.4rem;
        }
        .sector-tagline {
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--ink-light);
            margin-bottom: 0.8rem;
        }
        .sector-desc {
            font-size: 0.92rem;
            color: var(--ink-muted);
            line-height: 1.6;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        @media (max-width: 960px) {
            .sector-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 640px) {
            .sector-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <header class="sec-sectors-hero">
        <div class="wrap">
            <div style="max-width: 760px;">
                <span class="eyebrow">Enterprise Sector Practice</span>
                <h1 style="margin-bottom: 1rem;">Industries &amp; Engineering Supply Chains</h1>
                <p class="lead" style="margin-bottom: 0;">
                    From North Sea offshore platforms and high-speed rail to continuous manufacturing lines and low-cost global component sourcing &mdash; Nexteck bridges technical procurement with bespoke digital architecture.
                </p>
            </div>
        </div>
    </header>

    <main class="wrap" style="padding: 1rem 0 5rem;">
        <div class="sector-grid">
            @forelse($industries as $item)
                <article class="sector-card">
                    <span class="crosshair crosshair-tr">+</span>
                    <div class="sector-img-frame">
                        <img src="{{ $item->image_url ?? (is_array($item) ? $item['image'] : $item->image) }}" alt="{{ $item->title ?? $item['title'] }}" loading="lazy">
                    </div>
                    <div class="sector-body">
                        <div class="sector-tag">Specialist Sector</div>
                        <h2 class="sector-title">
                            <a href="{{ route('industries.show', $item->slug ?? $item['slug']) }}" style="text-decoration: none;">
                                {{ $item->title ?? $item['title'] }}
                            </a>
                        </h2>
                        <div class="sector-tagline">{{ $item->tagline ?? $item['tagline'] }}</div>
                        <p class="sector-desc">{{ $item->short_desc ?? $item['short_desc'] }}</p>
                        <a href="{{ route('industries.show', $item->slug ?? $item['slug']) }}" class="btn-link" style="margin-top: auto;">
                            View Sourcing &amp; Tech Details &rarr;
                        </a>
                    </div>
                </article>
            @empty
                <div style="grid-column: 1 / -1; text-align: center; color: var(--ink-muted); padding: 5rem 0;">
                    No active industry sectors available at the moment.
                </div>
            @endforelse
        </div>

        @if(method_exists($industries, 'links'))
            <div style="margin-top: 3.5rem;">
                {{ $industries->links('partials.pagination') }}
            </div>
        @endif
    </main>

    @include('partials.footer')
</body>
</html>
