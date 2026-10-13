{!! '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' !!}
<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ now()->utc()->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>{{ url('/toolkit') }}</loc>
        <lastmod>{{ now()->utc()->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    <url>
        <loc>{{ url('/industries') }}</loc>
        <lastmod>{{ now()->utc()->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    @foreach(['oil-gas-petrochemicals', 'mining-drilling', 'industrial-process-plants', 'railways', 'water-waste-water', 'chemicals-lubricants', 'manufacturing-plants', 'lab-medical-equipment', 'low-cost-country-supply-and-sourcing', 'banking-fintech', 'insurance', 'manufacturing', 'education', 'e-commerce', 'professional-services'] as $indSlug)
    <url>
        <loc>{{ url('/industries/' . $indSlug) }}</loc>
        <lastmod>{{ now()->utc()->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.85</priority>
    </url>
    @endforeach

    <url>
        <loc>{{ url('/landing') }}</loc>
        <lastmod>{{ now()->utc()->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    <url>
        <loc>{{ url('/blogs') }}</loc>
        <lastmod>{{ now()->utc()->toAtomString() }}</lastmod>
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