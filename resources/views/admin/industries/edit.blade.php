@extends('admin.layouts.app')

@section('title', 'Edit Industry — ' . $industry->title)
@section('page_header', 'Edit Industry: ' . $industry->title)

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
<style>
    .note-editor.note-frame { border: 1px solid var(--border); border-radius: 8px; font-family: inherit; }
    .note-toolbar { background: #F8FAFC !important; border-bottom: 1px solid var(--border) !important; border-radius: 8px 8px 0 0 !important; }
    .note-btn { border-radius: 4px !important; }
    .btn-custom-tagline { background: #FFFDF5 !important; border: 1.5px solid #FCD34D !important; color: #92400E !important; font-weight: 700 !important; }
    .btn-custom-highlight { background: #FEF3C7 !important; border: 1.5px solid #F59E0B !important; color: #78350F !important; font-weight: 700 !important; }
</style>
@endsection

@section('content')
<div class="card" style="max-width: 960px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <div>
            <h2 style="font-size: 1.2rem; font-weight: 700;">Edit Sector #{{ $industry->id }}: {{ $industry->title }}</h2>
            <div style="font-size: 0.85rem; color: var(--muted);">Slug: /industries/{{ $industry->slug }}</div>
        </div>
        <div style="display: flex; gap: 0.5rem;">
            <a href="{{ route('industries.show', $industry->slug) }}" target="_blank" class="btn-sm btn-secondary"><i class="fa-solid fa-eye"></i> View Live</a>
            <a href="{{ route('admin.industries.index') }}" class="btn-sm btn-secondary"><i class="fa-solid fa-arrow-left"></i> Back to List</a>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-error">
            <ul style="margin-left: 1.2rem;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.industries.update', $industry->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 1rem;">
            <div class="form-group">
                <label for="title">Sector Title *</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $industry->title) }}" required>
            </div>

            <div class="form-group">
                <label for="sort_order">Sort Order *</label>
                <input type="number" id="sort_order" name="sort_order" class="form-control" value="{{ old('sort_order', $industry->sort_order) }}" min="1" required>
                <small style="color: var(--muted);">1–6 will appear on Homepage grid</small>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
            <div class="form-group">
                <label for="slug">URL Slug</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', $industry->slug) }}" required>
            </div>

            <div class="form-group">
                <label for="tagline">Sector Tagline / Hook</label>
                <input type="text" id="tagline" name="tagline" class="form-control" value="{{ old('tagline', $industry->tagline) }}">
            </div>
        </div>

        <div class="form-group">
            <label for="short_desc">Short Summary (Used on Cards &amp; Previews)</label>
            <textarea id="short_desc" name="short_desc" class="form-control" rows="3">{{ old('short_desc', $industry->short_desc) }}</textarea>
        </div>

        <!-- Summernote Rich Text Editor for Description -->
        <div class="form-group">
            <label for="description">Full Sector Description &amp; Solutions (Rich Text Editor)</label>
            <textarea id="description" name="description" class="form-control" rows="12">{{ old('description', $industry->description ?: $industry->short_desc) }}</textarea>
            <small style="color: var(--muted); display: block; margin-top: 0.5rem;">
                💡 <strong>Toolbar Guide:</strong> Click <strong style="color:#92400E;">[Tagline Box]</strong> to insert a highlighted quote box, <strong style="color:#78350F;">[Highlight Word]</strong> to highlight words in gold, and <strong>[Link]</strong> to add URLs (opens in a new tab automatically).
            </small>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: 1rem; align-items: start;">
            <div class="form-group">
                <label for="image">Featured Cover Image</label>
                @if($industry->image)
                    <div style="margin-bottom: 0.8rem;">
                        <img src="{{ $industry->image_url }}" alt="" style="max-height: 110px; border-radius: 8px; border: 1px solid var(--border);">
                        <div style="font-size: 0.78rem; color: var(--muted);">Current Cover Image</div>
                    </div>
                @endif
                <input type="file" id="image" name="image" class="form-control" accept="image/*">
                <small style="color: var(--muted);">Leave blank to keep existing image</small>
            </div>

            <div class="form-group">
                <label for="image_url">Or External Image URL / Preset Path</label>
                <input type="text" id="image_url" name="image_url" class="form-control" value="{{ old('image_url', $industry->image) }}" placeholder="e.g. images/A3.png or https://...">
            </div>
        </div>

        @php
            $highlightsText = is_array($industry->highlights) ? implode("\n", $industry->highlights) : ($industry->highlights ?? '');
            $keywordsText = is_array($industry->keywords) ? implode(", ", $industry->keywords) : ($industry->keywords ?? '');
        @endphp

        <div class="form-group">
            <label for="highlights">Key Engineering Specs &amp; Highlights (1 point per line)</label>
            <textarea id="highlights" name="highlights" class="form-control" rows="5">{{ old('highlights', $highlightsText) }}</textarea>
            <small style="color: var(--muted);">Enter each bullet point specification on a new line.</small>
        </div>

        <div class="form-group">
            <label for="why_nexteck">Why Nexteck Advantage (Value Proposition Box)</label>
            <textarea id="why_nexteck" name="why_nexteck" class="form-control" rows="3">{{ old('why_nexteck', $industry->why_nexteck) }}</textarea>
        </div>

        <div style="border-top: 1px solid var(--border); margin: 2rem 0 1.5rem; padding-top: 1.5rem;">
            <h3 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 1rem; color: var(--text);">SEO &amp; Search Optimization</h3>
            
            <div class="form-group">
                <label for="keywords">Target SEO Keywords (Separate by commas or lines)</label>
                <textarea id="keywords" name="keywords" class="form-control" rows="2">{{ old('keywords', $keywordsText) }}</textarea>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div class="form-group">
                    <label for="seo_title">SEO Meta Title</label>
                    <input type="text" id="seo_title" name="seo_title" class="form-control" value="{{ old('seo_title', $industry->seo_title) }}">
                </div>

                <div class="form-group">
                    <label for="meta_desc">SEO Meta Description</label>
                    <input type="text" id="meta_desc" name="meta_desc" class="form-control" value="{{ old('meta_desc', $industry->meta_desc) }}">
                </div>
            </div>
        </div>

        <div class="form-group" style="margin-top: 1rem;">
            <label style="display: flex; align-items: center; gap: 0.6rem; cursor: pointer;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $industry->is_active) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--primary);">
                <span>Active (visible on frontend website)</span>
            </label>
        </div>

        <div style="margin-top: 2rem; display: flex; gap: 1rem;">
            <button type="submit" class="btn-sm btn-primary" style="padding: 0.75rem 1.8rem; font-size: 0.95rem;">
                <i class="fa-solid fa-floppy-disk"></i> Update Industry Sector
            </button>
            <a href="{{ route('admin.industries.index') }}" class="btn-sm btn-secondary" style="padding: 0.75rem 1.5rem; font-size: 0.95rem;">Cancel</a>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        var TaglineButton = function (context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                className: 'btn-custom-tagline',
                contents: '<i class="fa-solid fa-quote-left"></i> Tagline Box',
                tooltip: 'Insert Highlighted Tagline / Quote Box',
                click: function () {
                    var selected = context.invoke('editor.getSelectedText') || 'Enter key sector tagline or strategic principle here...';
                    var node = $('<blockquote class="blog-tagline">“' + selected + '”</blockquote>')[0];
                    context.invoke('editor.insertNode', node);
                }
            });
            return button.render();
        };

        var HighlightButton = function (context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                className: 'btn-custom-highlight',
                contents: '<i class="fa-solid fa-highlighter"></i> Highlight Word',
                tooltip: 'Highlight Selected Words in Gold Accent',
                click: function () {
                    var selected = context.invoke('editor.getSelectedText');
                    if (selected) {
                        var node = $('<mark class="highlight-word">' + selected + '</mark>')[0];
                        context.invoke('editor.insertNode', node);
                    } else {
                        var node = $('<mark class="highlight-word">highlighted phrase</mark>')[0];
                        context.invoke('editor.insertNode', node);
                    }
                }
            });
            return button.render();
        };

        $('#description').summernote({
            placeholder: 'Write comprehensive industry description... Use [Tagline Box] for callouts, [Highlight Word] for keywords, and [Link] to insert URLs.',
            tabsize: 2,
            height: 350,
            buttons: {
                taglineBox: TaglineButton,
                highlightWord: HighlightButton
            },
            toolbar: [
                ['custom', ['taglineBox', 'highlightWord']],
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'hr']],
                ['view', ['codeview', 'fullscreen']]
            ],
            styleTags: [
                'p',
                { title: 'Tagline Box', tag: 'blockquote', className: 'blog-tagline', value: 'blockquote' },
                'h2', 'h3', 'h4'
            ]
        });
    });
</script>
@endsection
