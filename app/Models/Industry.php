<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'tagline',
        'short_desc',
        'description',
        'image',
        'highlights',
        'why_nexteck',
        'keywords',
        'seo_title',
        'meta_desc',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'highlights' => 'array',
        'keywords'   => 'array',
        'is_active'  => 'boolean',
        'sort_order' => 'integer',
    ];

    /**
     * Get image URL helper (handles both external URLs, local asset paths and Windows backslashes)
     */
    public function getImageUrlAttribute(): string
    {
        $img = (string) $this->image;
        if (empty($img)) {
            return asset('images/A3.png');
        }

        if (str_starts_with($img, 'http://') || str_starts_with($img, 'https://')) {
            return $img;
        }

        // Clean backslashes like .\images\A3.png
        $clean = str_replace('\\', '/', $img);
        $clean = ltrim($clean, './');

        return asset($clean);
    }

    /**
     * Render rich text description with new-tab links and highlighted words/taglines.
     */
    public function getRenderedContentAttribute(): string
    {
        $content = (string) ($this->description ?: $this->short_desc);
        if (trim($content) === '') {
            return '';
        }

        // 1. Convert markdown headings: ### Heading to <h3>, ## Heading to <h2>
        $content = preg_replace('/^###\s+(.+)$/m', '<h3 class="blog-heading">$1</h3>', $content);
        $content = preg_replace('/^##\s+(.+)$/m', '<h2 class="blog-heading">$1</h2>', $content);

        // 2. Convert blockquotes / taglines: > Tagline
        $content = preg_replace('/^>\s+(.+)$/m', '<blockquote class="blog-tagline">$1</blockquote>', $content);

        // 3. Highlight bold text: **word** to <strong class="highlight-word">
        $content = preg_replace('/\*\*(.+?)\*\*/', '<strong class="highlight-word">$1</strong>', $content);

        // 4. Markdown links: [Title](URL) -> open in new tab
        $content = preg_replace(
            '/\[([^\]]+)\]\((https?:\/\/[^\s\)]+)\)/i',
            '<a href="$2" target="_blank" rel="noopener noreferrer" class="blog-ext-link">$1</a>',
            $content
        );

        // 5. Convert standalone URLs (http:// or https://) not in tags
        $content = preg_replace_callback(
            '/(?<!href=")(?<!href=\')(?<!">)(https?:\/\/[^\s<"\'\)]+)/i',
            function ($matches) {
                $url = rtrim($matches[0], '.,;');
                return '<a href="' . $url . '" target="_blank" rel="noopener noreferrer" class="blog-ext-link">' . $url . '</a>';
            },
            $content
        );

        // 6. Ensure ANY existing <a href="..."> tag has target="_blank" & rel="noopener noreferrer"
        $content = preg_replace_callback('/<a\s+([^>]+)>/i', function ($matches) {
            $attrs = $matches[1];
            if (!preg_match('/target\s*=/i', $attrs)) {
                $attrs .= ' target="_blank"';
            }
            if (!preg_match('/rel\s*=/i', $attrs)) {
                $attrs .= ' rel="noopener noreferrer"';
            }
            if (!preg_match('/class\s*=/i', $attrs)) {
                $attrs .= ' class="blog-ext-link"';
            }
            return '<a ' . $attrs . '>';
        }, $content);

        // 7. Bullet and numbered lists
        $lines = explode("\n", $content);
        $newLines = [];
        $inUl = false;
        $inOl = false;

        foreach ($lines as $line) {
            $trimmed = trim($line);
            if (preg_match('/^[-*]\s+(.+)$/', $trimmed, $m)) {
                if ($inOl) { $newLines[] = '</ol>'; $inOl = false; }
                if (!$inUl) { $newLines[] = '<ul class="blog-list">'; $inUl = true; }
                $newLines[] = '<li>' . $m[1] . '</li>';
            } elseif (preg_match('/^\d+\.\s+(.+)$/', $trimmed, $m)) {
                if ($inUl) { $newLines[] = '</ul>'; $inUl = false; }
                if (!$inOl) { $newLines[] = '<ol class="blog-list">'; $inOl = true; }
                $newLines[] = '<li>' . $m[1] . '</li>';
            } else {
                if ($inUl) { $newLines[] = '</ul>'; $inUl = false; }
                if ($inOl) { $newLines[] = '</ol>'; $inOl = false; }
                $newLines[] = $line;
            }
        }
        if ($inUl) { $newLines[] = '</ul>'; }
        if ($inOl) { $newLines[] = '</ol>'; }

        $content = implode("\n", $newLines);

        // Clean up nl2br
        $content = nl2br($content);
        $content = preg_replace('/<\/(h[1-6]|ul|ol|blockquote)>\s*<br\s*\/?>/i', '</$1>', $content);
        $content = preg_replace('/<br\s*\/?>\s*<(h[1-6]|ul|ol|blockquote)/i', '<$1', $content);
        $content = preg_replace('/<br\s*\/?>\s*<li/i', '<li', $content);
        $content = preg_replace('/<\/li>\s*<br\s*\/?>/i', '</li>', $content);

        return $content;
    }
}
