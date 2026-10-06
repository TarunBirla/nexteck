@extends('admin.layouts.app')

@section('title', 'Lead Form Submissions')
@section('page_header', 'Strategy Call Lead Submissions')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2 style="font-size: 1.2rem; font-weight: 700;">Submitted Lead Forms</h2>
        <span style="font-size: 0.9rem; color: var(--muted);">Total: {{ $leads->total() }} submissions</span>
    </div>

    @if($leads->count() > 0)
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Work Email</th>
                        <th>Company</th>
                        <th>Team Size</th>
                        <th>Biggest Pain Point</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leads as $lead)
                        <tr>
                            <td>{{ $lead->id }}</td>
                            <td><strong>{{ $lead->full_name }}</strong></td>
                            <td><a href="mailto:{{ $lead->work_email }}" style="color: var(--primary); text-decoration: none;">{{ $lead->work_email }}</a></td>
                            <td><strong>{{ $lead->company }}</strong></td>
                            <td>{{ $lead->team_size ?? 'N/A' }}</td>
                            <td style="max-width: 260px;">{{ $lead->pain_point ?? 'N/A' }}</td>
                            <td>{{ $lead->created_at->format('M d, Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pagination-container">
            {{ $leads->links() }}
        </div>
    @else
        <p style="color: var(--muted); text-align: center; padding: 2rem 0;">No strategy call lead forms submitted yet.</p>
    @endif
</div>
@endsection
