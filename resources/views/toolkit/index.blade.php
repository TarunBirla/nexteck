<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SME Strategy &amp; AI Audit Toolkit London | Nexteck Solutions</title>
    <meta name="description" content="Free interactive SME Strategy, AI Audit &amp; Custom Software Toolkit by Nexteck London. Benchmark competitors, plan automation &amp; track KPIs.">
    <meta name="keywords" content="SME Strategy Toolkit, AI Audit London, Custom Software Solutions London, Business Process Automation UK, Nexteck Toolkit">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url('/toolkit') }}">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nexteck">
    <meta property="og:title" content="SME Strategy &amp; AI Audit Toolkit London | Nexteck Solutions">
    <meta property="og:description" content="Free interactive SME Strategy, AI Audit &amp; Custom Software Toolkit by Nexteck London. Benchmark competitors, plan automation &amp; track KPIs.">
    <meta property="og:url" content="{{ url('/toolkit') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SME Strategy &amp; AI Audit Toolkit London | Nexteck Solutions">
    <meta name="twitter:description" content="Free interactive SME Strategy, AI Audit &amp; Custom Software Toolkit by Nexteck London. Benchmark competitors, plan automation &amp; track KPIs.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Nexteck SME Strategy & Tracking Toolkit",
      "url": "{{ url('/toolkit') }}",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "All",
      "description": "Interactive 7-stage SME Strategy, Competitor Benchmarking, AI/IT Opportunity & Custom Software Planning Toolkit by Nexteck London.",
      "provider": {
        "@type": "ProfessionalService",
        "name": "Nexteck — Software Development Company London",
        "url": "{{ url('/') }}",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "London",
          "addressCountry": "GB"
        }
      }
    }
    </script>
    <link rel="stylesheet" href="{{ asset('css/editorial.css') }}">
    <style>
        body { background: var(--paper); }
        .tk-hero { 
            background: var(--paper-warm); 
            border-bottom: 1px solid var(--line); 
            padding: 3.5rem 0 3rem; 
        }
        .legend-bar { 
            margin-top: 1.5rem; 
            display: inline-flex; 
            align-items: center; 
            gap: 1.2rem; 
            flex-wrap: wrap; 
            background: var(--paper-card); 
            border: 1px solid var(--line); 
            padding: 0.65rem 1.1rem; 
            border-radius: var(--radius-sm); 
            font-size: 0.82rem; 
            font-family: var(--font-mono); 
            color: var(--ink-muted); 
        }
        .legend-swatch { display: inline-flex; align-items: center; gap: 0.45rem; }
        .swatch-yellow { width: 14px; height: 14px; background: #FFF9E6; border: 1px solid #D6BC8A; border-radius: 2px; display: inline-block; }
        .swatch-white { width: 14px; height: 14px; background: #fff; border: 1px solid var(--line); border-radius: 2px; display: inline-block; }

        /* Client Info Docket */
        .client-bar { 
            background: var(--paper-card); 
            border: 1px solid var(--line); 
            border-radius: var(--radius-sm); 
            padding: 1.6rem; 
            margin: -1.5rem auto 2rem; 
            position: relative; 
            z-index: 10; 
        }
        .client-bar-title { 
            font-family: var(--font-mono);
            font-size: 0.76rem; 
            font-weight: 700; 
            text-transform: uppercase; 
            letter-spacing: 0.1em; 
            color: var(--accent); 
            margin-bottom: 1rem; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            flex-wrap: wrap; 
            gap: 0.5rem; 
        }
        .client-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; }
        .field-group label { 
            display: block; 
            font-family: var(--font-mono);
            font-size: 0.72rem; 
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--ink-muted); 
            margin-bottom: 0.35rem; 
        }
        .field-group input { 
            width: 100%; 
            padding: 0.65rem 0.85rem; 
            border: 1px solid var(--line); 
            border-radius: var(--radius-sm); 
            font-size: 0.9rem; 
            font-family: var(--font-sans); 
            background: #FFFDF5; 
            color: var(--ink);
        }
        .field-group input:focus { 
            outline: none; 
            border-color: var(--accent); 
        }

        /* Alerts */
        .alert-box { 
            padding: 1rem 1.25rem; 
            border-radius: var(--radius-sm); 
            margin-bottom: 1.5rem; 
            font-size: 0.92rem; 
            display: flex; 
            align-items: center; 
            justify-content: space-between; 
            gap: 1rem; 
            border: 1px solid var(--line);
        }
        .alert-success { background: #EDF6EE; color: #164E35; border-color: #B2D8C0; }
        .alert-error { background: #FDF2F0; color: #8F2C1E; border-color: #F1C3BC; }

        /* Workbook Tabs */
        .tabs-nav { 
            display: flex; 
            gap: 0.35rem; 
            overflow-x: auto; 
            padding-bottom: 0; 
            margin-bottom: 0; 
            border-bottom: 1px solid var(--line-dark); 
        }
        .tab-btn { 
            padding: 0.75rem 1.2rem; 
            border-radius: var(--radius-sm) var(--radius-sm) 0 0; 
            border: 1px solid var(--line); 
            border-bottom: none;
            background: var(--paper-warm); 
            color: var(--ink-muted); 
            font-family: var(--font-sans);
            font-weight: 600; 
            font-size: 0.86rem; 
            cursor: pointer; 
            white-space: nowrap; 
            transition: all 0.15s; 
            display: inline-flex; 
            align-items: center; 
            gap: 0.5rem; 
        }
        .tab-btn:hover { background: #E6E0D4; color: var(--ink); }
        .tab-btn.active { 
            background: var(--paper-card); 
            color: var(--ink); 
            border-color: var(--line-dark); 
            border-top: 2px solid var(--accent);
            margin-bottom: -1px;
            padding-bottom: calc(0.75rem + 1px);
        }
        .tab-btn .tab-num { 
            font-family: var(--font-mono);
            background: rgba(0,0,0,0.06); 
            color: inherit; 
            padding: 0.1rem 0.4rem; 
            border-radius: var(--radius-sm); 
            font-size: 0.72rem; 
        }
        .tab-btn.active .tab-num { 
            background: var(--accent); 
            color: #fff; 
        }

        .tab-panel { 
            display: none; 
            background: var(--paper-card); 
            border: 1px solid var(--line-dark); 
            border-top: none;
            padding: 2rem; 
            margin-bottom: 2.5rem; 
        }
        .tab-panel.active { display: block; }

        .panel-head { 
            display: flex; 
            justify-content: space-between; 
            align-items: flex-start; 
            flex-wrap: wrap; 
            gap: 1rem; 
            margin-bottom: 1.5rem; 
            padding-bottom: 1rem; 
            border-bottom: 1px solid var(--line); 
        }
        .panel-head h2 { font-size: 1.45rem; color: var(--ink); margin-bottom: 0.3rem; }
        .panel-head p { color: var(--ink-muted); font-size: 0.92rem; max-width: 820px; }

        /* Spreadsheet Table Styling */
        .sheet-wrap { 
            overflow-x: auto; 
            border: 1px solid var(--line); 
        }
        table.sheet { 
            width: 100%; 
            border-collapse: collapse; 
            font-size: 0.86rem; 
            min-width: 980px; 
        }
        table.sheet th { 
            background: var(--paper-warm); 
            color: var(--ink); 
            font-family: var(--font-mono);
            font-weight: 700; 
            text-align: left; 
            padding: 0.75rem 0.85rem; 
            border-right: 1px solid var(--line); 
            border-bottom: 1px solid var(--line-dark);
            font-size: 0.74rem; 
            text-transform: uppercase; 
            letter-spacing: 0.05em; 
        }
        table.sheet td { 
            padding: 0.6rem 0.75rem; 
            border-bottom: 1px solid var(--line-subtle); 
            border-right: 1px solid var(--line-subtle); 
            vertical-align: top; 
            background: #fff; 
        }
        table.sheet tr:nth-child(even) td { background: #FAF8F4; }

        /* Yellow Editable Cells */
        table.sheet td.cell-yellow { background: #FFFDF2 !important; padding: 0.35rem 0.45rem; }
        .cell-input, .cell-select, .cell-textarea {
            width: 100%;
            border: 1px solid #DFD6C4;
            background: #FFFDF8;
            padding: 0.45rem 0.55rem;
            border-radius: var(--radius-sm);
            font-family: inherit;
            font-size: 0.85rem;
            color: var(--ink);
            transition: border-color 0.15s;
        }
        .cell-textarea { min-height: 54px; resize: vertical; }
        .cell-input:focus, .cell-select:focus, .cell-textarea:focus {
            outline: none;
            border-color: var(--accent);
            background: #fff;
        }

        /* Formula / Auto-calculated Cells */
        .cell-formula { 
            background: var(--paper-warm) !important; 
            font-family: var(--font-mono);
            font-weight: 700; 
            text-align: center; 
            vertical-align: middle !important; 
            color: var(--ink); 
        }
        .badge-score { 
            display: inline-block; 
            padding: 0.2rem 0.55rem; 
            border-radius: var(--radius-sm); 
            font-weight: 700; 
            font-size: 0.8rem; 
            font-family: var(--font-mono);
        }
        .score-high { background: #F7E4E1; color: var(--stamp); }
        .score-med { background: #F8EED7; color: #8A641A; }
        .score-low { background: #E6EFF5; color: #2B5772; }
        .var-neg { color: #A8382A; font-weight: 700; }
        .var-pos { color: var(--accent); font-weight: 700; }

        .sheet-note { 
            margin-top: 1rem; 
            padding: 0.85rem 1.1rem; 
            background: var(--paper-warm); 
            border-left: 3px solid var(--accent); 
            font-size: 0.86rem; 
            color: var(--ink-muted); 
        }
        .row-actions { 
            margin-top: 1rem; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            flex-wrap: wrap; 
            gap: 1rem; 
        }
        .btn-add-row { 
            background: var(--paper-warm); 
            color: var(--ink); 
            border: 1px dashed var(--line-dark); 
            padding: 0.5rem 1rem; 
            border-radius: var(--radius-sm); 
            font-family: var(--font-mono);
            font-size: 0.8rem; 
            cursor: pointer; 
            transition: 0.18s; 
        }
        .btn-add-row:hover { 
            background: var(--accent-tint); 
            border-color: var(--accent); 
            color: var(--accent); 
        }

        .submit-bar { 
            background: var(--paper-warm); 
            border: 1px solid var(--line); 
            border-radius: var(--radius-sm); 
            padding: 1.8rem 2rem; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            flex-wrap: wrap; 
            gap: 1.5rem; 
            margin-bottom: 4rem; 
        }
        .submit-bar h3 { font-size: 1.25rem; color: var(--ink); margin-bottom: 0.2rem; }
        .submit-bar p { font-size: 0.88rem; color: var(--ink-muted); margin: 0; }

        @media (max-width: 960px) {
            .client-grid { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 600px) {
            .client-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <section class="tk-hero">
        <div class="wrap">
            <span class="eyebrow">Executive Workbook &middot; Architecture Ledger</span>
            <h1 style="margin-bottom: 0.8rem;">Nexteck SME Strategy &amp; Tracking Toolkit</h1>
            <p class="lead" style="margin-bottom: 0;">
                A rigorous diagnostic framework to orchestrate your four-stage engagement: Industry Benchmarking, Competitor Whitespace, AI/IT Autonomy Planning, and ongoing KPI Governance.
            </p>
            <div class="legend-bar">
                <span style="font-weight: 700; color: var(--ink);">LEDGER GUIDE:</span>
                <span class="legend-swatch"><i class="swatch-yellow"></i> Tinted cells are designated for executive inputs</span>
                <span class="legend-swatch"><i class="swatch-white"></i> Light cells represent structural formulas and auto-calculated metrics</span>
            </div>
        </div>
    </section>
    <main class="wrap" style="padding-top: 1rem;">
        @if(session('success'))
            <div class="alert-box alert-success" style="margin-top: 1rem;">
                <div>✅ {{ session('success') }}</div>
            </div>
        @endif

        @if($errors->any())
            <div class="alert-box alert-error" style="margin-top: 1rem;">
                <div>
                    <strong>Please check your entries:</strong>
                    <ul style="margin-left: 1.2rem; margin-top: .3rem;">
                        @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <form action="{{ route('toolkit.store') }}" method="POST" id="toolkitForm">
            @csrf

            <!-- Client Details Bar -->
            <div class="client-bar">
                <div class="client-bar-title">
                    <span>Client &amp; Business Details (Required to Save Workbook)</span>
                    <button type="submit" class="btn btn-gold" style="padding: .55rem 1.25rem; font-size: .85rem;">💾 Save Completed Toolkit</button>
                </div>
                <div class="client-grid">
                    <div class="field-group">
                        <label>Your Full Name *</label>
                        <input type="text" name="client_name" value="{{ old('client_name') }}" placeholder="e.g. Sarah Jenkins" required>
                    </div>
                    <div class="field-group">
                        <label>Company / Business Name *</label>
                        <input type="text" name="company_name" value="{{ old('company_name') }}" placeholder="e.g. Jenkins Logistics Ltd" required>
                    </div>
                    <div class="field-group">
                        <label>Work Email *</label>
                        <input type="email" name="client_email" value="{{ old('client_email') }}" placeholder="sarah@company.co.uk" required>
                    </div>
                    <div class="field-group">
                        <label>Phone / WhatsApp (Optional)</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="+44 7700 900000">
                    </div>
                </div>
            </div>

            <!-- Workbook Tabs Navigation -->
            <div class="tabs-nav" role="tablist">
                <button type="button" class="tab-btn active" onclick="switchTab('tab-overview', this)">
                    <span class="tab-num">0</span> Overview
                </button>
                <button type="button" class="tab-btn" onclick="switchTab('tab-diagnostic', this)">
                    <span class="tab-num">1</span> Client Diagnostic
                </button>
                <button type="button" class="tab-btn" onclick="switchTab('tab-benchmark', this)">
                    <span class="tab-num">2</span> Industry Benchmark
                </button>
                <button type="button" class="tab-btn" onclick="switchTab('tab-competitor', this)">
                    <span class="tab-num">3</span> Competitor Tracker
                </button>
                <button type="button" class="tab-btn" onclick="switchTab('tab-opportunity', this)">
                    <span class="tab-num">4</span> AI &amp; IT Opportunity Log
                </button>
                <button type="button" class="tab-btn" onclick="switchTab('tab-sop', this)">
                    <span class="tab-num">5</span> SOP &amp; Delegation Register
                </button>
                <button type="button" class="tab-btn" onclick="switchTab('tab-kpi', this)">
                    <span class="tab-num">6</span> KPI Dashboard
                </button>
                <button type="button" class="tab-btn" onclick="switchTab('tab-tools', this)">
                    <span class="tab-num">7</span> Tool Stack
                </button>
            </div>

            <!-- TAB 0: OVERVIEW -->
            <div class="tab-panel active" id="tab-overview">
                <div class="panel-head">
                    <div>
                        <h2>Toolkit Overview &amp; Structure</h2>
                        <p>A working set of templates to run the four-stage engagement: Industry Benchmarking, Competitor Analysis, AI/IT &amp; Autonomy Planning, and ongoing KPI governance.</p>
                    </div>
                    <button type="button" class="btn btn-navy" onclick="switchTabByIndex(1)">Start Step 1: Client Diagnostic &rarr;</button>
                </div>

                <div class="sheet-wrap">
                    <table class="sheet">
                        <thead>
                            <tr>
                                <th style="width: 22%;">Tab</th>
                                <th style="width: 48%;">Purpose</th>
                                <th style="width: 30%;">What to fill in</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($template['overview'] as $idx => $item)
                                <tr>
                                    <td>
                                        <strong style="color: var(--ink);">{{ $idx + 1 }}. {{ $item['tab'] }}</strong>
                                    </td>
                                    <td>{{ $item['purpose'] }}</td>
                                    <td>
                                        <span style="background: var(--yellow-cell); border: 1px solid #FCD34D; padding: .2rem .5rem; border-radius: 4px; font-size: .8rem; font-weight: 600;">
                                            {{ $item['fill'] }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="sheet-note">
                    💡 <strong>How to use:</strong> Click through Tabs 1 to 7 above, fill in the yellow cells for your business, and click <strong>Save Completed Toolkit</strong> at any time.
                </div>
            </div>

            <!-- TAB 1: CLIENT DIAGNOSTIC -->
            <div class="tab-panel" id="tab-diagnostic">
                <div class="panel-head">
                    <div>
                        <h2>1. Client Diagnostic Checklist</h2>
                        <p>A fixed checklist of the 8 pain points that show up most often across SME clients. Use it on the first discovery call to work out which apply and how severely.</p>
                    </div>
                    <button type="button" class="btn btn-navy" onclick="switchTabByIndex(2)">Next: Industry Benchmark &rarr;</button>
                </div>

                <div class="sheet-wrap">
                    <table class="sheet">
                        <thead>
                            <tr>
                                <th style="width: 15%;">Pain point</th>
                                <th style="width: 20%;">How it shows up (symptoms)</th>
                                <th style="width: 20%;">Question to ask the client</th>
                                <th style="width: 9%;">Present? (Y/N)</th>
                                <th style="width: 9%;">Severity (1-5)</th>
                                <th style="width: 15%;">Nexteck's typical response</th>
                                <th style="width: 12%;">Feeds into</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($template['diagnostic'] as $i => $row)
                                <tr>
                                    <td>
                                        <strong>{{ $row['pain_point'] }}</strong>
                                        <input type="hidden" name="diagnostic_data[{{ $i }}][pain_point]" value="{{ $row['pain_point'] }}">
                                        <input type="hidden" name="diagnostic_data[{{ $i }}][symptoms]" value="{{ $row['symptoms'] }}">
                                        <input type="hidden" name="diagnostic_data[{{ $i }}][question]" value="{{ $row['question'] }}">
                                        <input type="hidden" name="diagnostic_data[{{ $i }}][response]" value="{{ $row['response'] }}">
                                        <input type="hidden" name="diagnostic_data[{{ $i }}][feeds_into]" value="{{ $row['feeds_into'] }}">
                                    </td>
                                    <td>{{ $row['symptoms'] }}</td>
                                    <td><em>"{{ $row['question'] }}"</em></td>
                                    <td class="cell-yellow">
                                        <select name="diagnostic_data[{{ $i }}][present]" class="cell-select">
                                            <option value="">--</option>
                                            <option value="Y">Yes (Y)</option>
                                            <option value="N">No (N)</option>
                                        </select>
                                    </td>
                                    <td class="cell-yellow">
                                        <select name="diagnostic_data[{{ $i }}][severity]" class="cell-select">
                                            <option value="">--</option>
                                            <option value="1">1 - Minimal</option>
                                            <option value="2">2 - Low</option>
                                            <option value="3">3 - Moderate</option>
                                            <option value="4">4 - High</option>
                                            <option value="5">5 - Critical</option>
                                        </select>
                                    </td>
                                    <td>{{ $row['response'] }}</td>
                                    <td><span style="font-size: .78rem; font-weight: 600; color: var(--gold);">{{ $row['feeds_into'] }}</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="sheet-note">
                    📌 <strong>Rule of Thumb:</strong> Run this on the first discovery call. Anything marked <strong>Y</strong> with severity <strong>4–5</strong> should become a row in the <em>AI &amp; IT Opportunity Log</em> or <em>SOP &amp; Delegation Register</em>.
                </div>
            </div>

            <!-- TAB 2: INDUSTRY BENCHMARK -->
            <div class="tab-panel" id="tab-benchmark">
                <div class="panel-head">
                    <div>
                        <h2>2. Industry Benchmark</h2>
                        <p>Compare the client against 3–5 recognised leaders in their sector across 5 lenses, and stage the actions to close each gap.</p>
                    </div>
                    <button type="button" class="btn btn-navy" onclick="switchTabByIndex(3)">Next: Competitor Tracker &rarr;</button>
                </div>

                <div class="sheet-wrap">
                    <table class="sheet" id="benchmarkTable">
                        <thead>
                            <tr>
                                <th style="width: 13%;">Lens</th>
                                <th style="width: 13%;">Industry Leader (example)</th>
                                <th style="width: 18%;">What they do</th>
                                <th style="width: 7%;">Client (1-5)</th>
                                <th style="width: 7%;">Leader (1-5)</th>
                                <th style="width: 6%;">Gap</th>
                                <th style="width: 16%;">Staged action to close gap</th>
                                <th style="width: 6%;">Priority</th>
                                <th style="width: 7%;">Owner</th>
                                <th style="width: 7%;">Target Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($template['benchmark'] as $i => $row)
                                <tr class="benchmark-row">
                                    <td>
                                        <strong>{{ $row['lens'] }}</strong>
                                        <input type="hidden" name="benchmark_data[{{ $i }}][lens]" value="{{ $row['lens'] }}">
                                    </td>
                                    <td class="cell-yellow">
                                        <input type="text" name="benchmark_data[{{ $i }}][leader]" class="cell-input" value="{{ $row['leader'] }}" placeholder="Leader name">
                                    </td>
                                    <td class="cell-yellow">
                                        <textarea name="benchmark_data[{{ $i }}][what_they_do]" class="cell-textarea" placeholder="What sets them apart?">{{ $row['what_they_do'] }}</textarea>
                                    </td>
                                    <td class="cell-yellow">
                                        <input type="number" min="1" max="5" name="benchmark_data[{{ $i }}][client_score]" class="cell-input bm-client" value="{{ $row['client_score'] }}" oninput="calcBenchmarkRow(this)">
                                    </td>
                                    <td class="cell-yellow">
                                        <input type="number" min="1" max="5" name="benchmark_data[{{ $i }}][leader_score]" class="cell-input bm-leader" value="{{ $row['leader_score'] }}" oninput="calcBenchmarkRow(this)">
                                    </td>
                                    <td class="cell-formula">
                                        <span class="bm-gap-display">{{ $row['gap'] }}</span>
                                        <input type="hidden" name="benchmark_data[{{ $i }}][gap]" class="bm-gap-input" value="{{ $row['gap'] }}">
                                    </td>
                                    <td class="cell-yellow">
                                        <textarea name="benchmark_data[{{ $i }}][action]" class="cell-textarea" placeholder="Staged action plan">{{ $row['action'] }}</textarea>
                                    </td>
                                    <td class="cell-yellow">
                                        <select name="benchmark_data[{{ $i }}][priority]" class="cell-select">
                                            <option value="">--</option>
                                            <option value="H" {{ $row['priority'] === 'H' ? 'selected' : '' }}>H</option>
                                            <option value="M" {{ $row['priority'] === 'M' ? 'selected' : '' }}>M</option>
                                            <option value="L" {{ $row['priority'] === 'L' ? 'selected' : '' }}>L</option>
                                        </select>
                                    </td>
                                    <td class="cell-yellow">
                                        <input type="text" name="benchmark_data[{{ $i }}][owner]" class="cell-input" value="{{ $row['owner'] }}" placeholder="Owner">
                                    </td>
                                    <td class="cell-yellow">
                                        <input type="date" name="benchmark_data[{{ $i }}][target_date]" class="cell-input" value="{{ $row['target_date'] }}">
                                        <input type="hidden" name="benchmark_data[{{ $i }}][status]" value="{{ $row['status'] }}">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- TAB 3: COMPETITOR TRACKER -->
            <div class="tab-panel" id="tab-competitor">
                <div class="panel-head">
                    <div>
                        <h2>3. Competitor Tracker</h2>
                        <p>Map direct competitors to find category norms vs. genuine whitespace to differentiate in.</p>
                    </div>
                    <button type="button" class="btn btn-navy" onclick="switchTabByIndex(4)">Next: AI &amp; IT Opportunity Log &rarr;</button>
                </div>

                <div class="sheet-wrap">
                    <table class="sheet" id="competitorTable">
                        <thead>
                            <tr>
                                <th style="width: 13%;">Competitor</th>
                                <th style="width: 12%;">Positioning</th>
                                <th style="width: 8%;">Pricing (£/££/£££)</th>
                                <th style="width: 14%;">Key strength</th>
                                <th style="width: 14%;">Key weakness</th>
                                <th style="width: 12%;">Main channels</th>
                                <th style="width: 7%;">Norm? (Y/N)</th>
                                <th style="width: 14%;">Whitespace / differentiation</th>
                                <th style="width: 6%;">Priority</th>
                            </tr>
                        </thead>
                        <tbody id="competitorBody">
                            @foreach($template['competitor'] as $i => $row)
                                <tr>
                                    <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][competitor]" class="cell-input" value="{{ $row['competitor'] }}" placeholder="Competitor name"></td>
                                    <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][positioning]" class="cell-input" value="{{ $row['positioning'] }}" placeholder="e.g. Budget/local"></td>
                                    <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][pricing]" class="cell-input" value="{{ $row['pricing'] }}" placeholder="£ / ££ / £££"></td>
                                    <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][strength]" class="cell-input" value="{{ $row['strength'] }}"></td>
                                    <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][weakness]" class="cell-input" value="{{ $row['weakness'] }}"></td>
                                    <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][channels]" class="cell-input" value="{{ $row['channels'] }}"></td>
                                    <td class="cell-yellow">
                                        <select name="competitor_data[{{ $i }}][category_norm]" class="cell-select">
                                            <option value="">--</option>
                                            <option value="Y" {{ $row['category_norm'] === 'Y' ? 'selected' : '' }}>Y</option>
                                            <option value="N" {{ $row['category_norm'] === 'N' ? 'selected' : '' }}>N</option>
                                        </select>
                                    </td>
                                    <td class="cell-yellow"><input type="text" name="competitor_data[{{ $i }}][whitespace]" class="cell-input" value="{{ $row['whitespace'] }}"></td>
                                    <td class="cell-yellow">
                                        <select name="competitor_data[{{ $i }}][priority]" class="cell-select">
                                            <option value="">--</option>
                                            <option value="H" {{ $row['priority'] === 'H' ? 'selected' : '' }}>H</option>
                                            <option value="M" {{ $row['priority'] === 'M' ? 'selected' : '' }}>M</option>
                                            <option value="L" {{ $row['priority'] === 'L' ? 'selected' : '' }}>L</option>
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row-actions">
                    <button type="button" class="btn-add-row" onclick="addCompetitorRow()">+ Add Another Competitor Row</button>
                </div>
            </div>

            <!-- TAB 4: AI & IT OPPORTUNITY LOG -->
            <div class="tab-panel" id="tab-opportunity">
                <div class="panel-head">
                    <div>
                        <h2>4. AI &amp; IT Opportunity Log</h2>
                        <p>Turn every owner-dependent process into an automation/delegation opportunity, scored by impact and urgency.</p>
                    </div>
                    <button type="button" class="btn btn-navy" onclick="switchTabByIndex(5)">Next: SOP &amp; Delegation Register &rarr;</button>
                </div>

                <div class="sheet-wrap">
                    <table class="sheet" id="opportunityTable">
                        <thead>
                            <tr>
                                <th style="width: 18%;">Business process</th>
                                <th style="width: 7%;">Effort (hrs/wk)</th>
                                <th style="width: 7%;">Owner (H/M/L)</th>
                                <th style="width: 18%;">AI / IT solution</th>
                                <th style="width: 18%;">Autonomy gain (what owner stops doing)</th>
                                <th style="width: 8%;">Est. cost (£/mo)</th>
                                <th style="width: 6%;">Impact (1-5)</th>
                                <th style="width: 6%;">Urgency (1-5)</th>
                                <th style="width: 6%;">Priority Score</th>
                                <th style="width: 6%;">Status</th>
                            </tr>
                        </thead>
                        <tbody id="opportunityBody">
                            @foreach($template['opportunity'] as $i => $row)
                                <tr class="opp-row">
                                    <td class="cell-yellow"><textarea name="opportunity_data[{{ $i }}][process]" class="cell-textarea">{{ $row['process'] }}</textarea></td>
                                    <td class="cell-yellow"><input type="number" step="0.5" name="opportunity_data[{{ $i }}][manual_effort]" class="cell-input" value="{{ $row['manual_effort'] }}"></td>
                                    <td class="cell-yellow">
                                        <select name="opportunity_data[{{ $i }}][owner_involvement]" class="cell-select">
                                            <option value="">--</option>
                                            <option value="H" {{ $row['owner_involvement'] === 'H' ? 'selected' : '' }}>H</option>
                                            <option value="M" {{ $row['owner_involvement'] === 'M' ? 'selected' : '' }}>M</option>
                                            <option value="L" {{ $row['owner_involvement'] === 'L' ? 'selected' : '' }}>L</option>
                                        </select>
                                    </td>
                                    <td class="cell-yellow"><textarea name="opportunity_data[{{ $i }}][solution]" class="cell-textarea">{{ $row['solution'] }}</textarea></td>
                                    <td class="cell-yellow"><textarea name="opportunity_data[{{ $i }}][autonomy_gain]" class="cell-textarea">{{ $row['autonomy_gain'] }}</textarea></td>
                                    <td class="cell-yellow"><input type="number" name="opportunity_data[{{ $i }}][est_cost]" class="cell-input" value="{{ $row['est_cost'] }}"></td>
                                    <td class="cell-yellow"><input type="number" min="1" max="5" name="opportunity_data[{{ $i }}][impact]" class="cell-input opp-impact" value="{{ $row['impact'] }}" oninput="calcOpportunityRow(this)"></td>
                                    <td class="cell-yellow"><input type="number" min="1" max="5" name="opportunity_data[{{ $i }}][urgency]" class="cell-input opp-urgency" value="{{ $row['urgency'] }}" oninput="calcOpportunityRow(this)"></td>
                                    <td class="cell-formula">
                                        <span class="badge-score opp-score-display {{ $row['priority_score'] >= 15 ? 'score-high' : ($row['priority_score'] >= 9 ? 'score-med' : 'score-low') }}">{{ $row['priority_score'] }}</span>
                                        <input type="hidden" name="opportunity_data[{{ $i }}][priority_score]" class="opp-score-input" value="{{ $row['priority_score'] }}">
                                    </td>
                                    <td class="cell-yellow">
                                        <select name="opportunity_data[{{ $i }}][status]" class="cell-select">
                                            <option value="Not started" {{ $row['status'] === 'Not started' ? 'selected' : '' }}>Not started</option>
                                            <option value="In progress" {{ $row['status'] === 'In progress' ? 'selected' : '' }}>In progress</option>
                                            <option value="Completed" {{ $row['status'] === 'Completed' ? 'selected' : '' }}>Completed</option>
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row-actions">
                    <button type="button" class="btn-add-row" onclick="addOpportunityRow()">+ Add Opportunity Row</button>
                </div>
                <div class="sheet-note">
                    ⚡ <strong>Formula:</strong> <code>Priority score = Impact × Urgency</code>. Sort descending to sequence the roadmap; tackle scores <strong>9–25</strong> first. Rows 1–3 map directly to the Client Diagnostic Checklist tab.
                </div>
            </div>

            <!-- TAB 5: SOP & DELEGATION REGISTER -->
            <div class="tab-panel" id="tab-sop">
                <div class="panel-head">
                    <div>
                        <h2>5. SOP &amp; Delegation Register</h2>
                        <p>Track which recurring tasks are documented, who they're delegated to, and how automated they are.</p>
                    </div>
                    <button type="button" class="btn btn-navy" onclick="switchTabByIndex(6)">Next: KPI Dashboard &rarr;</button>
                </div>

                <div class="sheet-wrap">
                    <table class="sheet" id="sopTable">
                        <thead>
                            <tr>
                                <th style="width: 22%;">Recurring task</th>
                                <th style="width: 12%;">Frequency</th>
                                <th style="width: 12%;">Current owner</th>
                                <th style="width: 10%;">SOP documented?</th>
                                <th style="width: 14%;">Delegate to</th>
                                <th style="width: 14%;">Automation level</th>
                                <th style="width: 8%;">Target date</th>
                                <th style="width: 8%;">Status</th>
                            </tr>
                        </thead>
                        <tbody id="sopBody">
                            @foreach($template['sop'] as $i => $row)
                                <tr>
                                    <td class="cell-yellow"><input type="text" name="sop_data[{{ $i }}][task]" class="cell-input" value="{{ $row['task'] }}" placeholder="Task name"></td>
                                    <td class="cell-yellow"><input type="text" name="sop_data[{{ $i }}][frequency]" class="cell-input" value="{{ $row['frequency'] }}" placeholder="Daily / Weekly / Monthly"></td>
                                    <td class="cell-yellow"><input type="text" name="sop_data[{{ $i }}][current_owner]" class="cell-input" value="{{ $row['current_owner'] }}"></td>
                                    <td class="cell-yellow">
                                        <select name="sop_data[{{ $i }}][sop_documented]" class="cell-select">
                                            <option value="">--</option>
                                            <option value="Y" {{ $row['sop_documented'] === 'Y' ? 'selected' : '' }}>Yes (Y)</option>
                                            <option value="N" {{ $row['sop_documented'] === 'N' ? 'selected' : '' }}>No (N)</option>
                                        </select>
                                    </td>
                                    <td class="cell-yellow"><input type="text" name="sop_data[{{ $i }}][delegate_to]" class="cell-input" value="{{ $row['delegate_to'] }}"></td>
                                    <td class="cell-yellow"><input type="text" name="sop_data[{{ $i }}][automation_level]" class="cell-input" value="{{ $row['automation_level'] }}" placeholder="None / Partial / Full"></td>
                                    <td class="cell-yellow"><input type="date" name="sop_data[{{ $i }}][target_date]" class="cell-input" value="{{ $row['target_date'] }}"></td>
                                    <td class="cell-yellow">
                                        <select name="sop_data[{{ $i }}][status]" class="cell-select">
                                            <option value="Not started" {{ $row['status'] === 'Not started' ? 'selected' : '' }}>Not started</option>
                                            <option value="In progress" {{ $row['status'] === 'In progress' ? 'selected' : '' }}>In progress</option>
                                            <option value="Completed" {{ $row['status'] === 'Completed' ? 'selected' : '' }}>Completed</option>
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row-actions">
                    <button type="button" class="btn-add-row" onclick="addSopRow()">+ Add Recurring Task Row</button>
                </div>
            </div>

            <!-- TAB 6: KPI DASHBOARD -->
            <div class="tab-panel" id="tab-kpi">
                <div class="panel-head">
                    <div>
                        <h2>6. KPI Dashboard</h2>
                        <p>Monthly targets vs. actuals across Sales, Marketing, Finance, Ops and Customer — the owner's weekly review sheet.</p>
                    </div>
                    <button type="button" class="btn btn-navy" onclick="switchTabByIndex(7)">Next: Tool Stack Reference &rarr;</button>
                </div>

                <div class="sheet-wrap">
                    <table class="sheet" id="kpiTable">
                        <thead>
                            <tr>
                                <th style="width: 14%;">Category</th>
                                <th style="width: 24%;">KPI</th>
                                <th style="width: 12%;">Target</th>
                                <th style="width: 12%;">Actual</th>
                                <th style="width: 10%;">Variance</th>
                                <th style="width: 10%;">Variance %</th>
                                <th style="width: 18%;">Trend note</th>
                            </tr>
                        </thead>
                        <tbody id="kpiBody">
                            @foreach($template['kpi'] as $i => $row)
                                <tr class="kpi-row">
                                    <td>
                                        <strong>{{ $row['category'] }}</strong>
                                        <input type="hidden" name="kpi_data[{{ $i }}][category]" value="{{ $row['category'] }}">
                                    </td>
                                    <td>
                                        {{ $row['kpi'] }}
                                        <input type="hidden" name="kpi_data[{{ $i }}][kpi]" value="{{ $row['kpi'] }}">
                                    </td>
                                    <td class="cell-yellow">
                                        <input type="number" step="any" name="kpi_data[{{ $i }}][target]" class="cell-input kpi-target" value="{{ $row['target'] }}" oninput="calcKpiRow(this)">
                                    </td>
                                    <td class="cell-yellow">
                                        <input type="number" step="any" name="kpi_data[{{ $i }}][actual]" class="cell-input kpi-actual" value="{{ $row['actual'] }}" oninput="calcKpiRow(this)">
                                    </td>
                                    <td class="cell-formula">
                                        <span class="kpi-var-display {{ $row['variance'] < 0 ? 'var-neg' : 'var-pos' }}">{{ $row['variance'] }}</span>
                                        <input type="hidden" name="kpi_data[{{ $i }}][variance]" class="kpi-var-input" value="{{ $row['variance'] }}">
                                    </td>
                                    <td class="cell-formula">
                                        <span class="kpi-pct-display {{ $row['variance_pct'] < 0 ? 'var-neg' : 'var-pos' }}">{{ $row['variance_pct'] }}%</span>
                                        <input type="hidden" name="kpi_data[{{ $i }}][variance_pct]" class="kpi-pct-input" value="{{ $row['variance_pct'] }}">
                                    </td>
                                    <td class="cell-yellow">
                                        <input type="text" name="kpi_data[{{ $i }}][trend_note]" class="cell-input" value="{{ $row['trend_note'] }}" placeholder="Add weekly note...">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="sheet-note">
                    📊 <strong>Governance Rule:</strong> Review this sheet weekly, in under 60 minutes. Investigate only KPIs flagged red/negative variance — that is management by exception.
                </div>
            </div>

            <!-- TAB 7: TOOL STACK -->
            <div class="tab-panel" id="tab-tools">
                <div class="panel-head">
                    <div>
                        <h2>7. Recommended Tool Stack by Budget Tier</h2>
                        <p>Recommended tools by business function and budget tier (Starter / Growth / Established). Reference only — adjust to client budget.</p>
                    </div>
                </div>

                <div class="sheet-wrap">
                    <table class="sheet">
                        <thead>
                            <tr>
                                <th style="width: 16%;">Function</th>
                                <th style="width: 20%;">Starter (low cost)</th>
                                <th style="width: 22%;">Growth</th>
                                <th style="width: 22%;">Established</th>
                                <th style="width: 20%;">Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($template['tool_stack'] as $row)
                                <tr>
                                    <td><strong>{{ $row['function'] }}</strong></td>
                                    <td>{{ $row['starter'] }}</td>
                                    <td>{{ $row['growth'] }}</td>
                                    <td><strong style="color: var(--ink-2);">{{ $row['established'] }}</strong></td>
                                    <td style="color: var(--muted);">{{ $row['notes'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Bottom Submit Bar -->
            <div class="submit-bar">
                <div>
                    <h3>Ready to Save Your SME Strategy &amp; Tracking Toolkit?</h3>
                    <p>Your entries across all 7 tabs will be saved securely and reviewed by Nexteck's strategy team.</p>
                </div>
                <button type="submit" class="btn btn-primary">Save &amp; Submit Toolkit</button>
            </div>
        </form>
    </main>

    @include('partials.footer')

    <script>
        function switchTab(tabId, btn) {
            document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            const target = document.getElementById(tabId);
            if (target) target.classList.add('active');
            if (btn) btn.classList.add('active');
            window.scrollTo({ top: 220, behavior: 'smooth' });
        }

        function switchTabByIndex(idx) {
            const btns = document.querySelectorAll('.tab-btn');
            if (btns[idx]) btns[idx].click();
        }

        function calcBenchmarkRow(input) {
            const tr = input.closest('tr');
            const c = parseFloat(tr.querySelector('.bm-client').value) || 0;
            const l = parseFloat(tr.querySelector('.bm-leader').value) || 0;
            const gap = (c > 0 || l > 0) ? (l - c) : 0;
            tr.querySelector('.bm-gap-display').textContent = gap;
            tr.querySelector('.bm-gap-input').value = gap;
        }

        function calcOpportunityRow(input) {
            const tr = input.closest('tr');
            const impact = parseFloat(tr.querySelector('.opp-impact').value) || 0;
            const urgency = parseFloat(tr.querySelector('.opp-urgency').value) || 0;
            const score = impact * urgency;
            const badge = tr.querySelector('.opp-score-display');
            badge.textContent = score;
            badge.className = 'badge-score opp-score-display ' + (score >= 15 ? 'score-high' : (score >= 9 ? 'score-med' : 'score-low'));
            tr.querySelector('.opp-score-input').value = score;
        }

        function calcKpiRow(input) {
            const tr = input.closest('tr');
            const target = parseFloat(tr.querySelector('.kpi-target').value) || 0;
            const actual = parseFloat(tr.querySelector('.kpi-actual').value) || 0;
            const variance = +(actual - target).toFixed(4);
            const pct = target !== 0 ? +((variance / target) * 100).toFixed(1) : 0;

            const varSpan = tr.querySelector('.kpi-var-display');
            varSpan.textContent = variance;
            varSpan.className = 'kpi-var-display ' + (variance < 0 ? 'var-neg' : 'var-pos');
            tr.querySelector('.kpi-var-input').value = variance;

            const pctSpan = tr.querySelector('.kpi-pct-display');
            pctSpan.textContent = pct + '%';
            pctSpan.className = 'kpi-pct-display ' + (pct < 0 ? 'var-neg' : 'var-pos');
            tr.querySelector('.kpi-pct-input').value = pct;
        }

        let compIndex = {{ count($template['competitor']) }};
        function addCompetitorRow() {
            const tbody = document.getElementById('competitorBody');
            const i = compIndex++;
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td class="cell-yellow"><input type="text" name="competitor_data[${i}][competitor]" class="cell-input" placeholder="Competitor name"></td>
                <td class="cell-yellow"><input type="text" name="competitor_data[${i}][positioning]" class="cell-input" placeholder="Positioning"></td>
                <td class="cell-yellow"><input type="text" name="competitor_data[${i}][pricing]" class="cell-input" placeholder="£ / ££ / £££"></td>
                <td class="cell-yellow"><input type="text" name="competitor_data[${i}][strength]" class="cell-input"></td>
                <td class="cell-yellow"><input type="text" name="competitor_data[${i}][weakness]" class="cell-input"></td>
                <td class="cell-yellow"><input type="text" name="competitor_data[${i}][channels]" class="cell-input"></td>
                <td class="cell-yellow">
                    <select name="competitor_data[${i}][category_norm]" class="cell-select">
                        <option value="">--</option><option value="Y">Y</option><option value="N">N</option>
                    </select>
                </td>
                <td class="cell-yellow"><input type="text" name="competitor_data[${i}][whitespace]" class="cell-input"></td>
                <td class="cell-yellow">
                    <select name="competitor_data[${i}][priority]" class="cell-select">
                        <option value="">--</option><option value="H">H</option><option value="M">M</option><option value="L">L</option>
                    </select>
                </td>
            `;
            tbody.appendChild(tr);
        }

        let oppIndex = {{ count($template['opportunity']) }};
        function addOpportunityRow() {
            const tbody = document.getElementById('opportunityBody');
            const i = oppIndex++;
            const tr = document.createElement('tr');
            tr.className = 'opp-row';
            tr.innerHTML = `
                <td class="cell-yellow"><textarea name="opportunity_data[${i}][process]" class="cell-textarea" placeholder="Business process"></textarea></td>
                <td class="cell-yellow"><input type="number" step="0.5" name="opportunity_data[${i}][manual_effort]" class="cell-input"></td>
                <td class="cell-yellow">
                    <select name="opportunity_data[${i}][owner_involvement]" class="cell-select">
                        <option value="">--</option><option value="H">H</option><option value="M">M</option><option value="L">L</option>
                    </select>
                </td>
                <td class="cell-yellow"><textarea name="opportunity_data[${i}][solution]" class="cell-textarea" placeholder="AI / IT solution"></textarea></td>
                <td class="cell-yellow"><textarea name="opportunity_data[${i}][autonomy_gain]" class="cell-textarea" placeholder="Autonomy gain"></textarea></td>
                <td class="cell-yellow"><input type="number" name="opportunity_data[${i}][est_cost]" class="cell-input"></td>
                <td class="cell-yellow"><input type="number" min="1" max="5" name="opportunity_data[${i}][impact]" class="cell-input opp-impact" oninput="calcOpportunityRow(this)"></td>
                <td class="cell-yellow"><input type="number" min="1" max="5" name="opportunity_data[${i}][urgency]" class="cell-input opp-urgency" oninput="calcOpportunityRow(this)"></td>
                <td class="cell-formula">
                    <span class="badge-score opp-score-display score-low">0</span>
                    <input type="hidden" name="opportunity_data[${i}][priority_score]" class="opp-score-input" value="0">
                </td>
                <td class="cell-yellow">
                    <select name="opportunity_data[${i}][status]" class="cell-select">
                        <option value="Not started">Not started</option><option value="In progress">In progress</option><option value="Completed">Completed</option>
                    </select>
                </td>
            `;
            tbody.appendChild(tr);
        }

        let sopIndex = {{ count($template['sop']) }};
        function addSopRow() {
            const tbody = document.getElementById('sopBody');
            const i = sopIndex++;
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td class="cell-yellow"><input type="text" name="sop_data[${i}][task]" class="cell-input" placeholder="Task name"></td>
                <td class="cell-yellow"><input type="text" name="sop_data[${i}][frequency]" class="cell-input" placeholder="Weekly / Monthly"></td>
                <td class="cell-yellow"><input type="text" name="sop_data[${i}][current_owner]" class="cell-input"></td>
                <td class="cell-yellow">
                    <select name="sop_data[${i}][sop_documented]" class="cell-select">
                        <option value="">--</option><option value="Y">Yes (Y)</option><option value="N">No (N)</option>
                    </select>
                </td>
                <td class="cell-yellow"><input type="text" name="sop_data[${i}][delegate_to]" class="cell-input"></td>
                <td class="cell-yellow"><input type="text" name="sop_data[${i}][automation_level]" class="cell-input" placeholder="None / Partial / Full"></td>
                <td class="cell-yellow"><input type="date" name="sop_data[${i}][target_date]" class="cell-input"></td>
                <td class="cell-yellow">
                    <select name="sop_data[${i}][status]" class="cell-select">
                        <option value="Not started">Not started</option><option value="In progress">In progress</option><option value="Completed">Completed</option>
                    </select>
                </td>
            `;
            tbody.appendChild(tr);
        }
    </script>
</body>
</html>
