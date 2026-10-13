@extends('admin.layouts.app')

@section('title', 'Industries Management')
@section('page_header', 'Manage Industries & Sectors')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; flex-wrap: wrap; gap: 1rem;">
        <div>
            <h2 style="font-size: 1.2rem; font-weight: 700;">Dynamic Sectors Catalog</h2>
            <span style="font-size: 0.88rem; color: var(--muted);">Total: {{ $industries->total() }} industries | Top 6 by Sort Order appear on Homepage</span>
        </div>
        <a href="{{ route('admin.industries.create') }}" class="btn-sm btn-primary" style="padding: 0.6rem 1.2rem; font-size: 0.9rem;">
            <i class="fa-solid fa-plus"></i> Add New Industry
        </a>
    </div>

    @if($industries->count() > 0)
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th style="width: 50px;">#</th>
                        <th style="width: 80px;">Cover</th>
                        <th>Sector Title</th>
                        <th>Tagline</th>
                        <th style="width: 100px; text-align: center;">Sort Order</th>
                        <th style="width: 100px; text-align: center;">Status</th>
                        <th style="width: 140px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($industries as $industry)
                        <tr>
                            <td>{{ $industry->id }}</td>
                            <td>
                                <img src="{{ $industry->image_url }}" alt="{{ $industry->title }}" style="width: 60px; height: 42px; object-fit: cover; border-radius: 6px; border: 1px solid var(--border);">
                            </td>
                            <td>
                                <strong>{{ $industry->title }}</strong>
                                <div style="font-size: 0.8rem; color: var(--muted); font-family: monospace;">/industries/{{ $industry->slug }}</div>
                            </td>
                            <td style="max-width: 280px; font-size: 0.88rem; color: #475569;">
                                {{ Str::limit($industry->tagline, 75) }}
                            </td>
                            <td style="text-align: center;">
                                <span class="badge" style="background: #FEF3C7; color: #92400E; font-weight: 700; font-size: 0.85rem;">
                                    #{{ $industry->sort_order }}
                                </span>
                                @if($industry->sort_order <= 6 && $industry->is_active)
                                    <div style="font-size: 0.72rem; color: var(--primary); font-weight: 600; margin-top: 2px;">Home Top 6</div>
                                @endif
                            </td>
                            <td style="text-align: center;">
                                @if($industry->is_active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-secondary">Draft</span>
                                @endif
                            </td>
                            <td style="text-align: right;">
                                <div style="display: inline-flex; gap: 0.4rem;">
                                    <a href="{{ route('industries.show', $industry->slug) }}" target="_blank" class="btn-sm btn-secondary" title="View Frontend Page">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.industries.edit', $industry->id) }}" class="btn-sm btn-primary" title="Edit Industry">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('admin.industries.destroy', $industry->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this industry sector?');" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-sm btn-danger" title="Delete Industry">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pagination-container">
            {{ $industries->links('partials.pagination') }}
        </div>
    @else
        <p style="color: var(--muted); text-align: center; padding: 2rem 0;">No industry sectors found. Click "Add New Industry" to create one.</p>
    @endif
</div>
@endsection
