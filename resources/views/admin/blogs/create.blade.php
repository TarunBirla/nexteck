@extends('admin.layouts.app')

@section('title', 'Create Blog')
@section('page_header', 'Create New Blog Post')

@section('content')
<div class="card" style="max-width: 800px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2 style="font-size: 1.2rem; font-weight: 700;">Blog Details</h2>
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

    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Blog Title *</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required placeholder="e.g. 5 AI Auditing Strategies for SME Directors">
        </div>

        <div class="form-group">
            <label for="description">Content / Description *</label>
            <textarea id="description" name="description" class="form-control" rows="8" required placeholder="Write your full blog post content here...">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Featured Cover Image</label>
            <input type="file" id="image" name="image" class="form-control" accept="image/*">
            <small style="color: var(--muted);">Supported formats: JPG, PNG, WEBP (Max 4MB)</small>
        </div>

        <div class="form-group" style="margin-top: 1.5rem;">
            <label style="display: flex; align-items: center; gap: 0.6rem; cursor: pointer;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', 1) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--primary);">
                <span>Publish as Active (visible on website frontend)</span>
            </label>
        </div>

        <div style="margin-top: 2rem; display: flex; gap: 1rem;">
            <button type="submit" class="btn-sm btn-primary" style="padding: 0.75rem 1.8rem; font-size: 0.95rem;">Save &amp; Publish Blog</button>
            <a href="{{ route('admin.blogs.index') }}" class="btn-sm btn-secondary" style="padding: 0.75rem 1.5rem; font-size: 0.95rem;">Cancel</a>
        </div>
    </form>
</div>
@endsection
