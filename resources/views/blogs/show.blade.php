<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }} — Nexteck Insights</title>
    <meta name="description" content="{{ Str::limit(strip_tags($blog->description), 160) }}">
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
            --radius: 14px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', system-ui, sans-serif; color: var(--ink); background: var(--paper); line-height: 1.7; }

        .topbar { background: var(--ink); color: #fff; text-align: center; padding: 0.6rem 1rem; font-size: 0.85rem; font-weight: 500; }
        .topbar b { color: var(--gold-2); }
        nav { background: var(--paper); border-bottom: 1px solid var(--line); position: sticky; top: 0; z-index: 100; }
        .wrap { max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; }
        .nav-in { display: flex; align-items: center; justify-content: space-between; height: 74px; }
        .logo { font-family: 'Fraunces', serif; font-size: 1.5rem; font-weight: 700; color: var(--ink); text-decoration: none; display: flex; flex-direction: column; line-height: 1; }
        .logo span { color: var(--gold); }
        .logo small { font-family: 'Inter', sans-serif; font-size: 0.62rem; font-weight: 700; letter-spacing: 1.5px; color: var(--muted); margin-top: 2px; }
        .nav-links { display: flex; align-items: center; gap: 1.8rem; }
        .nav-links a { text-decoration: none; color: var(--ink); font-weight: 500; font-size: 0.92rem; transition: color .2s; }
        .nav-links a:hover { color: var(--gold); }
        .btn { display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.75rem 1.4rem; border-radius: 50px; font-weight: 600; font-size: 0.9rem; text-decoration: none; transition: all .2s; border: none; cursor: pointer; }
        .btn-gold { background: var(--gold); color: #fff; }
        .btn-gold:hover { background: #a38135; }
        .burger { display: none; background: none; border: none; font-size: 1.5rem; cursor: pointer; }

        .blog-detail-container { max-width: 820px; margin: 3rem auto 6rem; padding: 0 1.5rem; }
        .back-link { display: inline-flex; align-items: center; gap: 0.4rem; font-weight: 600; color: var(--gold); text-decoration: none; margin-bottom: 2rem; font-size: 0.92rem; }
        .back-link:hover { text-decoration: underline; }

        .blog-header { margin-bottom: 2rem; }
        .blog-meta { font-size: 0.85rem; color: var(--gold); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.6rem; }
        .blog-title { font-family: 'Fraunces', serif; font-size: 2.5rem; color: var(--ink); line-height: 1.25; margin-bottom: 1.2rem; }

        .blog-cover { width: 100%; max-height: 420px; object-fit: cover; border-radius: var(--radius); margin-bottom: 2.5rem; border: 1px solid var(--line); }

        .blog-body { font-size: 1.08rem; color: #2C3E50; line-height: 1.8; }
        .blog-body p { margin-bottom: 1.5rem; }
        .blog-body h2, .blog-body h3 { font-family: 'Fraunces', serif; color: var(--ink); margin: 2rem 0 1rem; }

        .cta-banner { background: var(--cream); border: 1px solid var(--line); border-radius: var(--radius); padding: 2.5rem; margin-top: 4rem; text-align: center; }
        .cta-banner h3 { font-family: 'Fraunces', serif; font-size: 1.6rem; color: var(--ink); margin-bottom: 0.8rem; }
        .cta-banner p { color: var(--muted); margin-bottom: 1.5rem; font-size: 0.98rem; }

        footer { background: var(--ink); color: #fff; padding: 4rem 0 2rem; }
        .foot-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1.2fr; gap: 2rem; margin-bottom: 3rem; }
        .foot-grid h4 { color: #fff; margin-bottom: 1.2rem; font-size: 1rem; }
        .foot-links { display: flex; flex-direction: column; gap: 0.6rem; }
        .foot-links a { color: #8E99AD; text-decoration: none; font-size: 0.88rem; transition: color .2s; }
        .foot-links a:hover { color: #fff; }
        .foot-bottom { border-top: 1px solid rgba(255,255,255,.1); padding-top: 1.8rem; display: flex; justify-content: space-between; font-size: 0.82rem; color: #8E99AD; }
        .sticky-cta { position: fixed; bottom: 1.2rem; right: 1.5rem; z-index: 90; background: var(--ink); color: #fff; padding: 0.6rem 1.2rem; border-radius: 50px; display: flex; align-items: center; gap: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,.3); border: 1px solid rgba(255,255,255,.1); }

        @media (max-width: 768px) {
            .blog-title { font-size: 1.9rem; }
            .foot-grid { grid-template-columns: 1fr; }
            .burger { display: block; }
            .nav-links { display: none; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <main class="blog-detail-container">
        <a href="{{ route('blogs.index') }}" class="back-link">&larr; Back to all articles</a>

        <article>
            <header class="blog-header">
                <div class="blog-meta">Published on {{ $blog->created_at->format('F d, Y') }}</div>
                <h1 class="blog-title">{{ $blog->title }}</h1>
            </header>

            @if($blog->image)
                <img class="blog-cover" src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
            @endif

            <div class="blog-body">
                {!! nl2br(e($blog->description)) !!}
            </div>

            <div class="cta-banner">
                <h3>Ready to Audit Your Business &amp; AI Readiness?</h3>
                <p>Book a free 45-minute live strategy session with Principal Consultant Mohammed Nasar.</p>
                <a href="{{ route('landing') }}#book" class="btn btn-gold">Book Your Free Strategy Call &rarr;</a>
            </div>
        </article>
    </main>

    @include('partials.footer')
</body>
</html>
