<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ url('/') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>{{ url('/landing') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    <url>
        <loc>{{ url('/blogs') }}</loc>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>

    @foreach($blogs as $blog)
        <url>
            <loc>{{ url('/blogs/' . $blog->slug) }}</loc>

            @if($blog->updated_at)
                <lastmod>{{ $blog->updated_at->copy()->utc()->toAtomString() }}</lastmod>
            @endif

            <changefreq>monthly</changefreq>
            <priority>0.7</priority>
        </url>
    @endforeach

</urlset>