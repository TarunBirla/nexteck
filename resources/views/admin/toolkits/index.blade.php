@extends('admin.layouts.app')

@section('title', 'SME Strategy Toolkits')
@section('page_header', 'SME Strategy & Tracking Toolkit Submissions')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; flex-wrap: wrap; gap: 1rem;">
        <div>
            <h2 style="font-size: 1.2rem; font-weight: 700;">Submitted Client Toolkits</h2>
            <p style="font-size: 0.88rem; color: var(--muted); margin-top: 0.2rem;">View, review, and update SME Strategy &amp; Tracking Toolkits completed by clients.</p>
        </div>
        <div style="display: flex; align-items: center; gap: 0.8rem;">
            <span style="font-size: 0.9rem; color: var(--muted);">Total: {{ $toolkits->total() }} submissions</span>
            <a href="{{ route('toolkit.index') }}" target="_blank" class="btn-sm btn-primary">+ Open Public Toolkit</a>
        </div>
    </div>

    @if($toolkits->count() > 0)
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Client Name</th>
                        <th>Company Name</th>
                        <th>Work Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Submitted At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($toolkits as $tk)
                        <tr>
                            <td>{{ $tk->id }}</td>
                            <td><strong>{{ $tk->client_name }}</strong></td>
                            <td><strong>{{ $tk->company_name }}</strong></td>
                            <td><a href="mailto:{{ $tk->client_email }}" style="color: var(--primary); text-decoration: none;">{{ $tk->client_email }}</a></td>
                            <td>{{ $tk->phone ?? 'N/A' }}</td>
                            <td>
                                @if($tk->status === 'Completed' || $tk->status === 'Reviewed')
                                    <span class="badge badge-success">{{ $tk->status }}</span>
                                @else
                                    <span class="badge badge-secondary">{{ $tk->status }}</span>
                                @endif
                            </td>
                            <td>{{ $tk->created_at->format('M d, Y H:i') }}</td>
                            <td>
                                <div style="display: flex; gap: 0.4rem; align-items: center;">
                                    <a href="{{ route('admin.toolkits.show', $tk->id) }}" class="btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i> View / Edit</a>
                                    <form action="{{ route('admin.toolkits.destroy', $tk->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this toolkit submission?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i> Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pagination-container">
            {{ $toolkits->links('partials.pagination') }}
        </div>
    @else
        <p style="color: var(--muted); text-align: center; padding: 2.5rem 0;">No SME Strategy Toolkits submitted yet. Clients can fill and save their toolkit from the <a href="{{ route('toolkit.index') }}" target="_blank" style="color: var(--primary); font-weight: 600;">SME Toolkit page</a>.</p>
    @endif
</div>
@endsection
