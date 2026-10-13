@extends('admin.layouts.app')

@section('title', 'Create Industry Sector')
@section('page_header', 'Add New Industry Sector')

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
        <h2 style="font-size: 1.2rem; font-weight: 700;">Industry Sector Details</h2>
        <a href="{{ route('admin.industries.index') }}" class="btn-sm btn-secondary"><i class="fa-solid fa-arrow-left"></i> Back to List</a>
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

    <form action="{{ route('admin.industries.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 1rem;">
            <div class="form-group">
                <label for="title">Sector Title *</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required placeholder="e.g. Aerospace &amp; Defense Sourcing">
            </div>

            <div class="form-group">
                <label for="sort_order">Sort Order *</label>
                <input type="number" id="sort_order" name="sort_order" class="form-control" value="{{ old('sort_order', $nextOrder) }}" min="1" required>
                <small style="color: var(--muted);">1–6 will appear on Homepage grid</small>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
            <div class="form-group">
                <label for="slug">URL Slug (Optional)</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug') }}" placeholder="e.g. aerospace-defense (auto-generated if empty)">
            </div>

            <div class="form-group">
                <label for="tagline">Sector Tagline / Hook</label>
                <input type="text" id="tagline" name="tagline" class="form-control" value="{{ old('tagline') }}" placeholder="e.g. Precision components and certified supply chains.">
            </div>
        </div>

        <div class="form-group">
            <label for="short_desc">Short Summary (Used on Cards &amp; Previews)</label>
            <textarea id="short_desc" name="short_desc" class="form-control" rows="3" placeholder="Brief 1-2 sentence overview for cards...">{{ old('short_desc') }}</textarea>
        </div>

        <!-- Summernote Rich Text Editor for Description -->
        <div class="form-group">
            <label for="description">Full Sector Description &amp; Solutions (Rich Text Editor)</label>
            <textarea id="description" name="description" class="form-control" rows="12" placeholder="Write comprehensive sector solution description here...">{{ old('description') }}</textarea>
            <small style="color: var(--muted); display: block; margin-top: 0.5rem;">
                💡 <strong>Toolbar Guide:</strong> Click <strong style="color:#92400E;">[Tagline Box]</strong> to insert a highlighted quote box, <strong style="color:#78350F;">[Highlight Word]</strong> to highlight words in gold, and <strong>[Link]</strong> to add URLs (opens in a new tab automatically).
            </small>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: 1rem;">
            <div class="form-group">
                <label for="image">Upload Cover Image</label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*">
                <small style="color: var(--muted);">Supported formats: JPG, PNG, WEBP (Max 4MB)</small>
            </div>

            <div class="form-group">
                <label for="image_url">Or Image URL / Preset Path</label>
                <input type="text" id="image_url" name="image_url" class="form-control" value="{{ old('image_url') }}" placeholder="e.g. images/A3.png or https://images.unsplash.com/...">
            </div>
        </div>

        <div class="form-group">
            <label for="highlights">Key Engineering Specs &amp; Highlights (1 point per line)</label>
            <textarea id="highlights" name="highlights" class="form-control" rows="5" placeholder="API 6A / 6D compliant valves and actuators&#10;Turbomachinery and compressor spares&#10;Traceable mill test certificates EN 10204 3.1">{{ old('highlights') }}</textarea>
            <small style="color: var(--muted);">Enter each bullet point specification on a new line.</small>
        </div>

        <div class="form-group">
            <label for="why_nexteck">Why Nexteck Advantage (Value Proposition Box)</label>
            <textarea id="why_nexteck" name="why_nexteck" class="form-control" rows="3" placeholder="Explain why clients choose Nexteck for this sector...">{{ old('why_nexteck') }}</textarea>
        </div>

        <div style="border-top: 1px solid var(--border); margin: 2rem 0 1.5rem; padding-top: 1.5rem;">
            <h3 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 1rem; color: var(--text);">SEO &amp; Search Optimization</h3>
            
            <div class="form-group">
                <label for="keywords">Target SEO Keywords (Separate by commas or lines)</label>
                <textarea id="keywords" name="keywords" class="form-control" rows="2" placeholder="OEM spare parts UK, Industrial procurement London, Custom software solutions">{{ old('keywords') }}</textarea>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div class="form-group">
                    <label for="seo_title">SEO Meta Title</label>
                    <input type="text" id="seo_title" name="seo_title" class="form-control" value="{{ old('seo_title') }}" placeholder="e.g. Aerospace Sourcing &amp; Engineering UK | Nexteck">
                </div>

                <div class="form-group">
                    <label for="meta_desc">SEO Meta Description</label>
                    <input type="text" id="meta_desc" name="meta_desc" class="form-control" value="{{ old('meta_desc') }}" placeholder="Up to 160 characters summary for Google search results">
                </div>
            </div>
        </div>

        <div class="form-group" style="margin-top: 1rem;">
            <label style="display: flex; align-items: center; gap: 0.6rem; cursor: pointer;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', 1) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--primary);">
                <span>Publish as Active (visible on frontend website)</span>
            </label>
        </div>

        <div style="margin-top: 2rem; display: flex; gap: 1rem;">
            <button type="submit" class="btn-sm btn-primary" style="padding: 0.75rem 1.8rem; font-size: 0.95rem;">
                <i class="fa-solid fa-cloud-arrow-up"></i> Save &amp; Publish Industry
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
