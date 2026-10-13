<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Software &amp; AI Strategy Call London | Nexteck Solutions</title>
    <meta name="description" content="Book a free 30-min Software Development &amp; AI Strategy Call with Nexteck London. Get a costed 90-day custom software &amp; IT roadmap for your SME.">
    <meta name="keywords" content="Software Development Company London, Custom Software Solutions London, Book IT Strategy Call UK, AI Audit London, Nexteck">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url('/landing') }}">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nexteck">
    <meta property="og:title" content="Book Software &amp; AI Strategy Call London | Nexteck Solutions">
    <meta property="og:description" content="Book a free 30-min Software Development &amp; AI Strategy Call with Nexteck London. Get a costed 90-day custom software &amp; IT roadmap for your SME.">
    <meta property="og:url" content="{{ url('/landing') }}">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/editorial.css') }}">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Nexteck — Software Development Company London",
      "url": "{{ url('/landing') }}",
      "description": "End-to-end business, custom software development, IT strategy and AI readiness audits for SMEs in London & UK.",
      "founder": {
        "@type": "Person",
        "name": "Mohammed Nasar",
        "jobTitle": "Principal Consultant"
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "London",
        "addressCountry": "GB"
      },
      "areaServed": ["London", "United Kingdom"]
    }
    </script>
    <style>
        .lp-header-sec {
            background-color: var(--paper-warm);
            border-bottom: 1px solid var(--line);
            padding: clamp(3.5rem, 6vw, 5.5rem) 0 4rem;
        }
        .booking-card {
            background-color: var(--paper-card);
            border: 1px solid var(--line-dark);
            border-radius: var(--radius-sm);
            padding: 2.2rem;
            position: relative;
        }
        .booking-card-head {
            border-bottom: 1px solid var(--line);
            padding-bottom: 1.2rem;
            margin-bottom: 1.5rem;
        }
        .form-field {
            margin-bottom: 1.2rem;
        }
        .form-field label {
            display: block;
            font-family: var(--font-mono);
            font-size: 0.74rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: var(--ink-muted);
            margin-bottom: 0.35rem;
        }
        .form-field input, .form-field select {
            width: 100%;
            padding: 0.75rem 0.95rem;
            border: 1px solid var(--line);
            border-radius: var(--radius-sm);
            font-family: var(--font-sans);
            font-size: 0.94rem;
            background-color: #FAF8F4;
            color: var(--ink);
            transition: border-color 0.18s;
        }
        .form-field input:focus, .form-field select:focus {
            outline: none;
            border-color: var(--accent);
            background-color: #FFFFFF;
        }

        .check-item {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1rem;
            font-size: 0.94rem;
            color: var(--ink-light);
        }
        .check-icon {
            font-family: var(--font-mono);
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--accent);
            flex-shrink: 0;
            margin-top: 0.1rem;
        }

        /* 7 Pack Grid */
        .pack-ledger-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            margin-top: 3rem;
        }
        .pack-item {
            background-color: var(--paper-card);
            border: 1px solid var(--line);
            border-radius: var(--radius-sm);
            padding: 1.6rem;
            display: flex;
            flex-direction: column;
            position: relative;
        }
        .pack-val {
            font-family: var(--font-mono);
            font-size: 0.76rem;
            color: var(--accent);
            font-weight: 700;
            margin-top: auto;
            padding-top: 1rem;
            border-top: 1px dashed var(--line);
        }

        /* Comparison Table */
        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.92rem;
            margin-top: 2rem;
            border: 1px solid var(--line);
        }
        .comparison-table th {
            font-family: var(--font-mono);
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 1rem 1.2rem;
            background-color: var(--paper-warm);
            border-bottom: 1px solid var(--line-dark);
            text-align: left;
        }
        .comparison-table td {
            padding: 1rem 1.2rem;
            border-bottom: 1px solid var(--line);
            vertical-align: top;
            background-color: var(--paper-card);
        }

        /* FAQ details styling */
        details.faq-item {
            border-bottom: 1px solid var(--line);
            padding: 1.4rem 0;
        }
        details.faq-item summary {
            font-family: var(--font-serif);
            font-size: 1.25rem;
            font-weight: 500;
            color: var(--ink);
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        details.faq-item summary::-webkit-details-marker {
            display: none;
        }
        details.faq-item summary::after {
            content: "+";
            font-family: var(--font-mono);
            font-size: 1.2rem;
            color: var(--ink-muted);
        }
        details.faq-item[open] summary::after {
            content: "−";
        }
        details.faq-item .faq-ans {
            margin-top: 0.8rem;
            color: var(--ink-muted);
            font-size: 0.96rem;
            line-height: 1.65;
            max-width: 68ch;
        }

        @media (max-width: 960px) {
            .pack-ledger-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 600px) {
            .pack-ledger-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <header class="lp-header-sec">
        <div class="wrap">
            <div class="grid-12" style="align-items: flex-start;">
                <!-- Left 7 Cols: Briefing -->
                <div class="col-7">
                    <div class="stamp-badge accent" style="margin-bottom: 1.2rem;">
                        Executive Consultation &middot; Q4 Intake
                    </div>
                    <h1 style="margin-bottom: 1.4rem;">
                        Determine exactly which software and AI systems your business needs &mdash; <em>before allocating a single pound.</em>
                    </h1>
                    <p class="lead" style="margin-bottom: 2rem;">
                        The Nexteck Business &amp; AI Audit examines your commercial workflows, database systems, data accuracy and team capacity &mdash; delivering a costed, prioritised 90-day roadmap ranked strictly by commercial leverage.
                    </p>

                    <div style="margin-bottom: 2.5rem;">
                        <div class="check-item">
                            <span class="check-icon">[x]</span>
                            <div><b>Conducted directly by Mohammed Nasar</b> &mdash; 25 years advising banking, insurance, logistics and industrial architecture. Never passed to junior associates.</div>
                        </div>
                        <div class="check-item">
                            <span class="check-icon">[x]</span>
                            <div><b>Operated via the Nexteck SME Strategy Toolkit&trade;</b> &mdash; the diagnostic system behind 40+ completed digital transformation programmes.</div>
                        </div>
                        <div class="check-item">
                            <span class="check-icon">[x]</span>
                            <div><b>Complete asset ownership</b> &mdash; you retain every diagnostic document, roadmap, and SOP register regardless of ongoing engagement.</div>
                        </div>
                        <div class="check-item">
                            <span class="check-icon">[x]</span>
                            <div><b>Direct technical verdict</b> &mdash; if your existing infrastructure is already sufficient, we state so clearly and confirm in writing.</div>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1.8rem; align-items: center; border-top: 1px solid var(--line); padding-top: 1.4rem; font-family: var(--font-mono); font-size: 0.78rem; color: var(--ink-muted); flex-wrap: wrap;">
                        <span>&bull; Rated 4.9/5 Across Engagements</span>
                        <span>&bull; Full NDA Prior to Financial Disclosure</span>
                        <span>&bull; UK &amp; International Delivery</span>
                    </div>
                </div>

                <!-- Right 5 Cols: Executive Booking Card -->
                <div class="col-5" id="book">
                    <div class="booking-card">
                        <span class="crosshair crosshair-tl">+</span>
                        <span class="crosshair crosshair-tr">+</span>
                        <div class="booking-card-head">
                            <div class="meta-tag" style="margin-bottom: 0.3rem;">Advisory Docket</div>
                            <h3 style="font-size: 1.35rem; margin-bottom: 0.2rem;">Book Your Strategy Call</h3>
                            <p style="font-size: 0.86rem; color: var(--ink-muted); margin: 0;">
                                45-minute confidential video consultation &middot; Live diagnostic scoring
                            </p>
                        </div>

                        <form id="leadForm">
                            @csrf
                            <div class="form-field">
                                <label for="f-name">Full Name *</label>
                                <input id="f-name" name="full_name" required placeholder="e.g. Sarah Jenkins">
                            </div>
                            <div class="form-field">
                                <label for="f-email">Work Email *</label>
                                <input id="f-email" name="work_email" type="email" required placeholder="name@company.co.uk">
                            </div>
                            <div class="form-field">
                                <label for="f-company">Company Name *</label>
                                <input id="f-company" name="company" required placeholder="e.g. Apex Industrial Ltd">
                            </div>
                            <div class="form-field">
                                <label for="f-size">Team Size</label>
                                <select id="f-size" name="team_size">
                                    <option>1–10 employees</option>
                                    <option selected>11–50 employees</option>
                                    <option>51–200 employees</option>
                                    <option>200+ enterprise</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label for="f-pain">Primary Operational Vulnerability</label>
                                <select id="f-pain" name="pain_point">
                                    <option>Manual processes consuming executive hours</option>
                                    <option>Disconnected tools &amp; re-keyed data errors</option>
                                    <option>Operations unable to scale &middot; founder bottleneck</option>
                                    <option>Uncertainty regarding genuine AI return</option>
                                    <option>Legacy infrastructure &amp; technical debt</option>
                                    <option>Commercial model constrained by standard SaaS</option>
                                </select>
                            </div>

                            <button class="btn btn-primary" type="submit" id="submitBtn" style="width: 100%; margin-top: 0.5rem; justify-content: center;">
                                Request Strategy Call
                            </button>

                            <p style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--ink-muted); text-align: center; margin-top: 1rem; margin-bottom: 0;">
                                Confidential &middot; Standard NDA available &middot; Zero obligation
                            </p>
                        </form>

                        <div id="formSuccess" style="display: none; padding: 2rem 1rem; text-align: center;">
                            <div style="font-family: var(--font-mono); font-size: 1.5rem; color: var(--accent); margin-bottom: 0.8rem;">&#10003;</div>
                            <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem;">Request Registered</h3>
                            <p style="font-size: 0.92rem; color: var(--ink-muted); margin: 0;">
                                Principal Mohammed Nasar or our practice manager will confirm your scheduled consultation within one business day.
                            </p>
                        </div>

                        <!-- Principal Note -->
                        <div style="margin-top: 1.5rem; padding-top: 1.2rem; border-top: 1px solid var(--line); display: flex; align-items: center; gap: 1rem;">
                            <img src="{{ asset('images/nasar.jpeg') }}" alt="Mohammed Nasar" style="width: 48px; height: 48px; border-radius: 2px; object-fit: cover; border: 1px solid var(--line);">
                            <div style="font-size: 0.82rem; color: var(--ink-muted); line-height: 1.4;">
                                <strong style="color: var(--ink); display: block;">Direct Principal Access</strong>
                                &ldquo;If we cannot materially accelerate your business, we will state so candidly.&rdquo;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- PROVEN METRICS ROW -->
    <section class="sec" style="padding: 3.5rem 0; border-bottom: 1px solid var(--line); background-color: var(--paper);">
        <div class="wrap">
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem;">
                <div style="border-left: 2px solid var(--line-dark); padding-left: 1.2rem;">
                    <div style="font-family: var(--font-mono); font-size: 1.8rem; font-weight: 700; color: var(--ink);">12 hrs/wk</div>
                    <div style="font-size: 0.86rem; color: var(--ink-muted);">Executive time reclaimed through workflow automation</div>
                </div>
                <div style="border-left: 2px solid var(--line-dark); padding-left: 1.2rem;">
                    <div style="font-family: var(--font-mono); font-size: 1.8rem; font-weight: 700; color: var(--ink);">9 Weeks</div>
                    <div style="font-size: 0.86rem; color: var(--ink-muted);">Typical capital payback horizon on advisory audit fee</div>
                </div>
                <div style="border-left: 2px solid var(--line-dark); padding-left: 1.2rem;">
                    <div style="font-family: var(--font-mono); font-size: 1.8rem; font-weight: 700; color: var(--ink);">9h &rarr; 1h</div>
                    <div style="font-size: 0.86rem; color: var(--ink-muted);">Average reduction in client enquiry turnaround after triage</div>
                </div>
                <div style="border-left: 2px solid var(--line-dark); padding-left: 1.2rem;">
                    <div style="font-family: var(--font-mono); font-size: 1.8rem; font-weight: 700; color: var(--ink);">100%</div>
                    <div style="font-size: 0.86rem; color: var(--ink-muted);">Client ownership of code, documentation and roadmaps</div>
                </div>
            </div>
        </div>
    </section>

    <!-- THE 7 AUDIT DELIVERABLES -->
    <section class="sec sec-warm">
        <div class="wrap">
            <div style="max-width: 720px; margin-bottom: 2.5rem;">
                <span class="eyebrow">Engagement Scope</span>
                <h2>The Complete Audit Deliverable Pack</h2>
                <p class="lead">
                    Seven actionable operational assets &mdash; functional tools populated with your data, not a static presentation deck.
                </p>
            </div>

            <div class="pack-ledger-grid">
                <div class="pack-item">
                    <span class="crosshair crosshair-tr">+</span>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Client Diagnostic</h3>
                    <p style="font-size: 0.88rem; color: var(--ink-muted); line-height: 1.55;">All 8 commercial bottlenecks scored live. Any rating of 4&ndash;5 becomes a tracked operational directive.</p>
                    <div class="pack-val">Standard Valuation: £750</div>
                </div>
                <div class="pack-item">
                    <span class="crosshair crosshair-tr">+</span>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Industry Benchmark</h3>
                    <p style="font-size: 0.88rem; color: var(--ink-muted); line-height: 1.55;">Detailed scoring against 3&ndash;5 recognized sector leaders across technology, CX, talent and marketing.</p>
                    <div class="pack-val">Standard Valuation: £900</div>
                </div>
                <div class="pack-item">
                    <span class="crosshair crosshair-tr">+</span>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Competitor Tracker</h3>
                    <p style="font-size: 0.88rem; color: var(--ink-muted); line-height: 1.55;">Direct rival mapping isolating category standards from genuine market whitespace where you win margin.</p>
                    <div class="pack-val">Standard Valuation: £600</div>
                </div>
                <div class="pack-item">
                    <span class="crosshair crosshair-tr">+</span>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">AI &amp; IT Opportunity Log</h3>
                    <p style="font-size: 0.88rem; color: var(--ink-muted); line-height: 1.55;">Every manual bottleneck scored Impact &times; Urgency with monthly costs &mdash; sequenced into a 90-day plan.</p>
                    <div class="pack-val">Standard Valuation: £1,500</div>
                </div>
                <div class="pack-item">
                    <span class="crosshair crosshair-tr">+</span>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">SOP &amp; Delegation Register</h3>
                    <p style="font-size: 0.88rem; color: var(--ink-muted); line-height: 1.55;">Recurring operational duties documented, assigned, and automated to ensure continuity.</p>
                    <div class="pack-val">Standard Valuation: £700</div>
                </div>
                <div class="pack-item">
                    <span class="crosshair crosshair-tr">+</span>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">KPI Governance Dashboard</h3>
                    <p style="font-size: 0.88rem; color: var(--ink-muted); line-height: 1.55;">Monthly targets versus actuals across sales, marketing, operations and cashflow &mdash; reviewed in 45 min/wk.</p>
                    <div class="pack-val">Standard Valuation: £850</div>
                </div>
                <div class="pack-item">
                    <span class="crosshair crosshair-tr">+</span>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Tool Stack Plan</h3>
                    <p style="font-size: 0.88rem; color: var(--ink-muted); line-height: 1.55;">Tiered software stack recommendations (Starter, Growth, Established) without unnecessary vendor licensing.</p>
                    <div class="pack-val">Standard Valuation: £500</div>
                </div>
                <div class="pack-item" style="background-color: var(--paper-dark); color: #fff; border-color: var(--line-dark);">
                    <span class="crosshair crosshair-tr" style="color: #666;">+</span>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: #fff;">Handover &amp; Support</h3>
                    <p style="font-size: 0.88rem; color: #B5AFA2; line-height: 1.55;">Comprehensive executive working session with your key team, plus 30 days of email advisory support.</p>
                    <div class="pack-val" style="color: #83B89E; border-top-color: #332F27;">Included in Audit</div>
                </div>
            </div>

            <!-- Transparent Valuation Banner -->
            <div style="margin-top: 2.5rem; padding: 2rem 2.2rem; border: 1px solid var(--line); background-color: var(--paper-card); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem;">
                <div>
                    <div style="font-family: var(--font-mono); font-size: 0.74rem; color: var(--ink-muted); letter-spacing: 0.08em; text-transform: uppercase;">Engagement Investment</div>
                    <div style="font-family: var(--font-serif); font-size: 1.6rem; color: var(--ink); margin-top: 0.2rem;">
                        <s style="color: var(--ink-faint); font-size: 1.2rem;">£5,800</s> &nbsp; Fixed Audit Investment: <b>£2,950</b>
                    </div>
                    <p style="margin: 0; color: var(--ink-muted); font-size: 0.9rem;">Initial 45-minute discovery consultation is completely free of charge.</p>
                </div>
                <a href="#book" class="btn btn-primary">Book Free Discovery Call</a>
            </div>
        </div>
    </section>

    <!-- COMPARISON TABLE: GUESSING VS. KNOWING -->
    <section class="sec">
        <div class="wrap" style="max-width: 960px;">
            <div style="max-width: 720px; margin-bottom: 2rem;">
                <span class="eyebrow">Commercial Decision Discipline</span>
                <h2>Guesswork vs. Engineered Roadmap</h2>
                <p class="lead">
                    Most companies select software and AI tools on impulse, aggressive sales pitches, or peer recommendations. Here is how a structured audit contrasts with conventional selection:
                </p>
            </div>

            <table class="comparison-table">
                <thead>
                    <tr>
                        <th style="width: 30%;">Decision Factor</th>
                        <th style="width: 35%;">Conventional SME Approach</th>
                        <th style="width: 35%;">The Nexteck Audit Standard</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>Software Procurement</b></td>
                        <td style="color: var(--ink-muted);">Buying multiple disjointed SaaS tools based on marketing hype</td>
                        <td><b style="color: var(--accent);">Targeted 3-tier tool stack</b> based on audited bottlenecks</td>
                    </tr>
                    <tr>
                        <td><b>AI Implementation</b></td>
                        <td style="color: var(--ink-muted);">Adopting generic chat tools without measurable workflow return</td>
                        <td><b style="color: var(--accent);">Impact &times; Urgency scored</b> use-cases with verified margin return</td>
                    </tr>
                    <tr>
                        <td><b>Operational Handover</b></td>
                        <td style="color: var(--ink-muted);">Knowledge resides solely in the founder's head; fragile scaling</td>
                        <td><b style="color: var(--accent);">Documented SOP registers</b> and delegated responsibility matrix</td>
                    </tr>
                    <tr>
                        <td><b>Performance Governance</b></td>
                        <td style="color: var(--ink-muted);">Ad-hoc emergency reviews when monthly cashflow shows stress</td>
                        <td><b style="color: var(--accent);">60-minute weekly KPI dashboard</b> focused strictly on variances</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- FAQS -->
    <section class="sec sec-warm">
        <div class="wrap" style="max-width: 860px;">
            <div style="margin-bottom: 2.5rem;">
                <span class="eyebrow">Clarity</span>
                <h2>Frequently Addressed Questions</h2>
            </div>

            <div style="border-top: 1px solid var(--line);">
                <details class="faq-item">
                    <summary>Are we obligated to purchase specific software through Nexteck?</summary>
                    <div class="faq-ans">
                        No. Every recommendation is provided across three transparent budget tiers &mdash; Starter, Growth, and Established &mdash; alongside a cost-of-delay calculation. You may procure licenses directly, build bespoke modules, or retain your current setup. We accept zero vendor commission kickbacks.
                    </div>
                </details>
                <details class="faq-item">
                    <summary>How is our confidential operational and client data protected?</summary>
                    <div class="faq-ans">
                        Under formal non-disclosure agreements signed prior to exchanging technical details. We review exports under read-only permissions where possible, never take custody of your database records, and securely destroy working documentation upon engagement sign-off.
                    </div>
                </details>
                <details class="faq-item">
                    <summary>Will AI be recommended if our core issue is basic process discipline?</summary>
                    <div class="faq-ans">
                        Never. Every opportunity is scored strictly on proven leverage. Where basic systems integration or clean standard operating procedures solve the issue, we specify that first. Several of our client roadmaps implement zero AI in Phase 1.
                    </div>
                </details>
                <details class="faq-item">
                    <summary>What if our business model cannot be served by off-the-shelf software?</summary>
                    <div class="faq-ans">
                        That represents the eighth vulnerability in our diagnostic. If your unique competitive edge cannot be handled by off-the-shelf software, we architect a bespoke software module with transparent development specifications and phased milestones.
                    </div>
                </details>
                <details class="faq-item">
                    <summary>Why does Nexteck limit intake to six quarterly engagements?</summary>
                    <div class="faq-ans">
                        Because every engagement is conducted directly by Principal Architect Mohammed Nasar rather than delegated to junior staff. Capacity is strictly capped to guarantee senior attention.
                    </div>
                </details>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script>
        document.getElementById("leadForm").addEventListener("submit", function (ev) {
            ev.preventDefault();
            const btn = document.getElementById("submitBtn");
            if(btn) {
                btn.disabled = true;
                btn.innerText = "Registering Request...";
            }

            const formData = new FormData(this);

            fetch("{{ route('lead.submit') }}", {
                method: "POST",
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if(data.success) {
                    document.getElementById("leadForm").style.display = "none";
                    document.getElementById("formSuccess").style.display = "block";
                } else {
                    alert(data.message || "Please check your inputs.");
                    if(btn) {
                        btn.disabled = false;
                        btn.innerText = "Request Strategy Call";
                    }
                }
            })
            .catch(err => {
                console.error(err);
                alert("An error occurred during submission. Please try again.");
                if(btn) {
                    btn.disabled = false;
                    btn.innerText = "Request Strategy Call";
                }
            });
        });
    </script>
</body>
</html>