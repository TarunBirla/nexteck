@extends('admin.layouts.app')

@section('title', 'Visitor Analytics & IP Tracker')
@section('page_header', 'Website Visitor Analytics & Live IP Tracker')

@section('styles')
<style>
    .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.25rem; margin-bottom: 1.75rem; }
    .stat-card { background: #fff; padding: 1.5rem; border-radius: 12px; border: 1px solid var(--border); display: flex; align-items: center; justify-content: space-between; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
    .stat-number { font-size: 2rem; font-weight: 700; color: var(--sidebar-bg); font-family: 'Fraunces', serif; }
    .stat-label { font-size: 0.82rem; font-weight: 600; color: var(--muted); text-transform: uppercase; letter-spacing: 0.5px; margin-top: 0.2rem; }
    .stat-sub { font-size: 0.76rem; color: #64748B; margin-top: 0.25rem; }
    .stat-icon { width: 48px; height: 48px; border-radius: 10px; background: rgba(184,147,63,0.12); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.4rem; }

    .charts-grid { display: grid; grid-template-columns: 1.4fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem; }
    .charts-grid-bottom { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.75rem; }
    .chart-box { position: relative; height: 260px; width: 100%; }

    .ip-badge { font-family: monospace; font-weight: 700; font-size: 0.86rem; background: #F1F5F9; color: #0F172A; padding: 0.25rem 0.55rem; border-radius: 6px; border: 1px solid #CBD5E1; display: inline-block; }
    .visit-pill { background: #DBEAFE; color: #1E40AF; font-weight: 700; padding: 0.2rem 0.6rem; border-radius: 99px; font-size: 0.78rem; }
    .page-chip { display: inline-block; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 6px; padding: 0.18rem 0.5rem; font-size: 0.76rem; margin: 0.12rem; color: #334155; }
    .form-chip { display: inline-block; background: #DCFCE7; border: 1px solid #86EFAC; color: #166534; font-weight: 600; border-radius: 6px; padding: 0.22rem 0.55rem; font-size: 0.76rem; margin: 0.12rem; }

    /* Modal for Full User Journey */
    .modal-backdrop { position: fixed; inset: 0; background: rgba(12, 27, 51, 0.6); display: none; align-items: center; justify-content: center; z-index: 999; padding: 1rem; }
    .modal-backdrop.open { display: flex; }
    .modal-card { background: #fff; border-radius: 14px; max-width: 720px; width: 100%; max-height: 85vh; overflow-y: auto; padding: 1.75rem; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25); }
    .modal-head { display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--border); padding-bottom: 1rem; margin-bottom: 1.2rem; }
    .timeline-list { list-style: none; border-left: 2px solid var(--primary); margin-left: 0.6rem; padding-left: 1rem; display: flex; flex-direction: column; gap: 0.75rem; }
    .timeline-item { position: relative; background: #F8FAFC; padding: 0.65rem 0.9rem; border-radius: 8px; border: 1px solid var(--border); font-size: 0.85rem; }
    .timeline-item::before { content: ""; position: absolute; left: -1.42rem; top: 0.85rem; width: 10px; height: 10px; border-radius: 50%; background: var(--primary); }

    @media (max-width: 960px) {
        .charts-grid, .charts-grid-bottom { grid-template-columns: 1fr; }
    }
</style>
@endsection

@section('content')
<!-- Top KPI Summary Cards -->
<div class="stats-grid">
    <div class="stat-card">
        <div>
            <div class="stat-number">{{ $uniqueVisitorsCount }}</div>
            <div class="stat-label">Unique Visitors (1 per IP)</div>
            <div class="stat-sub">Repeat visits merged into 1 user</div>
        </div>
        <div class="stat-icon">🌍</div>
    </div>

    <div class="stat-card">
        <div>
            <div class="stat-number">{{ $todayActiveCount }}</div>
            <div class="stat-label">Active Visitors Today</div>
            <div class="stat-sub">Based on latest visit time</div>
        </div>
        <div class="stat-icon">⚡</div>
    </div>

    <div class="stat-card">
        <div>
            <div class="stat-number">{{ $totalPageViews }}</div>
            <div class="stat-label">Total Page Hits</div>
            <div class="stat-sub">Across all unique visitors</div>
        </div>
        <div class="stat-icon">📄</div>
    </div>

    <div class="stat-card">
        <div>
            <div class="stat-number">{{ $totalFormsFilled }}</div>
            <div class="stat-label">Forms Submitted</div>
            <div class="stat-sub">Strategy Call &amp; SME Toolkits</div>
        </div>
        <div class="stat-icon">✅</div>
    </div>
</div>

<!-- Charts Row 1 -->
<div class="charts-grid">
    <div class="card" style="margin-bottom: 0;">
        <h3 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 1rem;">📈 Unique Visitors Active (Last 7 Days)</h3>
        <div class="chart-box">
            <canvas id="visitorsLineChart"></canvas>
        </div>
    </div>

    <div class="card" style="margin-bottom: 0;">
        <h3 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 1rem;">🌐 Browser Breakdown</h3>
        <div class="chart-box">
            <canvas id="browserDoughnutChart"></canvas>
        </div>
    </div>
</div>

<!-- Charts Row 2 -->
<div class="charts-grid-bottom">
    <div class="card" style="margin-bottom: 0;">
        <h3 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 1rem;">📍 Top Visitor Countries</h3>
        <div class="chart-box">
            <canvas id="countryBarChart"></canvas>
        </div>
    </div>

    <div class="card" style="margin-bottom: 0;">
        <h3 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 1rem;">🔥 Most Visited Pages</h3>
        <div class="chart-box">
            <canvas id="pagesBarChart"></canvas>
        </div>
    </div>
</div>

<!-- Detailed Unique Visitors Table -->
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.25rem; flex-wrap: wrap; gap: 1rem;">
        <div>
            <h2 style="font-size: 1.2rem; font-weight: 700;">Unique Visitor Log (Sorted by Latest Visit Time)</h2>
            <p style="font-size: 0.85rem; color: var(--muted); margin-top: 0.2rem;">
                Each user IP is counted only <strong>once</strong>. Repeat visits update their <strong>Latest Visit Time</strong>, page journey, and form submissions.
            </p>
        </div>
        <span style="font-size: 0.88rem; color: var(--muted);">Showing {{ $visitors->count() }} of {{ $visitors->total() }} unique users</span>
    </div>

    @if($visitors->count() > 0)
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>IP Address</th>
                        <th>Location (City, Country)</th>
                        <th>Browser / OS / Device</th>
                        <th>Visits</th>
                        <th>Pages Visited</th>
                        <th>Forms Filled</th>
                        <th>Latest Visit (Date &amp; Time)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($visitors as $v)
                        @php
                            $pages = is_array($v->pages_visited) ? $v->pages_visited : [];
                            $forms = is_array($v->forms_submitted) ? $v->forms_submitted : [];
                            $uniquePageNames = collect($pages)->pluck('page')->unique()->take(4);
                        @endphp
                        <tr>
                            <td>
                                <span class="ip-badge">{{ $v->ip_address }}</span>
                                @if($v->isp)
                                    <div style="font-size: 0.74rem; color: var(--muted); margin-top: 0.25rem;">{{ Str::limit($v->isp, 26) }}</div>
                                @endif
                            </td>
                            <td>
                                <strong>{{ $v->city ?: 'Unknown City' }}, {{ $v->country ?: 'Unknown' }}</strong>
                                <div style="font-size: 0.76rem; color: var(--muted);">
                                    {{ $v->region ? $v->region . ' • ' : '' }}{{ $v->timezone ?? '' }}
                                </div>
                            </td>
                            <td>
                                <strong>{{ $v->browser ?? 'Unknown' }}</strong>
                                <div style="font-size: 0.78rem; color: var(--muted);">
                                    {{ $v->os ?? 'Unknown OS' }} ({{ $v->device ?? 'Desktop' }})
                                </div>
                            </td>
                            <td>
                                <span class="visit-pill">{{ $v->total_visits }}x</span>
                            </td>
                            <td style="max-width: 250px;">
                                <div style="font-size: 0.76rem; color: var(--muted); margin-bottom: 0.2rem;">
                                    Latest: <strong style="color: var(--text);">{{ $v->last_page }}</strong>
                                </div>
                                @foreach($uniquePageNames as $pName)
                                    <span class="page-chip">{{ $pName }}</span>
                                @endforeach
                            </td>
                            <td style="max-width: 220px;">
                                @if(count($forms) > 0)
                                    @foreach($forms as $f)
                                        <div class="form-chip">
                                            ✓ {{ $f['form_name'] ?? 'Form' }}
                                            @if(!empty($f['details']['name']))
                                                ({{ $f['details']['name'] }})
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                    <span style="color: var(--muted); font-size: 0.8rem;">No form filled yet</span>
                                @endif
                            </td>
                            <td>
                                @if($v->last_visited_at)
                                    <strong style="color: var(--sidebar-bg);">{{ $v->last_visited_at->format('d M Y, h:i:s A') }}</strong>
                                    <div style="font-size: 0.76rem; color: #16A34A; font-weight: 600;">
                                        {{ $v->last_visited_at->diffForHumans() }}
                                    </div>
                                    @if($v->first_visited_at)
                                        <div style="font-size: 0.72rem; color: var(--muted);">
                                            First: {{ $v->first_visited_at->format('d M Y, H:i') }}
                                        </div>
                                    @endif
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
                                <div style="display: flex; gap: 0.4rem; align-items: center;">
                                    <button type="button" class="btn-sm btn-primary" onclick='openJourneyModal(@json($v))'>
                                        Full Journey
                                    </button>
                                    <form action="{{ route('admin.analytics.destroy', $v->id) }}" method="POST" onsubmit="return confirm('Delete this visitor log?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-sm btn-danger">×</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pagination-container">
            {{ $visitors->links('partials.pagination') }}
        </div>
    @else
        <p style="color: var(--muted); text-align: center; padding: 2.5rem 0;">No visitor data recorded yet. Open the public website to test live tracking.</p>
    @endif
</div>

<!-- Visitor Full Journey Modal -->
<div class="modal-backdrop" id="journeyModal" onclick="if(event.target===this) closeJourneyModal()">
    <div class="modal-card">
        <div class="modal-head">
            <div>
                <h3 id="jmTitle" style="font-size: 1.15rem; font-weight: 700;">Visitor Journey</h3>
                <p id="jmSubtitle" style="font-size: 0.84rem; color: var(--muted); margin-top: 0.2rem;"></p>
            </div>
            <button type="button" class="btn-sm btn-secondary" onclick="closeJourneyModal()">Close ✕</button>
        </div>

        <div id="jmFormsSection" style="margin-bottom: 1.5rem;"></div>

        <h4 style="font-size: 0.95rem; font-weight: 700; margin-bottom: 0.75rem;">🕒 Page-by-Page Visit Timeline (Latest First)</h4>
        <ul class="timeline-list" id="jmTimeline"></ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<script>
    const dailyLabels = @json($dailyLabels);
    const dailyCounts = @json($dailyCounts);
    const browserLabels = @json(array_keys($browserBreakdown->toArray()));
    const browserCounts = @json(array_values($browserBreakdown->toArray()));
    const countryLabels = @json(array_keys($countryBreakdown->toArray()));
    const countryCounts = @json(array_values($countryBreakdown->toArray()));
    const pageLabels = @json(array_keys($topPages));
    const pageCounts = @json(array_values($topPages));

    new Chart(document.getElementById('visitorsLineChart'), {
        type: 'line',
        data: {
            labels: dailyLabels,
            datasets: [{
                label: 'Active Unique Visitors',
                data: dailyCounts,
                borderColor: '#B8933F',
                backgroundColor: 'rgba(184, 147, 63, 0.15)',
                borderWidth: 3,
                fill: true,
                tension: 0.35,
                pointBackgroundColor: '#0C1B33',
                pointRadius: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true, ticks: { precision: 0 } } }
        }
    });

    new Chart(document.getElementById('browserDoughnutChart'), {
        type: 'doughnut',
        data: {
            labels: browserLabels.length ? browserLabels : ['No Data'],
            datasets: [{
                data: browserCounts.length ? browserCounts : [1],
                backgroundColor: ['#0C1B33', '#B8933F', '#1E7F4F', '#3B82F6', '#F59E0B', '#64748B']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { position: 'right' } }
        }
    });

    new Chart(document.getElementById('countryBarChart'), {
        type: 'bar',
        data: {
            labels: countryLabels.length ? countryLabels : ['No Data'],
            datasets: [{
                label: 'Unique Visitors',
                data: countryCounts.length ? countryCounts : [0],
                backgroundColor: '#0C1B33',
                borderRadius: 6
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true, ticks: { precision: 0 } } }
        }
    });

    new Chart(document.getElementById('pagesBarChart'), {
        type: 'bar',
        data: {
            labels: pageLabels.length ? pageLabels : ['No Data'],
            datasets: [{
                label: 'Page Views',
                data: pageCounts.length ? pageCounts : [0],
                backgroundColor: '#B8933F',
                borderRadius: 6
            }]
        },
        options: {
            indexAxis: 'y',
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: { x: { beginAtZero: true, ticks: { precision: 0 } } }
        }
    });

    function openJourneyModal(visitor) {
        document.getElementById('jmTitle').textContent = `IP: ${visitor.ip_address} (${visitor.city || 'Unknown'}, ${visitor.country || 'Unknown'})`;
        document.getElementById('jmSubtitle').textContent = `${visitor.browser || ''} on ${visitor.os || ''} (${visitor.device || ''}) • Total Visits: ${visitor.total_visits}x`;

        const formsWrap = document.getElementById('jmFormsSection');
        const forms = Array.isArray(visitor.forms_submitted) ? visitor.forms_submitted : [];
        if (forms.length > 0) {
            let html = '<h4 style="font-size: 0.95rem; font-weight: 700; margin-bottom: 0.5rem;">✅ Forms Submitted by this User</h4><div style="display:flex; flex-direction:column; gap:0.5rem;">';
            forms.forEach(f => {
                const details = f.details ? `${f.details.name || ''} (${f.details.email || ''}) — ${f.details.company || ''}` : '';
                html += `<div style="background:#DCFCE7; border:1px solid #86EFAC; padding:0.65rem 0.9rem; border-radius:8px; font-size:0.85rem; color:#14532D;">
                    <strong>${f.form_name || 'Form'}</strong> — <span style="float:right; font-weight:600;">${f.submitted_at || ''}</span>
                    <div style="margin-top:0.2rem;">${details}</div>
                </div>`;
            });
            html += '</div>';
            formsWrap.innerHTML = html;
        } else {
            formsWrap.innerHTML = '';
        }

        const timeline = document.getElementById('jmTimeline');
        timeline.innerHTML = '';
        const pages = Array.isArray(visitor.pages_visited) ? visitor.pages_visited : [];
        if (pages.length > 0) {
            pages.forEach(p => {
                const li = document.createElement('li');
                li.className = 'timeline-item';
                li.innerHTML = `<strong>${p.page || p.path}</strong> <span style="float:right; color:#64748B; font-size:0.78rem;">${p.visited_at || ''}</span>`;
                timeline.appendChild(li);
            });
        } else {
            timeline.innerHTML = '<li class="timeline-item">No page history recorded.</li>';
        }

        document.getElementById('journeyModal').classList.add('open');
    }

    function closeJourneyModal() {
        document.getElementById('journeyModal').classList.remove('open');
    }
</script>
@endsection
