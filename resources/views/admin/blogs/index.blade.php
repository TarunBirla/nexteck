@extends('admin.layouts.app')

@section('title', 'Manage Blogs')
@section('page_header', 'Blog Management')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2 style="font-size: 1.2rem; font-weight: 700;">All Blog Posts</h2>
        <a href="{{ route('admin.blogs.create') }}" class="btn-sm btn-primary">+ Create New Blog</a>
    </div>

    @if($blogs->count() > 0)
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th style="width: 70px;">Image</th>
                        <th>Title</th>
                        <th>Sort Order</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>
                                @if($blog->image)
                                    <img src="{{ asset($blog->image) }}" alt="" style="width: 50px; height: 35px; object-fit: cover; border-radius: 6px;">
                                @else
                                    <div style="width: 50px; height: 35px; background: #E2E8F0; border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; color: #64748B;">No Img</div>
                                @endif
                            </td>
                            <td>
                                <strong>{{ $blog->title }}</strong>
                                <br><small style="color: var(--muted);">/blogs/{{ $blog->slug }}</small>
                            </td>
                            <td>
                                <span class="badge badge-secondary" style="font-size: 0.85rem; padding: 0.3rem 0.6rem;"> {{ $blog->sort_order ?? 1 }}</span>
                            </td>
                            <td>
                                @if($blog->is_active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $blog->created_at->format('M d, Y') }}</td>
                            <td style="text-align: right;">
                                <a href="{{ route('blogs.show', $blog->slug) }}" target="_blank" class="btn-sm btn-secondary" style="margin-right: 0.3rem;">View</a>
                                <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn-sm btn-primary" style="margin-right: 0.3rem;">Edit</a>
                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this blog post?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pagination-container">
            {{ $blogs->links('partials.pagination') }}
        </div>
    @else
        <p style="color: var(--muted); text-align: center; padding: 2rem 0;">No blog posts available. Click "+ Create New Blog" to write your first post.</p>
    @endif
</div>
@endsection
