<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexteck Insights — Strategy, Technology & AI Audits for SMEs</title>
    <meta name="description" content="Expert insights on IT strategy, AI readiness, process automation, and business growth for SMEs.">
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
        body { font-family: 'Inter', system-ui, sans-serif; color: var(--ink); background: var(--paper); line-height: 1.6; }

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

        /* BLOG SECTION STYLES */
        .blogs-hero { background: var(--cream); padding: 4.5rem 0 3.5rem; text-align: center; border-bottom: 1px solid var(--line); }
        .blogs-hero h1 { font-family: 'Fraunces', serif; font-size: 2.8rem; color: var(--ink); margin-bottom: 1rem; }
        .blogs-hero p { max-width: 650px; margin: 0 auto; color: var(--muted); font-size: 1.1rem; }

        .blogs-container { padding: 4rem 0 6rem; }
        .blogs-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; }

        .blog-card { background: #fff; border: 1px solid var(--line); border-radius: var(--radius); overflow: hidden; display: flex; flex-direction: column; transition: transform .2s, box-shadow .2s; }
        .blog-card:hover { transform: translateY(-4px); box-shadow: var(--shadow); }
        .blog-img-wrap { height: 210px; width: 100%; background: var(--cream); overflow: hidden; position: relative; }
        .blog-img { width: 100%; height: 100%; object-fit: cover; }
        .blog-content { padding: 1.6rem; flex-grow: 1; display: flex; flex-direction: column; }
        .blog-date { font-size: 0.8rem; color: var(--gold); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem; }
        .blog-title { font-family: 'Fraunces', serif; font-size: 1.35rem; color: var(--ink); margin-bottom: 0.8rem; line-height: 1.35; text-decoration: none; }
        .blog-title:hover { color: var(--gold); }
        .blog-excerpt { color: var(--muted); font-size: 0.94rem; margin-bottom: 1.5rem; flex-grow: 1; line-height: 1.55; }
        .blog-link { font-weight: 600; font-size: 0.9rem; color: var(--gold); text-decoration: none; display: inline-flex; align-items: center; gap: 0.4rem; }
        .blog-link:hover { text-decoration: underline; }

        .no-blogs { text-align: center; padding: 4rem 0; color: var(--muted); font-size: 1.1rem; }

        .pagination-wrap { margin-top: 3.5rem; display: flex; justify-content: center; }
        .pagination-wrap .pagination { display: flex; gap: 0.5rem; list-style: none; }
        .pagination-wrap .page-item .page-link { padding: 0.5rem 1rem; border: 1px solid var(--line); border-radius: 8px; color: var(--ink); text-decoration: none; }
        .pagination-wrap .page-item.active .page-link { background: var(--gold); color: #fff; border-color: var(--gold); }

        footer { background: var(--ink); color: #fff; padding: 4rem 0 2rem; }
        .foot-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1.2fr; gap: 2rem; margin-bottom: 3rem; }
        .foot-grid h4 { color: #fff; margin-bottom: 1.2rem; font-size: 1rem; }
        .foot-links { display: flex; flex-direction: column; gap: 0.6rem; }
        .foot-links a { color: #8E99AD; text-decoration: none; font-size: 0.88rem; transition: color .2s; }
        .foot-links a:hover { color: #fff; }
        .foot-bottom { border-top: 1px solid rgba(255,255,255,.1); padding-top: 1.8rem; display: flex; justify-content: space-between; font-size: 0.82rem; color: #8E99AD; }
        .sticky-cta { position: fixed; bottom: 1.2rem; right: 1.5rem; z-index: 90; background: var(--ink); color: #fff; padding: 0.6rem 1.2rem; border-radius: 50px; display: flex; align-items: center; gap: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,.3); border: 1px solid rgba(255,255,255,.1); }

        @media (max-width: 900px) {
            .blogs-grid { grid-template-columns: repeat(2, 1fr); }
            .foot-grid { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 600px) {
            .blogs-grid { grid-template-columns: 1fr; }
            .foot-grid { grid-template-columns: 1fr; }
            .burger { display: block; }
            .nav-links { display: none; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <section class="blogs-hero">
        <div class="wrap">
            <h1>Nexteck Strategy &amp; AI Insights</h1>
            <p>Practical guides, IT roadmaps, and business strategy analysis designed for SME founders and directors.</p>
        </div>
    </section>

    <main class="blogs-container">
        <div class="wrap">
            @if($blogs->count() > 0)
                <div class="blogs-grid">
                    @foreach($blogs as $blog)
                        <article class="blog-card">
                            <div class="blog-img-wrap">
                                @if($blog->image)
                                    <img class="blog-img" src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                                @else
                                    <div style="width:100%;height:100%;background:linear-gradient(135deg, #0C1B33, #1E2D4A);display:flex;align-items:center;justify-content:center;color:#B8933F;font-family:'Fraunces',serif;font-size:1.8rem;font-weight:700;">
                                        Nexteck
                                    </div>
                                @endif
                            </div>
                            <div class="blog-content">
                                <div class="blog-date">{{ $blog->created_at->format('M d, Y') }}</div>
                                <a href="{{ route('blogs.show', $blog->slug) }}" class="blog-title">
                                    {{ $blog->title }}
                                </a>
                                <p class="blog-excerpt">
                                    {{ Str::limit(strip_tags($blog->description), 130) }}
                                </p>
                                <a href="{{ route('blogs.show', $blog->slug) }}" class="blog-link">
                                    Read Article &rarr;
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="pagination-wrap">
                    {{ $blogs->links() }}
                </div>
            @else
                <div class="no-blogs">
                    <p>No active blog posts found at the moment. Please check back soon!</p>
                </div>
            @endif
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
