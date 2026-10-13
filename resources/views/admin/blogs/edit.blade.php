@extends('admin.layouts.app')

@section('title', 'Edit Blog')
@section('page_header', 'Edit Blog Post')

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
<div class="card" style="max-width: 900px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2 style="font-size: 1.2rem; font-weight: 700;">Edit Post #{{ $blog->id }}</h2>
        <a href="{{ route('admin.blogs.index') }}" class="btn-sm btn-secondary"><i class="fa-solid fa-arrow-left"></i> Back to List</a>
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

    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Blog Title *</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Content / Description (Rich Text Editor) *</label>
            <textarea id="description" name="description" class="form-control" rows="12" required>{{ old('description', $blog->description) }}</textarea>
            <small style="color: var(--muted); display: block; margin-top: 0.5rem;">
                💡 <strong>Toolbar Guide:</strong> Click <strong style="color:#92400E;">[Tagline Box]</strong> to create a prominent quote box, <strong style="color:#78350F;">[Highlight Word]</strong> to highlight selected words, or <strong>[Link]</strong> to add URLs (all links automatically open in a new tab).
            </small>
        </div>

        <div class="form-group">
            <label for="image">Featured Cover Image</label>
            @if($blog->image)
                <div style="margin-bottom: 0.8rem;">
                    <img src="{{ asset($blog->image) }}" alt="" style="max-height: 120px; border-radius: 8px; border: 1px solid var(--border);">
                    <div style="font-size: 0.8rem; color: var(--muted);">Current Image</div>
                </div>
            @endif
            <input type="file" id="image" name="image" class="form-control" accept="image/*">
            <small style="color: var(--muted);">Leave blank to keep current image. Supported formats: JPG, PNG, WEBP (Max 4MB)</small>
        </div>

        <div class="form-group">
            <label for="sort_order">Sort Order (Default is 1)</label>
            <input type="number" id="sort_order" name="sort_order" class="form-control" value="{{ old('sort_order', $blog->sort_order ?? 1) }}" min="1">
            <small style="color: var(--muted);">Blogs display in ascending order (1, 2, 3...)</small>
        </div>

        <div class="form-group" style="margin-top: 1.5rem;">
            <label style="display: flex; align-items: center; gap: 0.6rem; cursor: pointer;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $blog->is_active) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--primary);">
                <span>Active (visible on website frontend)</span>
            </label>
        </div>

        <div style="margin-top: 2rem; display: flex; gap: 1rem;">
            <button type="submit" class="btn-sm btn-primary" style="padding: 0.75rem 1.8rem; font-size: 0.95rem;"><i class="fa-solid fa-floppy-disk"></i> Update Blog Post</button>
            <a href="{{ route('admin.blogs.index') }}" class="btn-sm btn-secondary" style="padding: 0.75rem 1.5rem; font-size: 0.95rem;">Cancel</a>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        // Custom Tagline Box Button
        var TaglineButton = function (context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                className: 'btn-custom-tagline',
                contents: '<i class="fa-solid fa-quote-left"></i> Tagline Box',
                tooltip: 'Insert Highlighted Tagline / Quote Box',
                click: function () {
                    var selected = context.invoke('editor.getSelectedText') || 'Enter your key tagline or strategic quote here...';
                    var node = $('<blockquote class="blog-tagline">“' + selected + '”</blockquote>')[0];
                    context.invoke('editor.insertNode', node);
                }
            });
            return button.render();
        };

        // Custom Highlight Word Button
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
            placeholder: 'Write your full blog post content here... Use [Tagline Box] for quotes, [Highlight Word] for keywords, and [Link] to insert URLs.',
            tabsize: 2,
            height: 380,
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
