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
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #0C1B33;
            --ink-2: #1E2D4A;
            --muted: #5A6478;
            --line: #E7E4DC;
            --paper: #FFFFFF;
            --cream: #F7F5F0;
            --gold: #B8933F;
            --gold-2: #D9BC7A;
            --shadow: 0 18px 50px -18px rgba(12, 27, 51, .22);
            --radius: 18px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', system-ui, sans-serif; color: var(--ink); background: var(--paper); line-height: 1.6; -webkit-font-smoothing: antialiased; overflow-x: hidden; }
        h1, h2, h3, .serif { font-family: 'Fraunces', Georgia, serif; font-weight: 600; line-height: 1.15; letter-spacing: -.01em; }
        a { color: inherit; text-decoration: none; }
        .wrap { width: min(1200px, 92%); margin: 0 auto; }

        /* Announcement + Nav */
        .topbar { background: var(--ink); color: #fff; font-size: .82rem; text-align: center; padding: .55rem 1rem; position: relative; z-index: 60; }
        .topbar b { color: var(--gold-2); }
        .topbar .cd { font-variant-numeric: tabular-nums; font-weight: 700; color: var(--gold-2); }
        nav { position: sticky; top: 0; z-index: 50; background: rgba(255, 255, 255, .94); backdrop-filter: blur(14px); border-bottom: 1px solid var(--line); }
        .nav-in { display: flex; align-items: center; justify-content: space-between; height: 74px; }
        .logo { font-family: 'Fraunces', serif; font-size: 1.55rem; font-weight: 700; letter-spacing: -.02em; }
        .logo span { color: var(--gold); }
        .logo small { display: block; font-family: 'Inter'; font-size: .58rem; letter-spacing: .34em; color: var(--muted); font-weight: 600; margin-top: -4px; }
        .nav-links { display: flex; gap: 2rem; align-items: center; font-size: .92rem; font-weight: 500; }
        .nav-links a { color: var(--ink-2); position: relative; }
        .nav-links a:hover { color: var(--gold); }
        .btn { display: inline-flex; align-items: center; gap: .6rem; font-weight: 600; font-size: .95rem; padding: .85rem 1.6rem; border-radius: 999px; cursor: pointer; border: 1.5px solid transparent; transition: .25s; }
        .btn-gold { background: var(--gold); color: #fff; box-shadow: 0 12px 28px -10px rgba(184, 147, 63, .55); }
        .btn-gold:hover { background: #000; transform: translateY(-2px); }
        .nav-cta { padding: .68rem 1.35rem; }
        .burger { display: none; background: none; border: 0; font-size: 1.5rem; cursor: pointer; }

        /* Hero */
        .ind-hero { background: linear-gradient(135deg, #0C1B33 0%, #1E2D4A 100%); color: #fff; padding: 4.5rem 0 3.5rem; text-align: center; border-bottom: 4px solid var(--gold); }
        .eyebrow { display: inline-flex; align-items: center; gap: .55rem; font-size: .74rem; font-weight: 700; letter-spacing: .16em; text-transform: uppercase; color: var(--gold-2); margin-bottom: .8rem; }
        .ind-hero h1 { font-size: clamp(2.2rem, 3.8vw, 3.2rem); margin-bottom: 1rem; color: #fff; }
        .ind-hero p { max-width: 760px; margin: 0 auto; color: #CBD5E1; font-size: 1.06rem; }

        /* Grid */
        .ind-section { padding: 4.5rem 0 6rem; background: var(--cream); }
        .ind-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; }
        .ind-card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform .25s ease, box-shadow .25s ease;
        }
        .ind-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow);
            border-color: var(--gold);
        }
        .ind-img-wrap {
            height: 220px;
            width: 100%;
            overflow: hidden;
            position: relative;
            background: var(--ink);
        }
        .ind-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .4s ease;
        }
        .ind-card:hover .ind-img-wrap img {
            transform: scale(1.05);
        }
        .ind-body {
            padding: 1.7rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .ind-badge {
            align-self: flex-start;
            background: rgba(184, 147, 63, 0.12);
            color: var(--gold);
            font-size: .74rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            padding: .25rem .65rem;
            border-radius: 6px;
            margin-bottom: .85rem;
        }
        .ind-title {
            font-family: 'Fraunces', serif;
            font-size: 1.38rem;
            color: var(--ink);
            margin-bottom: .6rem;
            line-height: 1.3;
        }
        .ind-tagline {
            font-size: .95rem;
            color: var(--ink-2);
            font-weight: 600;
            margin-bottom: .75rem;
            line-height: 1.45;
        }
        .ind-desc {
            font-size: .88rem;
            color: var(--muted);
            margin-bottom: 1.4rem;
            flex-grow: 1;
            line-height: 1.55;
        }
        .ind-link {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            color: var(--gold);
            font-weight: 700;
            font-size: .92rem;
            transition: gap .2s;
        }
        .ind-link:hover {
            color: #000;
            gap: .65rem;
        }

        /* SEO Keywords cloud */
        .seo-keywords-card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            padding: 2.2rem;
            margin-top: 3.5rem;
            box-shadow: 0 4px 20px rgba(12,27,51,0.04);
        }
        .seo-keywords-card h3 {
            font-size: 1.25rem;
            color: var(--ink);
            margin-bottom: 1rem;
        }
        .keywords-wrap {
            display: flex;
            flex-wrap: wrap;
            gap: .55rem;
        }
        .kw-pill {
            background: #F1F5F9;
            color: var(--ink-2);
            border: 1px solid #E2E8F0;
            font-size: .8rem;
            font-weight: 500;
            padding: .35rem .75rem;
            border-radius: 99px;
            transition: all .2s;
        }
        .kw-pill:hover {
            background: var(--gold);
            color: #fff;
            border-color: var(--gold);
        }

        /* CUSTOM PAGINATION STYLES */
        .pagination-wrap { margin-top: 3.5rem; }
        .custom-pagination { display: flex; flex-direction: column; align-items: center; gap: 1rem; }
        .pagination-info { font-size: 0.9rem; color: var(--muted); }
        .pagination-list { display: flex; gap: 0.4rem; list-style: none; padding: 0; margin: 0; align-items: center; }
        .page-item .page-link { display: inline-flex; align-items: center; justify-content: center; min-width: 38px; height: 38px; padding: 0 0.8rem; border: 1px solid var(--line); border-radius: 8px; color: var(--ink); text-decoration: none; font-size: 0.9rem; font-weight: 600; background: #fff; transition: all 0.2s; }
        .page-item .page-link:hover { border-color: var(--gold); color: var(--gold); }
        .page-item.active .page-link { background: var(--gold); color: #fff; border-color: var(--gold); }
        .page-item.disabled .page-link { opacity: 0.5; cursor: not-allowed; background: #F7F5F0; border-color: var(--line); color: var(--muted); }

        footer { background: var(--ink); color: #fff; padding: 4rem 0 2rem; }
        .foot-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1.2fr; gap: 2rem; margin-bottom: 3rem; }
        .foot-grid h4 { color: #fff; margin-bottom: 1.2rem; font-size: 1rem; }
        .foot-links { display: flex; flex-direction: column; gap: 0.6rem; }
        .foot-links a { color: #8E99AD; text-decoration: none; font-size: 0.88rem; transition: color .2s; }
        .foot-links a:hover { color: #fff; }
        .foot-bottom { border-top: 1px solid rgba(255,255,255,.1); padding-top: 1.8rem; display: flex; justify-content: space-between; font-size: 0.82rem; color: #8E99AD; }
        .sticky-cta { position: fixed; bottom: 1.2rem; right: 1.5rem; z-index: 90; background: var(--ink); color: #fff; padding: 0.6rem 1.2rem; border-radius: 50px; display: flex; align-items: center; gap: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,.3); border: 1px solid rgba(255,255,255,.1); }

        @media (max-width: 960px) {
            .ind-grid { grid-template-columns: repeat(2, 1fr); }
            .foot-grid { grid-template-columns: 1fr 1fr; }
            .nav-links { display: none; }
            .burger { display: block; }
        }
        @media (max-width: 620px) {
            .ind-grid { grid-template-columns: 1fr; }
            .foot-grid { grid-template-columns: 1fr; }
            .sticky-cta { display: none; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <section class="ind-hero">
        <div class="wrap">
            <div class="eyebrow">Enterprise Sector Depth</div>
            <h1>Industries &amp; Engineering Supply Chains</h1>
            <p>From North Sea energy platforms and rail infrastructure to continuous manufacturing lines and low-cost global sourcing — Nexteck combines engineering procurement with bespoke digital workflows.</p>
        </div>
    </section>

    <main class="ind-section">
        <div class="wrap">
            <div class="ind-grid">
                @forelse($industries as $item)
                    <article class="ind-card">
                        <div class="ind-img-wrap">
                            <img src="{{ $item->image_url ?? (is_array($item) ? $item['image'] : $item->image) }}" alt="{{ $item->title ?? $item['title'] }}" loading="lazy">
                        </div>
                        <div class="ind-body">
                            <span class="ind-badge">Sector Solutions</span>
                            <h2 class="ind-title"><a href="{{ route('industries.show', $item->slug ?? $item['slug']) }}">{{ $item->title ?? $item['title'] }}</a></h2>
                            <div class="ind-tagline">{{ $item->tagline ?? $item['tagline'] }}</div>
                            <p class="ind-desc">{{ $item->short_desc ?? $item['short_desc'] }}</p>
                            <a href="{{ route('industries.show', $item->slug ?? $item['slug']) }}" class="ind-link">
                                Explore Sourcing &amp; Tech Details &rarr;
                            </a>
                        </div>
                    </article>
                @empty
                    <p style="grid-column: 1 / -1; text-align: center; color: var(--muted); padding: 3rem 0;">No active industry sectors available at the moment.</p>
                @endforelse
            </div>

            @if(method_exists($industries, 'links'))
                <div class="pagination-wrap">
                    {{ $industries->links('partials.pagination') }}
                </div>
            @endif
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
