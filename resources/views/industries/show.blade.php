<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $industry->seo_title ?? ($industry['seo_title'] ?? $industry->title) }}</title>
    <meta name="description" content="{{ $industry->meta_desc ?? ($industry['meta_desc'] ?? $industry->short_desc) }}">
    @php
        $kwList = $industry->keywords ?? ($industry['keywords'] ?? []);
        if (is_string($kwList)) { $kwList = explode(',', $kwList); }
    @endphp
    <meta name="keywords" content="{{ is_array($kwList) ? implode(', ', $kwList) : $kwList }}, Nexteck London, UK Engineering Supply">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url('/industries/' . ($industry->slug ?? $industry['slug'])) }}">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Nexteck">
    <meta property="og:title" content="{{ $industry->seo_title ?? $industry['seo_title'] }}">
    <meta property="og:description" content="{{ $industry->meta_desc ?? $industry['meta_desc'] }}">
    <meta property="og:image" content="{{ $industry->image_url ?? $industry['image'] }}">
    <meta property="og:url" content="{{ url('/industries/' . ($industry->slug ?? $industry['slug'])) }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $industry->seo_title ?? $industry['seo_title'] }}">
    <meta name="twitter:description" content="{{ $industry->meta_desc ?? $industry['meta_desc'] }}">
    <meta name="twitter:image" content="{{ $industry->image_url ?? $industry['image'] }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/editorial.css') }}">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "{{ $industry->title ?? ($industry['title'] ?? '') }} — Supply & Technology Solutions",
      "serviceType": "Industrial Sourcing & Technology Consulting",
      "provider": {
        "@type": "ProfessionalService",
        "name": "Nexteck",
        "url": "{{ url('/') }}",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "London",
          "addressCountry": "GB"
        }
      },
      "areaServed": ["United Kingdom", "London", "Global"],
      "description": "{{ $industry->meta_desc ?? ($industry['meta_desc'] ?? '') }}"
    }
    </script>
    <style>
        .ind-detail-hero {
            background-color: var(--paper-warm);
            border-bottom: 1px solid var(--line);
            padding: clamp(3.5rem, 5.5vw, 5rem) 0 3.5rem;
        }
        .breadcrumbs-nav {
            font-family: var(--font-mono);
            font-size: 0.76rem;
            color: var(--ink-muted);
            letter-spacing: 0.05em;
            margin-bottom: 1.2rem;
            text-transform: uppercase;
        }
        .breadcrumbs-nav a:hover {
            color: var(--accent);
        }

        .ind-detail-layout {
            display: grid;
            grid-template-columns: 8fr 4fr;
            gap: 3.5rem;
            padding: 4rem 0 6rem;
        }

        .featured-frame {
            border: 1px solid var(--line);
            padding: 8px;
            background-color: var(--paper-card);
            margin-bottom: 2.5rem;
        }
        .featured-frame img {
            width: 100%;
            height: 380px;
            object-fit: cover;
            display: block;
        }

        /* Rich Content & Summernote Formats */
        .rich-desc {
            font-size: 1.05rem;
            color: var(--ink-light);
            line-height: 1.8;
            margin-bottom: 2rem;
        }
        .rich-desc p { margin-bottom: 1.5rem; }
        .rich-desc h2, .rich-desc h3 {
            font-family: var(--font-serif);
            color: var(--ink);
            margin: 2.2rem 0 1rem;
        }
        .highlight-word, .rich-desc strong, .rich-desc b {
            color: var(--ink);
            font-weight: 700;
            background-color: var(--paper-warm);
            padding: 0.1rem 0.4rem;
            border-bottom: 1.5px solid var(--accent);
            border-radius: var(--radius-sm);
        }
        .blog-tagline, .rich-desc blockquote {
            background-color: var(--paper-warm);
            border-left: 3px solid var(--accent);
            padding: 1.3rem 1.8rem;
            margin: 2.2rem 0;
            font-family: var(--font-serif);
            font-size: 1.2rem;
            font-style: italic;
            color: var(--ink);
            line-height: 1.6;
        }
        .rich-desc a {
            color: var(--accent) !important;
            font-weight: 600 !important;
            text-decoration: underline !important;
            text-underline-offset: 4px !important;
        }
        .rich-desc a:hover {
            color: var(--accent-hover) !important;
        }

        /* Specifications List */
        .specs-ledger {
            list-style: none;
            margin: 1.5rem 0 2.5rem;
            border-top: 1px solid var(--line);
        }
        .specs-ledger-row {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid var(--line);
            font-size: 0.95rem;
        }
        .specs-marker {
            font-family: var(--font-mono);
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--accent);
            margin-top: 0.15rem;
        }

        /* Advantage Box */
        .advantage-docket {
            background-color: var(--paper-warm);
            border: 1px solid var(--line);
            border-radius: var(--radius-sm);
            padding: 2rem;
            margin: 2.5rem 0;
            position: relative;
        }

        /* Sidebar Audit Box */
        .sidebar-docket {
            background-color: var(--paper-warm);
            border: 1px solid var(--line);
            border-radius: var(--radius-sm);
            padding: 2rem;
            position: sticky;
            top: 100px;
        }

        /* Related Sectors */
        .related-card {
            background-color: var(--paper-card);
            border: 1px solid var(--line);
            border-radius: var(--radius-sm);
            display: flex;
            flex-direction: column;
            position: relative;
            transition: border-color 0.18s ease;
        }
        .related-card:hover {
            border-color: var(--ink);
        }
        .related-img {
            height: 180px;
            width: 100%;
            object-fit: cover;
            border-bottom: 1px solid var(--line);
        }
        .related-body {
            padding: 1.4rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        @media (max-width: 960px) {
            .ind-detail-layout { grid-template-columns: 1fr; }
            .sidebar-docket { position: static; margin-top: 2rem; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <section class="ind-detail-hero">
        <div class="wrap">
            <div class="breadcrumbs-nav">
                <a href="{{ route('home') }}">Home</a> &nbsp;/&nbsp;
                <a href="{{ route('industries.index') }}">Sectors</a> &nbsp;/&nbsp;
                <span>{{ $industry->title ?? ($industry['title'] ?? '') }}</span>
            </div>
            <div class="stamp-badge accent" style="margin-bottom: 1rem;">
                Sector Intelligence &middot; Engineering &amp; IT
            </div>
            <h1 style="margin-bottom: 0.8rem;">{{ $industry->title ?? ($industry['title'] ?? '') }}</h1>
            <p class="lead" style="margin-bottom: 2rem; max-width: 820px;">
                {{ $industry->tagline ?? ($industry['tagline'] ?? '') }}
            </p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="{{ route('landing') }}#book" class="btn btn-primary">
                    Inquire for {{ $industry->title ?? ($industry['title'] ?? '') }} Sourcing &rarr;
                </a>
                <a href="{{ route('toolkit.index') }}" class="btn btn-secondary">
                    Assess in SME Toolkit
                </a>
            </div>
        </div>
    </section>

    <main class="wrap">
        <div class="ind-detail-layout">
            <!-- Article Body -->
            <article>
                <div class="featured-frame">
                    <img src="{{ $industry->image_url ?? ($industry['image'] ?? '') }}" alt="{{ $industry->title ?? ($industry['title'] ?? '') }} procurement and technology supply">
                </div>

                <h2 style="margin-bottom: 1.2rem;">Strategic Architecture &amp; Procurement in {{ $industry->title ?? ($industry['title'] ?? '') }}</h2>
                
                @if(!empty($industry->rendered_content))
                    <div class="rich-desc">
                        {!! $industry->rendered_content !!}
                    </div>
                @elseif(!empty($industry->description))
                    <div class="rich-desc">
                        {!! $industry->description !!}
                    </div>
                @else
                    <p class="rich-desc">{{ $industry->short_desc ?? ($industry['short_desc'] ?? '') }}</p>
                @endif

                @php
                    $hlList = $industry->highlights ?? ($industry['highlights'] ?? []);
                    if (is_string($hlList)) {
                        $hlList = array_filter(array_map('trim', explode("\n", $hlList)));
                    }
                @endphp
                @if(!empty($hlList))
                    <h3 style="margin-top: 2.5rem; margin-bottom: 0.8rem;">Key Supply Scope &amp; Engineering Specifications</h3>
                    <ul class="specs-ledger">
                        @foreach($hlList as $hl)
                            <li class="specs-ledger-row">
                                <span class="specs-marker">[x]</span>
                                <div>{{ $hl }}</div>
                            </li>
                        @endforeach
                    </ul>
                @endif

                @php
                    $whyText = $industry->why_nexteck ?? ($industry['why_nexteck'] ?? null);
                @endphp
                @if(!empty($whyText))
                    <div class="advantage-docket">
                        <span class="crosshair crosshair-tr">+</span>
                        <div class="meta-tag">ADVISORY DISTINCTION</div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 0.6rem;">The Nexteck Advantage</h3>
                        <p style="margin: 0; color: var(--ink-muted); font-size: 0.96rem; line-height: 1.65;">{{ $whyText }}</p>
                    </div>
                @endif

                @if(($industry->slug ?? ($industry['slug'] ?? '')) === 'railways')
                    <div style="background: var(--paper-dark); color: #fff; padding: 2rem 2.2rem; border-radius: var(--radius-sm); margin-top: 2rem; border: 1px solid #332F27;">
                        <div style="font-family: var(--font-mono); font-size: 0.74rem; color: #83B89E; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 0.5rem;">
                            Verified Infrastructure Partner
                        </div>
                        <h3 style="color: #fff; margin-bottom: 0.6rem;">pearlconrail.co.uk</h3>
                        <p style="color: #C5BFB3; font-size: 0.94rem; line-height: 1.6; margin-bottom: 1.2rem;">
                            All rolling stock assemblies, braking systems, and track infrastructure components are supplied in coordination with verified specialist networks at <a href="https://pearlconrail.co.uk" target="_blank" style="color: #FFFFFF; text-decoration: underline;">pearlconrail.co.uk</a>.
                        </p>
                        <a href="https://pearlconrail.co.uk" target="_blank" class="btn btn-ghost" style="color: #fff; border-color: #666; font-size: 0.85rem;">
                            Visit pearlconrail.co.uk &rarr;
                        </a>
                    </div>
                @endif
            </article>

            <!-- Sidebar -->
            <aside>
                <div class="sidebar-docket">
                    <span class="crosshair crosshair-tr">+</span>
                    <div class="meta-tag">DIRECT CONSULTATION</div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 0.8rem;">Book a Sector Audit Call</h3>
                    <p style="font-size: 0.9rem; color: var(--ink-muted); line-height: 1.6; margin-bottom: 1.5rem;">
                        Need costed spare parts sourcing, custom fabrication, or digital supply chain automation for {{ $industry->title ?? ($industry['title'] ?? '') }}? Speak directly with Principal Consultant Mohammed Nasar.
                    </p>
                    <a href="{{ route('landing') }}#book" class="btn btn-primary" style="width: 100%; justify-content: center;">
                        Book Discovery Call
                    </a>
                </div>
            </aside>
        </div>
    </main>

    <!-- Related Sectors -->
    <section class="sec sec-warm">
        <div class="wrap">
            <div style="text-align: center; max-width: 650px; margin: 0 auto 3rem;">
                <span class="eyebrow" style="justify-content: center;">Cross-Industry Depth</span>
                <h2>Explore Complementary Sectors</h2>
            </div>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
                @foreach($related as $rel)
                    @php
                        $relTitle = $rel->title ?? ($rel['title'] ?? '');
                        $relSlug = $rel->slug ?? ($rel['slug'] ?? '');
                        $relTagline = $rel->tagline ?? ($rel['tagline'] ?? '');
                        $relImg = is_object($rel) ? $rel->image_url : ($rel['image'] ?? '');
                    @endphp
                    <article class="related-card">
                        <span class="crosshair crosshair-tr">+</span>
                        <img src="{{ $relImg }}" alt="{{ $relTitle }}" class="related-img">
                        <div class="related-body">
                            <h3 style="font-size: 1.25rem; margin-bottom: 0.4rem;">
                                <a href="{{ route('industries.show', $relSlug) }}" style="text-decoration: none;">{{ $relTitle }}</a>
                            </h3>
                            <p style="font-size: 0.88rem; color: var(--ink-muted); margin-bottom: 1.2rem; flex-grow: 1;">
                                {{ Str::limit($relTagline, 75) }}
                            </p>
                            <a href="{{ route('industries.show', $relSlug) }}" class="btn-link" style="margin-top: auto;">
                                Read Briefing &rarr;
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.footer')
</body>
</html>
