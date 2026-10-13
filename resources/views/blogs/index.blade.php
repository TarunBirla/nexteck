<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Development, AI &amp; IT Strategy Journal | Nexteck London</title>
    <meta name="description" content="Expert insights on custom software development in London, web solutions, AI readiness, workflow automation, and SME growth by Nexteck.">
    <meta name="keywords" content="Software Development Blog London, Custom Software Insights UK, AI Readiness SMEs, Web Development London, Nexteck Blog">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url('/blogs') }}">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nexteck">
    <meta property="og:title" content="Software Development, AI &amp; IT Strategy Journal | Nexteck London">
    <meta property="og:description" content="Expert insights on custom software development in London, web solutions, AI readiness, workflow automation, and SME growth by Nexteck.">
    <meta property="og:url" content="{{ url('/blogs') }}">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/editorial.css') }}">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Blog",
      "name": "Nexteck Insights — Software Development & AI Strategy Journal London",
      "url": "{{ url('/blogs') }}",
      "description": "Expert articles on custom software development, web applications, IT strategy, and AI automation for SMEs in London and the UK.",
      "publisher": {
        "@type": "Organization",
        "name": "Nexteck — Software Development Company London",
        "url": "{{ url('/') }}"
      }
    }
    </script>
    <style>
        .journal-hero {
            background-color: var(--paper-warm);
            border-bottom: 1px solid var(--line);
            padding: clamp(3.5rem, 6vw, 5rem) 0 3.5rem;
        }
        .journal-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3.5rem;
        }
        .journal-card {
            background-color: var(--paper-card);
            border: 1px solid var(--line);
            border-radius: var(--radius-sm);
            display: flex;
            flex-direction: column;
            transition: border-color 0.18s ease;
            position: relative;
        }
        .journal-card:hover {
            border-color: var(--ink);
        }
        .journal-img-wrap {
            height: 220px;
            width: 100%;
            background-color: var(--paper-warm);
            overflow: hidden;
            border-bottom: 1px solid var(--line);
        }
        .journal-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: contrast(1.02);
        }
        .journal-body {
            padding: 1.8rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .journal-date {
            font-family: var(--font-mono);
            font-size: 0.74rem;
            color: var(--ink-muted);
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 0.6rem;
        }
        .journal-title {
            font-family: var(--font-serif);
            font-size: 1.38rem;
            color: var(--ink);
            line-height: 1.25;
            margin-bottom: 0.8rem;
            text-decoration: none;
        }
        .journal-title:hover {
            color: var(--accent);
        }
        .journal-excerpt {
            color: var(--ink-muted);
            font-size: 0.92rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        @media (max-width: 960px) {
            .journal-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 640px) {
            .journal-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <header class="journal-hero">
        <div class="wrap">
            <div style="max-width: 720px;">
                <span class="eyebrow">Advisory Journal &middot; Perspectives</span>
                <h1 style="margin-bottom: 1rem;">Nexteck Strategy &amp; AI Journal</h1>
                <p class="lead" style="margin-bottom: 0;">
                    Unfiltered analysis on bespoke software architecture, IT governance, workflow automation, and commercial risk for UK SME founders.
                </p>
            </div>
        </div>
    </header>

    <main class="wrap" style="padding: 1rem 0 5rem;">
        @if($blogs->count() > 0)
            <div class="journal-grid">
                @foreach($blogs as $blog)
                    <article class="journal-card">
                        <span class="crosshair crosshair-tr">+</span>
                        <div class="journal-img-wrap">
                            @if($blog->image)
                                <img class="journal-img" src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" loading="lazy">
                            @else
                                <div style="width:100%; height:100%; background: var(--paper-warm); display:flex; align-items:center; justify-content:center; color: var(--ink-faint); font-family: var(--font-serif); font-size: 1.4rem; font-style: italic;">
                                    Nexteck Advisory
                                </div>
                            @endif
                        </div>
                        <div class="journal-body">
                            <div class="journal-date">{{ $blog->created_at->format('d M Y') }}</div>
                            <a href="{{ route('blogs.show', $blog->slug) }}" class="journal-title">
                                {{ $blog->title }}
                            </a>
                            <p class="journal-excerpt">
                                {{ Str::limit(strip_tags($blog->description), 130) }}
                            </p>
                            <a href="{{ route('blogs.show', $blog->slug) }}" class="btn-link" style="margin-top: auto;">
                                Read Essay &rarr;
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div style="margin-top: 3.5rem;">
                {{ $blogs->links('partials.pagination') }}
            </div>
        @else
            <div style="text-align: center; padding: 5rem 0; color: var(--ink-muted);">
                <p>No published articles found at the moment. Please return shortly.</p>
            </div>
        @endif
    </main>

    @include('partials.footer')
</body>
</html>
