@extends('admin.layouts.app')

@section('title', 'Edit Blog')
@section('page_header', 'Edit Blog Post')

@section('content')
<div class="card" style="max-width: 800px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2 style="font-size: 1.2rem; font-weight: 700;">Edit Post #{{ $blog->id }}</h2>
        <a href="{{ route('admin.blogs.index') }}" class="btn-sm btn-secondary">&larr; Back to List</a>
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
            <label for="description">Content / Description *</label>
            <textarea id="description" name="description" class="form-control" rows="8" required>{{ old('description', $blog->description) }}</textarea>
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

        <div class="form-group" style="margin-top: 1.5rem;">
            <label style="display: flex; align-items: center; gap: 0.6rem; cursor: pointer;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $blog->is_active) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--primary);">
                <span>Active (visible on website frontend)</span>
            </label>
        </div>

        <div style="margin-top: 2rem; display: flex; gap: 1rem;">
            <button type="submit" class="btn-sm btn-primary" style="padding: 0.75rem 1.8rem; font-size: 0.95rem;">Update Blog Post</button>
            <a href="{{ route('admin.blogs.index') }}" class="btn-sm btn-secondary" style="padding: 0.75rem 1.5rem; font-size: 0.95rem;">Cancel</a>
        </div>
    </form>
</div>
@endsection
