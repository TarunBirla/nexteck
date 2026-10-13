<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ Str::limit($blog->title, 52, '') }} | Nexteck London</title>
    <meta name="description" content="{{ Str::limit(strip_tags($blog->description), 155) }}">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url('/blogs/' . $blog->slug) }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/blogs/' . $blog->slug) }}">
    <meta property="og:title" content="{{ $blog->title }} — Nexteck Journal">
    <meta property="og:description" content="{{ Str::limit(strip_tags($blog->description), 160) }}">
    @if($blog->image)
    <meta property="og:image" content="{{ asset($blog->image) }}">
    @endif

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blog->title }} — Nexteck Journal">
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($blog->description), 160) }}">

    <!-- Schema.org Article Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BlogPosting",
      "headline": "{{ addslashes($blog->title) }}",
      "description": "{{ addslashes(Str::limit(strip_tags($blog->description), 160)) }}",
      "datePublished": "{{ $blog->created_at->toIso8601String() }}",
      "author": {
        "@type": "Person",
        "name": "Mohammed Nasar",
        "jobTitle": "Principal Consultant"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Nexteck Consulting",
        "url": "{{ url('/') }}"
      }
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/editorial.css') }}">
    <style>
        .essay-container {
            max-width: 760px;
            margin: 3.5rem auto 6rem;
            padding: 0 1.5rem;
        }
        .essay-header {
            margin-bottom: 2.5rem;
            padding-bottom: 1.8rem;
            border-bottom: 1px solid var(--line);
        }
        .essay-meta {
            font-family: var(--font-mono);
            font-size: 0.76rem;
            color: var(--ink-muted);
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 0.8rem;
        }
        .essay-title {
            font-family: var(--font-serif);
            font-size: clamp(2.2rem, 3.8vw, 3.1rem);
            color: var(--ink);
            line-height: 1.15;
            letter-spacing: -0.015em;
        }
        .essay-cover-frame {
            border: 1px solid var(--line);
            padding: 8px;
            background-color: var(--paper-card);
            margin-bottom: 3rem;
        }
        .essay-cover {
            width: 100%;
            max-height: 440px;
            object-fit: cover;
            display: block;
        }

        /* Editorial Essay Body Typography */
        .essay-body {
            font-family: var(--font-sans);
            font-size: 1.08rem;
            color: var(--ink-light);
            line-height: 1.8;
        }
        .essay-body p {
            margin-bottom: 1.8rem;
            max-width: none;
        }
        .essay-body h2, .essay-body .blog-heading {
            font-family: var(--font-serif);
            font-size: 1.85rem;
            color: var(--ink);
            margin: 2.8rem 0 1.2rem;
            line-height: 1.25;
            letter-spacing: -0.01em;
        }
        .essay-body h3 {
            font-family: var(--font-serif);
            font-size: 1.45rem;
            color: var(--ink);
            margin: 2.2rem 0 0.9rem;
            line-height: 1.3;
        }

        /* Highlighted Word Styling */
        .essay-body strong, .essay-body b, .highlight-word {
            color: var(--ink);
            font-weight: 700;
            background: var(--paper-warm);
            padding: 0.1rem 0.4rem;
            border-bottom: 1.5px solid var(--accent);
            border-radius: var(--radius-sm);
        }

        /* Tagline / Pull Quote */
        .blog-tagline, .essay-body blockquote {
            background-color: var(--paper-warm);
            border-left: 3px solid var(--accent);
            padding: 1.4rem 1.8rem;
            margin: 2.5rem 0;
            font-family: var(--font-serif);
            font-size: 1.25rem;
            font-style: italic;
            color: var(--ink);
            line-height: 1.6;
        }

        /* External & highlighted links */
        .essay-body a, .blog-ext-link {
            color: var(--accent) !important;
            font-weight: 600 !important;
            text-decoration: underline !important;
            text-underline-offset: 4px !important;
            text-decoration-thickness: 1px !important;
            transition: all 0.18s ease !important;
        }
        .essay-body a:hover, .blog-ext-link:hover {
            color: var(--accent-hover) !important;
            text-decoration-thickness: 2px !important;
        }

        /* Editorial Closing Banner */
        .docket-cta {
            background-color: var(--paper-warm);
            border: 1px solid var(--line);
            border-radius: var(--radius-sm);
            padding: 2.5rem 2.2rem;
            margin-top: 4.5rem;
            position: relative;
        }
    </style>
</head>
<body>
    @include('partials.header')

    <main class="essay-container">
        <a href="{{ route('blogs.index') }}" class="btn-link" style="margin-bottom: 2.2rem; display: inline-flex;">
            &larr; Return to Journal
        </a>

        <article>
            <header class="essay-header">
                <div class="essay-meta">
                    PERSPECTIVE &middot; PUBLISHED {{ $blog->created_at->format('d F Y') }} &middot; BY MOHAMMED NASAR
                </div>
                <h1 class="essay-title">{{ $blog->title }}</h1>
            </header>

            @if($blog->image)
                <div class="essay-cover-frame">
                    <img class="essay-cover" src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                </div>
            @endif

            <div class="essay-body">
                {!! $blog->rendered_content !!}
            </div>

            <div class="docket-cta">
                <span class="crosshair crosshair-tr">+</span>
                <div class="meta-tag">ADVISORY INQUIRY</div>
                <h3 style="font-size: 1.5rem; margin-bottom: 0.6rem;">Ready to Audit Your Process &amp; AI Readiness?</h3>
                <p style="color: var(--ink-muted); margin-bottom: 1.8rem; font-size: 0.96rem;">
                    Schedule a confidential 45-minute live diagnostic session directly with Principal Consultant Mohammed Nasar.
                </p>
                <a href="{{ route('landing') }}#book" class="btn btn-primary">
                    Book Discovery Call &rarr;
                </a>
            </div>
        </article>
    </main>

    @include('partials.footer')

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const links = document.querySelectorAll('.essay-body a');
            links.forEach(function (link) {
                link.setAttribute('target', '_blank');
                link.setAttribute('rel', 'noopener noreferrer');
            });
        });
    </script>
</body>
</html>
