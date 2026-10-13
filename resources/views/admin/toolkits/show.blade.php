@extends('admin.layouts.app')

@section('title', 'Review SME Toolkit — ' . $toolkit->company_name)
@section('page_header', 'SME Toolkit: ' . $toolkit->company_name . ' (' . $toolkit->client_name . ')')

@section('styles')
<style>
    .tk-tabs { display: flex; gap: .4rem; overflow-x: auto; margin-bottom: 1.2rem; border-bottom: 2px solid var(--border); padding-bottom: .4rem; }
    .tk-tab-btn { padding: .65rem 1rem; border-radius: 8px 8px 0 0; border: 1px solid transparent; background: #E2E8F0; color: var(--text); font-weight: 600; font-size: .84rem; cursor: pointer; white-space: nowrap; }
    .tk-tab-btn.active { background: var(--sidebar-bg); color: #fff; }
    .tk-panel { display: none; }
    .tk-panel.active { display: block; }
    .cell-yellow { background: #FFFBEB !important; }
    .cell-formula { background: #F1F5F9 !important; font-weight: 700; text-align: center; }
    .tk-input, .tk-select, .tk-textarea { width: 100%; padding: .45rem .55rem; border: 1px solid #FCD34D; border-radius: 6px; background: #FFFDF5; font-size: .84rem; font-family: inherit; }
    .tk-textarea { min-height: 54px; resize: vertical; }
    .var-neg { color: #DC2626; font-weight: 700; }
    .var-pos { color: #16A34A; font-weight: 700; }
</style>
@endsection

@section('content')
<div style="margin-bottom: 1.2rem; display: flex; justify-content: space-between; align-items: center;">
    <a href="{{ route('admin.toolkits.index') }}" class="btn-sm btn-secondary"><i class="fa-solid fa-arrow-left"></i> Back to All Toolkits</a>
    <span style="font-size: 0.85rem; color: var(--muted);">Submitted on {{ $toolkit->created_at->format('M d, Y H:i') }}</span>
</div>

<form action="{{ route('admin.toolkits.update', $toolkit->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; flex-wrap: wrap; gap: 1rem;">
            <h3 style="font-size: 1.1rem; font-weight: 700;">Client &amp; Engagement Details</h3>
            <button type="submit" class="btn-sm btn-primary" style="padding: .6rem 1.2rem; font-size: .88rem;"><i class="fa-solid fa-floppy-disk"></i> Save Changes</button>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 1rem;">
            <div class="form-group" style="margin-bottom: 0;">
                <label>Client Name</label>
                <input type="text" name="client_name" class="form-control" value="{{ $toolkit->client_name }}" required>
            </div>
            <div class="form-group" style="margin-bottom: 0;">
                <label>Company Name</label>
                <input type="text" name="company_name" class="form-control" value="{{ $toolkit->company_name }}" required>
            </div>
            <div class="form-group" style="margin-bottom: 0;">
                <label>Work Email</label>
                <input type="email" name="client_email" class="form-control" value="{{ $toolkit->client_email }}" required>
            </div>
            <div class="form-group" style="margin-bottom: 0;">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $toolkit->phone }}">
            </div>
            <div class="form-group" style="margin-bottom: 0;">
                <label>Engagement Status</label>
                <select name="status" class="form-control">
                    @foreach(['Submitted', 'In Review', 'Discovery Call Done', 'Roadmap Delivered', 'Completed'] as $st)
                        <option value="{{ $st }}" {{ $toolkit->status === $st ? 'selected' : '' }}>{{ $st }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group" style="margin-bottom: 0;">
            <label>Consultant / Admin Notes</label>
            <textarea name="admin_notes" class="form-control" style="min-height: 70px;" placeholder="Add internal consultant notes from discovery call...">{{ $toolkit->admin_notes }}</textarea>
        </div>
    </div>

    <div class="tk-tabs">
        <button type="button" class="tk-tab-btn active" onclick="openAdminTab('adm-diagnostic', this)">1. Client Diagnostic</button>
        <button type="button" class="tk-tab-btn" onclick="openAdminTab('adm-benchmark', this)">2. Industry Benchmark</button>
        <button type="button" class="tk-tab-btn" onclick="openAdminTab('adm-competitor', this)">3. Competitor Tracker</button>
        <button type="button" class="tk-tab-btn" onclick="openAdminTab('adm-opportunity', this)">4. AI &amp; IT Opportunity Log</button>
        <button type="button" class="tk-tab-btn" onclick="openAdminTab('adm-sop', this)">5. SOP &amp; Delegation Register</button>
        <button type="button" class="tk-tab-btn" onclick="openAdminTab('adm-kpi', this)">6. KPI Dashboard</button>
        <button type="button" class="tk-tab-btn" onclick="openAdminTab('adm-tools', this)">7. Tool Stack</button>
    </div>

    @php
        $diagRows = !empty($toolkit->diagnostic_data) ? $toolkit->diagnostic_data : $template['diagnostic'];
        $bmRows   = !empty($toolkit->benchmark_data) ? $toolkit->benchmark_data : $template['benchmark'];
        $compRows = !empty($toolkit->competitor_data) ? $toolkit->competitor_data : $template['competitor'];
        $oppRows  = !empty($toolkit->opportunity_data) ? $toolkit->opportunity_data : $template['opportunity'];
        $sopRows  = !empty($toolkit->sop_data) ? $toolkit->sop_data : $template['sop'];
        $kpiRows  = !empty($toolkit->kpi_data) ? $toolkit->kpi_data : $template['kpi'];
    @endphp

    <!-- 1. Diagnostic -->
    <div class="card tk-panel active" id="adm-diagnostic">
        <h3 style="margin-bottom: 1rem;">1. Client Diagnostic Checklist</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Pain point</th>
                        <th>Symptoms</th>
                        <th>Discovery Question</th>
                        <th>Present? (Y/N)</th>
                        <th>Severity (1-5)</th>
                        <th>Nexteck Response</th>
                        <th>Feeds Into</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($diagRows as $i => $row)
                        <tr>
                            <td>
                                <strong>{{ $row['pain_point'] ?? '' }}</strong>
                                <input type="hidden" name="diagnostic_data[{{ $i }}][pain_point]" value="{{ $row['pain_point'] ?? '' }}">
                                <input type="hidden" name="diagnostic_data[{{ $i }}][symptoms]" value="{{ $row['symptoms'] ?? '' }}">
                                <input type="hidden" name="diagnostic_data[{{ $i }}][question]" value="{{ $row['question'] ?? '' }}">
                                <input type="hidden" name="diagnostic_data[{{ $i }}][response]" value="{{ $row['response'] ?? '' }}">
                                <input type="hidden" name="diagnostic_data[{{ $i }}][feeds_into]" value="{{ $row['feeds_into'] ?? '' }}">
                            </td>
                            <td>{{ $row['symptoms'] ?? '' }}</td>
                            <td><em>{{ $row['question'] ?? '' }}</em></td>
                            <td class="cell-yellow">
                                <select name="diagnostic_data[{{ $i }}][present]" class="tk-select">
                                    <option value="">--</option>
                                    <option value="Y" {{ ($row['present'] ?? '') === 'Y' ? 'selected' : '' }}>Yes (Y)</option>
                                    <option value="N" {{ ($row['present'] ?? '') === 'N' ? 'selected' : '' }}>No (N)</option>
                                </select>
                            </td>
                            <td class="cell-yellow">
                                <select name="diagnostic_data[{{ $i }}][severity]" class="tk-select">
                                    <option value="">--</option>
                                    @for($s = 1; $s <= 5; $s++)
                                        <option value="{{ $s }}" {{ (string)($row['severity'] ?? '') === (string)$s ? 'selected' : '' }}>{{ $s }}</option>
                                    @endfor
                                </select>
                            </td>
                            <td>{{ $row['response'] ?? '' }}</td>
                            <td>{{ $row['feeds_into'] ?? '' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- 2. Benchmark -->
    <div class="card tk-panel" id="adm-benchmark">
        <h3 style="margin-bottom: 1rem;">2. Industry Benchmark</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Lens</th>
                        <th>Industry Leader</th>
                        <th>What they do</th>
                        <th>Client (1-5)</th>
                        <th>Leader (1-5)</th>
                        <th>Gap</th>
                        <th>Staged Action</th>
                        <th>Priority</th>
                        <th>Owner</th>
                        <th>Target Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bmRows as $i => $row)
                        <tr>
                            <td>
                                <strong>{{ $row['lens'] ?? '' }}</strong>
                                <input type="hidden" name="benchmark_data[{{ $i }}][lens]" value="{{ $row['lens'] ?? '' }}">
                            </td>
                            <td class="cell-yellow"><input type="text" name="benchmark_data[{{ $i }}][leader]" class="tk-input" value="{{ $row['leader'] ?? '' }}"></td>
                            <td class="cell-yellow"><textarea name="benchmark_data[{{ $i }}][what_they_do]" class="tk-textarea">{{ $row['what_they_do'] ?? '' }}</textarea></td>
                            <td class="cell-yellow"><input type="number" min="1" max="5" name="benchmark_data[{{ $i }}][client_score]" class="tk-input" value="{{ $row['client_score'] ?? '' }}"></td>
                            <td class="cell-yellow"><input type="number" min="1" max="5" name="benchmark_data[{{ $i }}][leader_score]" class="tk-input" value="{{ $row['leader_score'] ?? '' }}"></td>
                            <td class="cell-formula">{{ $row['gap'] ?? 0 }}</td>
                            <td class="cell-yellow"><textarea name="benchmark_data[{{ $i }}][action]" class="tk-textarea">{{ $row['action'] ?? '' }}</textarea></td>
                            <td class="cell-yellow">
                                <select name="benchmark_data[{{ $i }}][priority]" class="tk-select">
                                    <option value="">--</option>
                                    @foreach(['H', 'M', 'L'] as $p)
                                        <option value="{{ $p }}" {{ ($row['priority'] ?? '') === $p ? 'selected' : '' }}>{{ $p }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="cell-yellow"><input type="text" name="benchmark_data[{{ $i }}][owner]" class="tk-input" value="{{ $row['owner'] ?? '' }}"></td>
                            <td class="cell-yellow">
                                <input type="date" name="benchmark_data[{{ $i }}][target_date]" class="tk-input" value="{{ $row['target_date'] ?? '' }}">
                                <input type="hidden" name="benchmark_data[{{ $i }}][status]" value="{{ $row['status'] ?? 'Not started' }}">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- 3. Competitor Tracker -->
    <div class="card tk-panel" id="adm-competitor">
        <h3 style="margin-bottom: 1rem;">3. Competitor Tracker</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Competitor</th>
                        <th>Positioning</th>
                        <th>Pricing</th>
                        <th>Key Strength</th>
                        <th>Key Weakness</th>
                        <th>Main Channels</th>
                        <th>Norm?</th>
                        <th>Whitespace / Differentiation</th>
                        <th>Priority</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($compRows as $i => $row)
                        <tr>
                            <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][competitor]" class="tk-input" value="{{ $row['competitor'] ?? '' }}"></td>
                            <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][positioning]" class="tk-input" value="{{ $row['positioning'] ?? '' }}"></td>
                            <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][pricing]" class="tk-input" value="{{ $row['pricing'] ?? '' }}"></td>
                            <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][strength]" class="tk-input" value="{{ $row['strength'] ?? '' }}"></td>
                            <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][weakness]" class="tk-input" value="{{ $row['weakness'] ?? '' }}"></td>
                            <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][channels]" class="tk-input" value="{{ $row['channels'] ?? '' }}"></td>
                            <td class="cell-yellow">
                                <select name="competitor_data[{{ $i }}][category_norm]" class="tk-select">
                                    <option value="">--</option>
                                    <option value="Y" {{ ($row['category_norm'] ?? '') === 'Y' ? 'selected' : '' }}>Y</option>
                                    <option value="N" {{ ($row['category_norm'] ?? '') === 'N' ? 'selected' : '' }}>N</option>
                                </select>
                            </td>
                            <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][whitespace]" class="tk-input" value="{{ $row['whitespace'] ?? '' }}"></td>
                            <td class="cell-yellow">
                                <select name="competitor_data[{{ $i }}][priority]" class="tk-select">
                                    <option value="">--</option>
                                    @foreach(['H', 'M', 'L'] as $p)
                                        <option value="{{ $p }}" {{ ($row['priority'] ?? '') === $p ? 'selected' : '' }}>{{ $p }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- 4. AI & IT Opportunity Log -->
    <div class="card tk-panel" id="adm-opportunity">
        <h3 style="margin-bottom: 1rem;">4. AI &amp; IT Opportunity Log</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Business Process</th>
                        <th>Effort (hrs/wk)</th>
                        <th>Owner (H/M/L)</th>
                        <th>AI / IT Solution</th>
                        <th>Autonomy Gain</th>
                        <th>Est. Cost (£/mo)</th>
                        <th>Impact (1-5)</th>
                        <th>Urgency (1-5)</th>
                        <th>Priority Score</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($oppRows as $i => $row)
                        <tr>
                            <td class="cell-yellow"><textarea name="opportunity_data[{{ $i }}][process]" class="tk-textarea">{{ $row['process'] ?? '' }}</textarea></td>
                            <td class="cell-yellow"><input type="number" step="0.5" name="opportunity_data[{{ $i }}][manual_effort]" class="tk-input" value="{{ $row['manual_effort'] ?? '' }}"></td>
                            <td class="cell-yellow">
                                <select name="opportunity_data[{{ $i }}][owner_involvement]" class="tk-select">
                                    <option value="">--</option>
                                    @foreach(['H', 'M', 'L'] as $o)
                                        <option value="{{ $o }}" {{ ($row['owner_involvement'] ?? '') === $o ? 'selected' : '' }}>{{ $o }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="cell-yellow"><textarea name="opportunity_data[{{ $i }}][solution]" class="tk-textarea">{{ $row['solution'] ?? '' }}</textarea></td>
                            <td class="cell-yellow"><textarea name="opportunity_data[{{ $i }}][autonomy_gain]" class="tk-textarea">{{ $row['autonomy_gain'] ?? '' }}</textarea></td>
                            <td class="cell-yellow"><input type="number" name="opportunity_data[{{ $i }}][est_cost]" class="tk-input" value="{{ $row['est_cost'] ?? '' }}"></td>
                            <td class="cell-yellow"><input type="number" min="1" max="5" name="opportunity_data[{{ $i }}][impact]" class="tk-input" value="{{ $row['impact'] ?? '' }}"></td>
                            <td class="cell-yellow"><input type="number" min="1" max="5" name="opportunity_data[{{ $i }}][urgency]" class="tk-input" value="{{ $row['urgency'] ?? '' }}"></td>
                            <td class="cell-formula">{{ $row['priority_score'] ?? 0 }}</td>
                            <td class="cell-yellow">
                                <select name="opportunity_data[{{ $i }}][status]" class="tk-select">
                                    @foreach(['Not started', 'In progress', 'Completed'] as $st)
                                        <option value="{{ $st }}" {{ ($row['status'] ?? 'Not started') === $st ? 'selected' : '' }}>{{ $st }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- 5. SOP & Delegation Register -->
    <div class="card tk-panel" id="adm-sop">
        <h3 style="margin-bottom: 1rem;">5. SOP &amp; Delegation Register</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Recurring Task</th>
                        <th>Frequency</th>
                        <th>Current Owner</th>
                        <th>SOP Documented?</th>
                        <th>Delegate To</th>
                        <th>Automation Level</th>
                        <th>Target Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sopRows as $i => $row)
                        <tr>
                            <td class="cell-yellow"><input type="text" name="sop_data[{{ $i }}][task]" class="tk-input" value="{{ $row['task'] ?? '' }}"></td>
                            <td class="cell-yellow"><input type="text" name="sop_data[{{ $i }}][frequency]" class="tk-input" value="{{ $row['frequency'] ?? '' }}"></td>
                            <td class="cell-yellow"><input type="text" name="sop_data[{{ $i }}][current_owner]" class="tk-input" value="{{ $row['current_owner'] ?? '' }}"></td>
                            <td class="cell-yellow">
                                <select name="sop_data[{{ $i }}][sop_documented]" class="tk-select">
                                    <option value="">--</option>
                                    <option value="Y" {{ ($row['sop_documented'] ?? '') === 'Y' ? 'selected' : '' }}>Yes (Y)</option>
                                    <option value="N" {{ ($row['sop_documented'] ?? '') === 'N' ? 'selected' : '' }}>No (N)</option>
                                </select>
                            </td>
                            <td class="cell-yellow"><input type="text" name="sop_data[{{ $i }}][delegate_to]" class="tk-input" value="{{ $row['delegate_to'] ?? '' }}"></td>
                            <td class="cell-yellow"><input type="text" name="sop_data[{{ $i }}][automation_level]" class="tk-input" value="{{ $row['automation_level'] ?? '' }}"></td>
                            <td class="cell-yellow"><input type="date" name="sop_data[{{ $i }}][target_date]" class="tk-input" value="{{ $row['target_date'] ?? '' }}"></td>
                            <td class="cell-yellow">
                                <select name="sop_data[{{ $i }}][status]" class="tk-select">
                                    @foreach(['Not started', 'In progress', 'Completed'] as $st)
                                        <option value="{{ $st }}" {{ ($row['status'] ?? 'Not started') === $st ? 'selected' : '' }}>{{ $st }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- 6. KPI Dashboard -->
    <div class="card tk-panel" id="adm-kpi">
        <h3 style="margin-bottom: 1rem;">6. KPI Dashboard</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>KPI</th>
                        <th>Target</th>
                        <th>Actual</th>
                        <th>Variance</th>
                        <th>Variance %</th>
                        <th>Trend Note</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kpiRows as $i => $row)
                        <tr>
                            <td>
                                <strong>{{ $row['category'] ?? '' }}</strong>
                                <input type="hidden" name="kpi_data[{{ $i }}][category]" value="{{ $row['category'] ?? '' }}">
                            </td>
                            <td>
                                {{ $row['kpi'] ?? '' }}
                                <input type="hidden" name="kpi_data[{{ $i }}][kpi]" value="{{ $row['kpi'] ?? '' }}">
                            </td>
                            <td class="cell-yellow"><input type="number" step="any" name="kpi_data[{{ $i }}][target]" class="tk-input" value="{{ $row['target'] ?? '' }}"></td>
                            <td class="cell-yellow"><input type="number" step="any" name="kpi_data[{{ $i }}][actual]" class="tk-input" value="{{ $row['actual'] ?? '' }}"></td>
                            <td class="cell-formula {{ ($row['variance'] ?? 0) < 0 ? 'var-neg' : 'var-pos' }}">{{ $row['variance'] ?? 0 }}</td>
                            <td class="cell-formula {{ ($row['variance_pct'] ?? 0) < 0 ? 'var-neg' : 'var-pos' }}">{{ $row['variance_pct'] ?? 0 }}%</td>
                            <td class="cell-yellow"><input type="text" name="kpi_data[{{ $i }}][trend_note]" class="tk-input" value="{{ $row['trend_note'] ?? '' }}"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- 7. Tool Stack -->
    <div class="card tk-panel" id="adm-tools">
        <h3 style="margin-bottom: 1rem;">7. Recommended Tool Stack Reference</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Function</th>
                        <th>Starter (Low Cost)</th>
                        <th>Growth</th>
                        <th>Established</th>
                        <th>Notes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($template['tool_stack'] as $row)
                        <tr>
                            <td><strong>{{ $row['function'] }}</strong></td>
                            <td>{{ $row['starter'] }}</td>
                            <td>{{ $row['growth'] }}</td>
                            <td><strong>{{ $row['established'] }}</strong></td>
                            <td>{{ $row['notes'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</form>

<script>
    function openAdminTab(id, btn) {
        document.querySelectorAll('.tk-panel').forEach(p => p.classList.remove('active'));
        document.querySelectorAll('.tk-tab-btn').forEach(b => b.classList.remove('active'));
        document.getElementById(id).classList.add('active');
        btn.classList.add('active');
    }
</script>
@endsection
