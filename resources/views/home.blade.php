<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Development Company London | Web &amp; Custom Software</title>
    <meta name="description" content="Nexteck is a leading Software Development Company in London delivering custom software solutions, web development, IT strategy &amp; AI audits for UK SMEs.">
    <meta name="keywords" content="Software Development Company London, Custom Software Solutions London, Web Development Company London, Bespoke Software Development UK, AI Strategy Consultant London, IT Strategy Audit SMEs, Nexteck">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="Mohammed Nasar — Nexteck Consulting">
    <meta name="geo.region" content="GB-LND">
    <meta name="geo.placename" content="London">
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nexteck">
    <meta property="og:title" content="Software Development Company London | Web &amp; Custom Software">
    <meta property="og:description" content="Nexteck is a leading Software Development Company in London delivering custom software solutions, web development, IT strategy &amp; AI audits for UK SMEs.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Software Development Company London | Web &amp; Custom Software">
    <meta name="twitter:description" content="Nexteck is a leading Software Development Company in London delivering custom software solutions, web development, IT strategy &amp; AI audits for UK SMEs.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/editorial.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/nx2-base.css') }}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "ProfessionalService",
          "@id": "{{ url('/') }}#organization",
          "name": "Nexteck — Software Development Company London",
          "url": "{{ url('/') }}",
          "description": "Leading Software Development Company in London providing web & custom software solutions, end-to-end business audits, IT strategy and AI readiness roadmaps for UK SMEs.",
          "founder": {
            "@type": "Person",
            "name": "Mohammed Nasar",
            "jobTitle": "Principal Consultant & Software Architect"
          },
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "London",
            "addressCountry": "GB"
          },
          "areaServed": ["London", "United Kingdom"],
          "knowsAbout": [
            "Custom Software Development London",
            "Web Application Development",
            "Bespoke SaaS & CRM Solutions",
            "AI Strategy & Workflow Automation",
            "SME IT Roadmaps & Business Audits"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "{{ url('/') }}#website",
          "url": "{{ url('/') }}",
          "name": "Nexteck — Software Development Company London",
          "publisher": { "@id": "{{ url('/') }}#organization" }
        }
      ]
    }
    </script>
    <style>
        /* Hero & Home specific editorial layout */
        .home-hero {
            padding: clamp(3.5rem, 6vw, 6rem) 0 clamp(3rem, 5vw, 5rem);
            border-bottom: 1px solid var(--line);
            background-color: var(--paper);
            position: relative;
        }
        .hero-docket {
            background-color: var(--paper-warm);
            border: 1px solid var(--line);
            padding: 2rem;
            border-radius: var(--radius-sm);
            position: relative;
        }
        .docket-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--line);
            padding-bottom: 1rem;
            margin-bottom: 1.25rem;
            font-family: var(--font-mono);
            font-size: 0.74rem;
            color: var(--ink-muted);
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .docket-row {
            display: flex;
            justify-content: space-between;
            padding: 0.65rem 0;
            border-bottom: 1px dashed var(--line);
            font-size: 0.88rem;
        }
        .docket-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        .docket-row span:first-child {
            color: var(--ink-muted);
            font-family: var(--font-mono);
            font-size: 0.78rem;
        }
        .docket-row span:last-child {
            font-weight: 600;
            color: var(--ink);
        }

        /* Stats Ledger */
        .stats-ledger {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            border-bottom: 1px solid var(--line);
            background-color: var(--paper-warm);
        }
        .ledger-cell {
            padding: 2.2rem 1.8rem;
            border-right: 1px solid var(--line);
        }
        .ledger-cell:last-child {
            border-right: none;
        }
        .ledger-val {
            font-family: var(--font-mono);
            font-size: clamp(2rem, 3.2vw, 2.75rem);
            font-weight: 700;
            color: var(--ink);
            line-height: 1;
            margin-bottom: 0.5rem;
        }
        .ledger-val sup {
            color: var(--accent);
            font-size: 1.2rem;
            margin-left: 2px;
        }
        .ledger-label {
            font-size: 0.88rem;
            color: var(--ink-muted);
            line-height: 1.4;
        }

        /* Steps Timeline */
        .timeline-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            margin-top: 3rem;
            position: relative;
        }
        .timeline-step {
            border: 1px solid var(--line);
            background-color: var(--paper-card);
            padding: 1.8rem 1.5rem;
            border-radius: var(--radius-sm);
            display: flex;
            flex-direction: column;
            position: relative;
        }
        .timeline-num {
            font-family: var(--font-mono);
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .timeline-step h3 {
            font-size: 1.3rem;
            margin-bottom: 0.75rem;
        }
        .timeline-step p {
            font-size: 0.92rem;
            color: var(--ink-muted);
            line-height: 1.55;
            flex-grow: 1;
            margin-bottom: 1.2rem;
        }
        .timeline-tag {
            font-family: var(--font-mono);
            font-size: 0.72rem;
            background-color: var(--paper-warm);
            padding: 0.4rem 0.65rem;
            border: 1px solid var(--line-subtle);
            color: var(--ink);
        }

        /* Nasar Portrait Frame */
        .portrait-frame {
            border: 1px solid var(--line);
            padding: 10px;
            background-color: var(--paper-card);
            box-shadow: 6px 6px 0px rgba(24, 23, 20, 0.06);
            position: relative;
        }
        .portrait-frame img {
            width: 100%;
            height: auto;
            filter: contrast(1.04) brightness(0.98);
        }

        /* Industry Cards in Editorial Style */
        .ind-item-card {
            border: 1px solid var(--line);
            background-color: var(--paper-card);
            border-radius: var(--radius-sm);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: border-color 0.18s ease;
            position: relative;
        }
        .ind-item-card:hover {
            border-color: var(--ink);
        }
        .ind-img-frame {
            height: 200px;
            width: 100%;
            overflow: hidden;
            background-color: var(--paper-warm);
            border-bottom: 1px solid var(--line);
            position: relative;
        }
        .ind-img-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: contrast(1.02);
            transition: transform 0.35s ease;
        }
        .ind-item-card:hover .ind-img-frame img {
            transform: scale(1.03);
        }
        .ind-card-body {
            padding: 1.6rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .ind-item-badge {
            font-family: var(--font-mono);
            font-size: 0.72rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--accent);
            margin-bottom: 0.6rem;
        }
        .ind-item-card h3 {
            font-size: 1.25rem;
            margin-bottom: 0.6rem;
            line-height: 1.25;
        }
        .ind-item-card p {
            font-size: 0.9rem;
            color: var(--ink-muted);
            line-height: 1.55;
            margin-bottom: 1.2rem;
            flex-grow: 1;
        }

        @media (max-width: 960px) {
            .stats-ledger {
                grid-template-columns: repeat(2, 1fr);
            }
            .ledger-cell:nth-child(2) {
                border-right: none;
            }
            .ledger-cell:nth-child(1), .ledger-cell:nth-child(2) {
                border-bottom: 1px solid var(--line);
            }
            .timeline-grid {
                grid-template-columns: 1fr;
            }
        }
        @media (max-width: 600px) {
            .stats-ledger {
                grid-template-columns: 1fr;
            }
            .ledger-cell {
                border-right: none;
                border-bottom: 1px solid var(--line);
            }
            .ledger-cell:last-child {
                border-bottom: none;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <!-- HERO SECTION -->
    <!-- <header class="home-hero">
        <div class="wrap">
            <div class="grid-12" style="align-items: center;">
                <div class="col-7">
                    <div class="stamp-badge accent" style="margin-bottom: 1.4rem;">
                        <span>&bull;</span> Advisory Practice &middot; London
                    </div>
                    <h1 style="margin-bottom: 1.4rem;">
                        Most businesses are investing in technology. Very few are running on the <em>right architecture.</em>
                    </h1>
                    <p class="lead" style="margin-bottom: 2rem;">
                        Nexteck performs an exhaustive, end-to-end business audit &mdash; processes, software systems, data integrity and team capacity &mdash; then delivers a costed, prioritised IT &amp; AI roadmap calibrated to hit your actual commercial targets. No vendor hype. Pure engineering discipline.
                    </p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center; margin-bottom: 2.2rem;">
                        <a class="btn btn-primary" href="{{ route('landing') }}#book">Book Diagnostic Strategy Call</a>
                        <a class="btn btn-secondary" href="#audit">Review Audit Scope</a>
                    </div>
                    <div style="display: flex; gap: 1.6rem; flex-wrap: wrap; font-family: var(--font-mono); font-size: 0.76rem; color: var(--ink-muted); letter-spacing: 0.04em;">
                        <span>[x] 25+ Years Advisory Record</span>
                        <span>[x] SME Strategy Toolkit&trade;</span>
                        <span>[x] Enterprise Rigour at SME Scale</span>
                    </div>
                </div>

                <div class="col-5">
                    <div class="hero-docket">
                        <span class="crosshair crosshair-tl">+</span>
                        <span class="crosshair crosshair-tr">+</span>
                        <div class="docket-head">
                            <span>Engagement Docket</span>
                            <span>Ref: NX-2026</span>
                        </div>
                        <div class="docket-row">
                            <span>Principal</span>
                            <span>Mohammed Nasar</span>
                        </div>
                        <div class="docket-row">
                            <span>Scope</span>
                            <span>Full Process &amp; IT Audit</span>
                        </div>
                        <div class="docket-row">
                            <span>Cadence</span>
                            <span>6 Engagements / Quarter</span>
                        </div>
                        <div class="docket-row">
                            <span>Deliverable</span>
                            <span>90-Day Costed Roadmap</span>
                        </div>
                        <div class="docket-row">
                            <span>Diagnostic</span>
                            <span>Live 45-Min Call</span>
                        </div>
                        <div style="margin-top: 1.4rem; padding-top: 1.2rem; border-top: 1px solid var(--line); font-size: 0.85rem; color: var(--ink-muted); line-height: 1.5;">
                            Every finding is scored for commercial leverage before you invest in a single line of software code or automation.
                        </div>
                        <a href="{{ route('landing') }}#book" class="btn btn-ghost" style="width: 100%; margin-top: 1.2rem; font-size: 0.84rem; justify-content: center;">
                            Apply for an Advisory Slot
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header> -->

    <section class="nx2-sec nx2-hero" id="nx2-hero">
  <div class="nx2-wrap">
    <div class="nx2-hero__word">Nexteck</div>
    <h2 class="nx2-hero__title">Consulting. <span class="nx2-v">AI.</span> Digital<br>Products.</h2>
    <p class="nx2-lead">From business strategy to intelligent technology, we make transformation real.</p>
    <p class="nx2-hero__tag">Strategy first. Intelligence built in. Results by design.</p>
  </div>
  <img class="nx2-hero__logo" src="{{ asset('images/nx2/logo-ai.png') }}" alt="" loading="lazy">
</section>

<section class="nx2-sec nx2-cta" id="nx2-cta">
  <div class="nx2-wrap nx2-cta__row">
    <div>
      <div class="nx2-eyebrow">For SME business owners</div>
      <h2 class="nx2-h">Before you read further, complete your Business <span class="nx2-v">AI Assessment</span> Toolkit</h2>
      <p class="nx2-lead">Find out where your business stands, which processes to automate and what to prioritise. Then every decision that follows is based on your own facts.</p>
    </div>
    <div class="nx2-cta__steps">
      <div class="nx2-card nx2-cta__s1">
        <small>STEP 1</small><h3>Complete the toolkit</h3>
        <a href="{{ url('/toolkit') }}">www.thenexteck.com/toolkit</a>
      </div>
      <div class="nx2-cta__s2">
        <small>STEP 2: NEED HELP?</small><h3>Call us now</h3>
        <a href="tel:+447879175585">+44 7879 175585</a>
      </div>
    </div>
  </div>
</section>

<section class="nx2-sec nx2-who" id="nx2-who">
  <img class="nx2-person" src="{{ asset('images/nx2/s3.png') }}" alt="" loading="lazy">
  <div class="nx2-wrap">
    <div class="nx2-eyebrow">Who we are</div>
    <h2 class="nx2-h">Enterprise thinking. <span class="nx2-v">Entrepreneurial</span> execution.</h2>
    <p class="nx2-lead">A UK technology consulting and digital solutions company connecting business ambition with practical execution.</p>
    <div class="nx2-grid nx2-g3 nx2-who__stats">
      <div class="nx2-card"><div class="nx2-who__num">25+</div><span>years of IT strategy experience</span></div>
      <div class="nx2-card"><div class="nx2-who__num">5</div><span>industries served</span></div>
      <div class="nx2-card"><div class="nx2-who__num">30+</div><span>digital platforms built and run</span></div>
    </div>
    <p class="nx2-foot">Banking and Insurance | Manufacturing | Education | Ecommerce | Professional Services</p>
  </div>
</section>

<section class="nx2-sec nx2-cap" id="nx2-cap">
  <!-- <img class="nx2-person" src="{{ asset('images/nx2/s4.png') }}" alt="" loading="lazy"> -->
  <div class="nx2-wrap">
    <div class="nx2-eyebrow">Core capabilities</div>
    <h2 class="nx2-h">Consulting, AI and engineering,<br>connected by design</h2>
    <div class="nx2-grid nx2-g2 nx2-cap__grid">
      <div class="nx2-card nx2-card--w"><h3>Enterprise Technology Consulting</h3><ul><li>Enterprise architecture</li><li>Transformation roadmaps</li><li>KPI frameworks</li></ul></div>
      <div class="nx2-card nx2-card--w"><h3>AI and Intelligent Automation</h3><ul><li>AI readiness assessments</li><li>AI agents and workflows</li><li>Document intelligence</li></ul></div>
      <div class="nx2-card nx2-card--w"><h3>Custom Software &amp; Apps, and Cloud Management</h3><ul><li>Web and mobile apps</li><li>Portals and marketplaces</li><li>APIs and payments</li></ul></div>
      <div class="nx2-card nx2-card--w"><h3>Digital Growth</h3><ul><li>AI-era brand visibility</li><li>Generative engine optimisation</li><li>Conversion-led web</li></ul></div>
    </div>
  </div>
</section>

<section class="nx2-sec nx2-tk" id="nx2-tk">
  <!-- <img class="nx2-person" src="{{ asset('images/nx2/s5.png') }}" alt="" loading="lazy"> -->
  <div class="nx2-wrap">
    <div class="nx2-eyebrow">The Nexteck SME Strategy Toolkit</div>
    <h2 class="nx2-h">A practical framework for better business</h2>
    <div class="nx2-grid nx2-g2 nx2-tk__grid">
      <div class="nx2-card nx2-card--w"><h3>Industry Benchmarking</h3><p>Compare against industry leaders</p></div>
      <div class="nx2-card nx2-card--w"><h3>Competitor Intelligence</h3><p>Find whitespace to differentiate</p></div>
      <div class="nx2-card nx2-card--w"><h3>KPI and Performance Governance</h3><p>Targets, owners, regular reviews</p></div>
      <div class="nx2-card nx2-card--w"><h3>SOP and Delegation Register</h3><p>Document and delegate repeatable work</p></div>
      <div class="nx2-card nx2-card--w"><h3>AI and IT Opportunity Planning</h3><p>Score by impact and urgency</p></div>
      <div class="nx2-card nx2-card--w"><h3>Technology Roadmap</h3><p>Phased plan with costs and next steps</p></div>
    </div>
    <p class="nx2-tk__line">Every recommendation connects to a business need, an owner and a measurable objective.</p>
    <a class="nx2-btn" href="{{ url('/toolkit') }}">Open the SME Toolkit</a>
  </div>
</section>


<section class="nx2-sec nx2-how" id="nx2-how">
  <!-- <img class="nx2-person" src="{{ asset('images/nx2/s6.png') }}" alt="" loading="lazy"> -->
  <div class="nx2-wrap">
    <div class="nx2-eyebrow">How we work</div>
    <h2 class="nx2-h">From business challenge to working solution</h2>
    <div class="nx2-grid nx2-g3 nx2-how__steps">
      <div><div class="nx2-how__n">01</div><h3>Discover</h3><p>Objectives, constraints, current systems</p></div>
      <div><div class="nx2-how__n">02</div><h3>Diagnose</h3><p>Processes, data and operating model</p></div>
      <div><div class="nx2-how__n">03</div><h3>Design</h3><p>Architecture, roadmap, cost and risk</p></div>
      <div><div class="nx2-how__n">04</div><h3>Build</h3><p>Develop and integrate with testing</p></div>
      <div><div class="nx2-how__n">05</div><h3>Improve</h3><p>Measure outcomes and adapt</p></div>
    </div>
  </div>
</section>


<section class="nx2-sec nx2-prod" id="nx2-prod">
  <div class="nx2-wrap">
    <div class="nx2-eyebrow">Digital products</div>
    <h2 class="nx2-h">We don't just advise. We build and run products.</h2>
    <div class="nx2-grid nx2-g4 nx2-prod__grid">
      <div class="nx2-card nx2-card--w"><h3>HYST</h3><p>Zero-commission food ordering with payments and delivery integration</p><a href="https://hyst.uk" target="_blank" rel="noopener">hyst.uk</a></div>
      <div class="nx2-card nx2-card--w"><h3>BRNDS</h3><p>AI-era brand visibility and generative engine optimisation</p><a href="https://brnds.co.uk" target="_blank" rel="noopener">brnds.co.uk</a></div>
      <div class="nx2-card nx2-card--w"><h3>Boltix</h3><p>OEM service platform with live video support and SLA tracking</p><a href="https://boltix.aideepseek.uk" target="_blank" rel="noopener">boltix.aideepseek.uk</a></div>
      <div class="nx2-card nx2-card--w"><h3>AI University</h3><p>Practical agentic AI learning with institutional partnerships</p><a href="https://aiuniversity.live" target="_blank" rel="noopener">aiuniversity.live</a></div>
    </div>
  </div>
</section>

@php
$nx2Sites=['hyst.uk','brnds.co.uk','bizconn.co.uk','aiuniversity.live','boltix.aideepseek.uk','smplyrefer','bimanager','marianhouse','yodoc.co.uk','annexdoc.com','postcodeservices.uk','infostore-news.com','wowherbs.co.uk','pearlcon.com','sparelyx.com','lightasair.co.uk','siaprofessionals.com','eb4u.uk','maxmarkbuilders.com','frwrdtutors.com','salesflow360','sofinish.co.uk','sofin.co.uk','mychoicetutor.com','britishlingua.com','virnixworldwide.com','aiyman.uz','bookdriving.co.uk','desifoods.uk','globetrottersltd.com','jaysbeauty.co.uk','markly.live','redxteam.com','thegmauk.org','thehalalfoods.co.uk','Jakpa Market','ERP System','CRM System','UK Charity Management System','Ticket Management & IT Support'];
@endphp
<section class="nx2-sec nx2-port" id="nx2-port">
  <div class="nx2-wrap">
    <div class="nx2-eyebrow">Portfolio</div>
    <h2 class="nx2-h">A growing portfolio of live platforms</h2>
    <div class="nx2-port__grid">
      @foreach($nx2Sites as $s)
        @if(str_contains($s,'.') && !str_contains($s,' '))
          <a class="nx2-port__pill" href="https://{{ $s }}" target="_blank" rel="noopener">{{ $s }}</a>
        @else
          <span class="nx2-port__pill">{{ $s }}</span>
        @endif
      @endforeach
    </div>
  </div>
</section>

<section class="nx2-sec nx2-why" id="nx2-why">
  <img class="nx2-person" src="{{ asset('images/nx2/person-why.png') }}" alt="" loading="lazy">
  <div class="nx2-wrap">
    <div class="nx2-eyebrow">Why Nexteck</div>
    <h2 class="nx2-h">Strategic clarity. Technical depth.</h2>
    <div class="nx2-grid nx2-g2 nx2-why__grid">
      <div class="nx2-card nx2-card--w"><h3>Business before technology</h3><p>We start with your commercial goals, then pick the tools.</p></div>
      <div class="nx2-card nx2-card--w"><h3>Architecture with practical execution</h3><p>Designs that get built, tested and run.</p></div>
      <div class="nx2-card nx2-card--w"><h3>Entrepreneurial product perspective</h3><p>We run our own products, so we know what ships.</p></div>
      <div class="nx2-card nx2-card--w"><h3>Designed around your organisation</h3><p>Fits your team, budget and way of working.</p></div>
      <div class="nx2-card nx2-card--w"><h3>Consulting and engineering under one roof</h3><p>The people who plan it also build it.</p></div>
      <div class="nx2-card nx2-card--w"><h3>Ownership and transparency</h3><p>You own every asset. No lock-in. Costs agreed up front.</p></div>
    </div>
    <p class="nx2-why__vision">Our vision: make intelligent technology useful to every ambitious business.</p>
  </div>
</section>

<section class="nx2-sec nx2-contact" id="nx2-contact">
  <img class="nx2-person" src="{{ asset('images/nx2/person-contact.png') }}" alt="" loading="lazy">
  <div class="nx2-wrap">
    <div class="nx2-eyebrow">Nexteck</div>
    <h2 class="nx2-contact__title">Start a <span class="nx2-v">conversation</span></h2>
    <p class="nx2-lead">Strategy for the decisions that matter.<br>Intelligence for the work that can improve.<br>Technology for the future you want to build.</p>
    <div class="nx2-contact__links">
      <a href="https://www.thenexteck.com">thenexteck.com</a>
      <a href="mailto:nasar@nexteck.co.uk">nasar@nexteck.co.uk</a>
      <a href="tel:+447879175585">+44 7879 175585</a>
    </div>
    <a class="nx2-btn" href="{{ route('landing') }}#book">Book Discovery Call</a>
  </div>
</section>



    <!-- STATS LEDGER -->
    <!-- <section class="stats-ledger">
        <div class="ledger-cell">
            <div class="ledger-val">25<sup>+</sup></div>
            <div class="ledger-label">Years directing IT architecture, enterprise strategy &amp; software roadmaps</div>
        </div>
        <div class="ledger-cell">
            <div class="ledger-val">15<sup>+</sup></div>
            <div class="ledger-label">Target sectors spanning banking, rail, manufacturing &amp; e-commerce</div>
        </div>
        <div class="ledger-cell">
            <div class="ledger-val">40<sup>+</sup></div>
            <div class="ledger-label">Digital transformation programmes delivered on time and within scope</div>
        </div>
        <div class="ledger-cell">
            <div class="ledger-val">60<sup>%</sup></div>
            <div class="ledger-label">Average reduction in manual admin overhead within the initial 90 days</div>
        </div>
    </section> -->

    <!-- PAIN POINTS: EDITORIAL NUMBERED LIST -->
    <!-- <section class="sec" id="audit">
        <div class="wrap">
            <div style="max-width: 720px; margin-bottom: 2.5rem;">
                <span class="eyebrow">The Diagnostic Assessment</span>
                <h2>Which of these operational bottlenecks is quietly suppressing your margins?</h2>
                <p class="lead">
                    These are the recurring vulnerabilities uncovered in almost every growing firm we audit. On our initial call we score each on a 1&ndash;5 severity scale; anything reaching 4 or 5 becomes an immediate action item in your roadmap.
                </p>
            </div>

            <ul class="editorial-list">
                <li class="editorial-list-item">
                    <div class="editorial-num">01</div>
                    <div>
                        <div class="editorial-item-title">Manual processes consuming executive hours</div>
                        <div class="stamp-badge terracotta" style="margin-top: 0.5rem;">Highest Frequency</div>
                    </div>
                    <p class="editorial-item-desc">
                        Order reconciliations, manual invoicing, and ad-hoc scheduling handled by hand each week by key personnel who should be generating commercial growth.
                    </p>
                </li>
                <li class="editorial-list-item">
                    <div class="editorial-num">02</div>
                    <div>
                        <div class="editorial-item-title">Fragmented systems and siloed data</div>
                        <div class="stamp-badge terracotta" style="margin-top: 0.5rem;">Critical Risk</div>
                    </div>
                    <p class="editorial-item-desc">
                        Client records re-typed across multiple disconnected tools. No singular source of truth. Weekly reporting compiled manually from disparate spreadsheets at night.
                    </p>
                </li>
                <li class="editorial-list-item">
                    <div class="editorial-num">03</div>
                    <div>
                        <div class="editorial-item-title">Operations unable to scale with volume</div>
                        <div class="stamp-badge" style="margin-top: 0.5rem;">Capacity Ceiling</div>
                    </div>
                    <p class="editorial-item-desc">
                        Quality slips and founders become the sole operational bottleneck the moment client order volume doubles. Hiring additional head-count merely increases overhead.
                    </p>
                </li>
                <li class="editorial-list-item">
                    <div class="editorial-num">04</div>
                    <div>
                        <div class="editorial-item-title">Repetitive administrative drag</div>
                        <div class="stamp-badge" style="margin-top: 0.5rem;">Time Drain</div>
                    </div>
                    <p class="editorial-item-desc">
                        Payment chasing, routine client status updates, and dispatch confirmations &mdash; none require senior executive judgment, yet all consume owner attention.
                    </p>
                </li>
                <li class="editorial-list-item">
                    <div class="editorial-num">05</div>
                    <div>
                        <div class="editorial-item-title">AI uncertainty and vendor hype</div>
                        <div class="stamp-badge terracotta" style="margin-top: 0.5rem;">Strategic Hazard</div>
                    </div>
                    <p class="editorial-item-desc">
                        Hearing that artificial intelligence must be adopted, but lacking the architecture to distinguish genuine ROI from expensive, non-functional vendor tools.
                    </p>
                </li>
                <li class="editorial-list-item">
                    <div class="editorial-num">06</div>
                    <div>
                        <div class="editorial-item-title">Legacy software and technical debt</div>
                        <div class="stamp-badge" style="margin-top: 0.5rem;">Security Vulnerability</div>
                    </div>
                    <p class="editorial-item-desc">
                        Outdated database infrastructure, unpatched security liabilities, and employees quietly building unmanaged local workarounds rather than using the tools properly.
                    </p>
                </li>
                <li class="editorial-list-item">
                    <div class="editorial-num">07</div>
                    <div>
                        <div class="editorial-item-title">Zero automated system integration</div>
                        <div class="stamp-badge" style="margin-top: 0.5rem;">Data Leakage</div>
                    </div>
                    <p class="editorial-item-desc">
                        Reliance on manual CSV exports, duplicate database entries, and human entry error from re-keying customer orders between booking, warehouse and CRM.
                    </p>
                </li>
                <li class="editorial-list-item">
                    <div class="editorial-num">08</div>
                    <div>
                        <div class="editorial-item-title">Off-the-shelf software limiting the business model</div>
                        <div class="stamp-badge" style="margin-top: 0.5rem;">Growth Blocker</div>
                    </div>
                    <p class="editorial-item-desc">
                        Your unique competitive advantage doesn't conform to standard SaaS products &mdash; future expansion is capped by what generic vendor software permits.
                    </p>
                </li>
            </ul>

            <div style="margin-top: 3.5rem; padding: 2rem; border: 1px solid var(--line); background-color: var(--paper-warm); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem;">
                <div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 0.3rem;">Recognise two or more of these symptoms?</h3>
                    <p style="margin: 0; color: var(--ink-muted); font-size: 0.94rem;">An executive audit pays for itself by eliminating hours of wasted labour and clarifying your digital roadmap.</p>
                </div>
                <a class="btn btn-primary" href="{{ route('landing') }}#book">Request Diagnostic Call</a>
            </div>
        </div>
    </section> -->

    <!-- METHODOLOGY: 4-STAGE TIMELINE -->
    <!-- <section class="sec sec-dark" id="method">
        <div class="wrap">
            <div style="max-width: 720px; margin-bottom: 2.5rem;">
                <span class="eyebrow" style="color: #9D9688;">The Nexteck Framework</span>
                <h2>One structured engagement. Four stages. Clear commercial outcomes.</h2>
                <p class="lead" style="color: #C5BFB3;">
                    Every engagement runs through the Nexteck SME Strategy &amp; Tracking Toolkit&trade; &mdash; the same battle-tested framework used to architect IT roadmaps across institutional finance, logistics, and industrial supply.
                </p>
            </div>

            <div class="timeline-grid">
                <div class="timeline-step" style="background: #22201C; border-color: #38342D; color: #F6F3EC;">
                    <div class="timeline-num" style="color: #83B89E;">
                        <span>PHASE 01</span>
                        <span>DIAGNOSTIC</span>
                    </div>
                    <h3 style="color: #FFFFFF;">Industry Benchmarking</h3>
                    <p style="color: #B5AFA2;">
                        We score your firm against 3&ndash;5 recognised market leaders across five distinct dimensions: customer journey, technology stack, marketing efficiency, operations, and talent governance.
                    </p>
                    <div class="timeline-tag" style="background: #181714; border-color: #2D2B26; color: #DCD6C8;">
                        Tab: Industry Benchmark
                    </div>
                </div>

                <div class="timeline-step" style="background: #22201C; border-color: #38342D; color: #F6F3EC;">
                    <div class="timeline-num" style="color: #83B89E;">
                        <span>PHASE 02</span>
                        <span>MAPPING</span>
                    </div>
                    <h3 style="color: #FFFFFF;">Competitor Analysis</h3>
                    <p style="color: #B5AFA2;">
                        We map your direct rivals to separate category standards from genuine market whitespace &mdash; positioning your company where it commands premium margin rather than competing on price.
                    </p>
                    <div class="timeline-tag" style="background: #181714; border-color: #2D2B26; color: #DCD6C8;">
                        Tab: Competitor Tracker
                    </div>
                </div>

                <div class="timeline-step" style="background: #22201C; border-color: #38342D; color: #F6F3EC;">
                    <div class="timeline-num" style="color: #83B89E;">
                        <span>PHASE 03</span>
                        <span>ARCHITECTURE</span>
                    </div>
                    <h3 style="color: #FFFFFF;">AI &amp; IT Roadmap</h3>
                    <p style="color: #B5AFA2;">
                        Every bottleneck becomes a scored opportunity: Impact &times; Urgency, costed per month, and sequenced into an actionable 90-day execution plan.
                    </p>
                    <div class="timeline-tag" style="background: #181714; border-color: #2D2B26; color: #DCD6C8;">
                        Tab: AI &amp; IT Opportunity Log
                    </div>
                </div>

                <div class="timeline-step" style="background: #22201C; border-color: #38342D; color: #F6F3EC;">
                    <div class="timeline-num" style="color: #83B89E;">
                        <span>PHASE 04</span>
                        <span>GOVERNANCE</span>
                    </div>
                    <h3 style="color: #FFFFFF;">KPI Oversight</h3>
                    <p style="color: #B5AFA2;">
                        Monthly targets versus actuals across sales, marketing, cashflow, and customer fulfilment &mdash; designed to be reviewed in under 60 minutes per week.
                    </p>
                    <div class="timeline-tag" style="background: #181714; border-color: #2D2B26; color: #DCD6C8;">
                        Tab: KPI Dashboard
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- SAMPLE OUTPUT: ROADMAP LEDGER TABLE -->
    <!-- <section class="sec sec-warm">
        <div class="wrap">
            <div style="max-width: 760px; margin-bottom: 2.2rem;">
                <span class="eyebrow">Exemplar Deliverable</span>
                <h2>What your prioritised roadmap looks like</h2>
                <p class="lead">
                    An authentic extract from a client AI &amp; IT Opportunity Log. Opportunities are scored on a deliberate <b>Impact &times; Urgency</b> formula. We execute the highest scores in the first 90 days.
                </p>
            </div>

            <div class="dossier-table-wrap">
                <table class="dossier-table">
                    <thead>
                        <tr>
                            <th style="width: 25%;">Business Process</th>
                            <th style="width: 15%;">Manual Load</th>
                            <th style="width: 35%;">Engineered AI / IT Solution</th>
                            <th style="width: 12%;">Score Formula</th>
                            <th style="width: 13%;">Sequencing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <b>Sales Inquiries Triage</b><br>
                                <span style="font-family: var(--font-mono); font-size: 0.76rem; color: var(--ink-faint);">8 hrs/wk &middot; Senior bottleneck</span>
                            </td>
                            <td style="font-family: var(--font-mono); font-size: 0.84rem;">8 hrs/wk</td>
                            <td>CRM integration + AI lead-qualification chatbot &mdash; owner only handles verified, high-value briefs</td>
                            <td style="font-family: var(--font-mono); font-weight: 700; color: var(--accent);">5 &times; 4 = 20</td>
                            <td><span class="stamp-badge terracotta" style="transform:none; font-size:0.68rem;">Phase 1 (Days 1&ndash;30)</span></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Re-keying Order Data to Ledger</b><br>
                                <span style="font-family: var(--font-mono); font-size: 0.76rem; color: var(--ink-faint);">5 hrs/wk &middot; Human error risk</span>
                            </td>
                            <td style="font-family: var(--font-mono); font-size: 0.84rem;">5 hrs/wk</td>
                            <td>Direct API webhook bridging booking system into accounting ledger automatically</td>
                            <td style="font-family: var(--font-mono); font-weight: 700; color: var(--accent);">4 &times; 5 = 20</td>
                            <td><span class="stamp-badge terracotta" style="transform:none; font-size:0.68rem;">Phase 1 (Days 1&ndash;30)</span></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Proprietary Workflow Operations</b><br>
                                <span style="font-family: var(--font-mono); font-size: 0.76rem; color: var(--ink-faint);">10 hrs/wk &middot; Spreadsheet chaos</span>
                            </td>
                            <td style="font-family: var(--font-mono); font-size: 0.84rem;">10 hrs/wk</td>
                            <td>Custom database module replacing manual spreadsheets with multi-user permissions</td>
                            <td style="font-family: var(--font-mono); font-weight: 700; color: var(--ink);">5 &times; 3 = 15</td>
                            <td><span class="stamp-badge" style="transform:none; font-size:0.68rem;">Phase 2 (Days 31&ndash;60)</span></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Weekly Invoicing &amp; Chasing</b><br>
                                <span style="font-family: var(--font-mono); font-size: 0.76rem; color: var(--ink-faint);">4 hrs/wk &middot; Bookkeeping load</span>
                            </td>
                            <td style="font-family: var(--font-mono); font-size: 0.84rem;">4 hrs/wk</td>
                            <td>Automated billing schedule with human approval checkpoint prior to customer dispatch</td>
                            <td style="font-family: var(--font-mono); font-weight: 700; color: var(--ink);">4 &times; 3 = 12</td>
                            <td><span class="stamp-badge" style="transform:none; font-size:0.68rem;">Phase 2 (Days 31&ndash;60)</span></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Monthly Executive KPI Reporting</b><br>
                                <span style="font-family: var(--font-mono); font-size: 0.76rem; color: var(--ink-faint);">6 hrs/mo &middot; Assembled manually</span>
                            </td>
                            <td style="font-family: var(--font-mono); font-size: 0.84rem;">6 hrs/mo</td>
                            <td>Live KPI dashboard synchronised from CRM and finance &mdash; reviewed in 45 min/week</td>
                            <td style="font-family: var(--font-mono); font-weight: 700; color: var(--ink-faint);">3 &times; 2 = 6</td>
                            <td><span class="stamp-badge" style="transform:none; font-size:0.68rem;">Phase 3 (Days 61&ndash;90)</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div style="margin-top: 1.5rem; font-family: var(--font-mono); font-size: 0.78rem; color: var(--ink-muted); text-align: right;">
                Every roadmap includes the complete SOP register, governance dashboard, and tool stack specifications.
            </div>
        </div>
    </section> -->

    <!-- PRINCIPAL: MOHAMMED NASAR -->
    <!-- <section class="sec" id="nasar">
        <div class="wrap">
            <div class="grid-12" style="align-items: center;">
                <div class="col-5">
                    <div class="portrait-frame">
                        <img src="{{ asset('images/nasar1.jpeg') }}" alt="Mohammed Nasar &mdash; Principal Consultant, Nexteck">
                        <div style="margin-top: 0.8rem; display: flex; justify-content: space-between; align-items: center; font-family: var(--font-mono); font-size: 0.74rem; color: var(--ink-muted);">
                            <span>PRINCIPAL CONSULTANT</span>
                            <span>25 YEARS PRACTICE</span>
                        </div>
                    </div>
                </div>

                <div class="col-7">
                    <span class="eyebrow">Leadership &amp; Architecture</span>
                    <h2>Meet Mohammed Nasar</h2>
                    <p class="lead">
                        Over 25 years, Mohammed has advised inside tier-one global financial institutions, insurers, complex manufacturing networks, and e-commerce companies &mdash; architecting digital infrastructure that delivers reliable commercial performance.
                    </p>
                    <p>
                        Today, through Nexteck, he provides business founders and owner-managers with the exact same strategic discipline used by multinational enterprises &mdash; scaled appropriately to SME operations and budgets.
                    </p>
                    
                    <blockquote style="margin: 1.8rem 0; padding: 1.2rem 1.6rem; border-left: 3px solid var(--accent); background-color: var(--paper-warm); font-family: var(--font-serif); font-size: 1.15rem; font-style: italic; color: var(--ink); line-height: 1.55;">
                        &ldquo;Technology should buy a business founder time and margin &mdash; never consume both. My role is to locate the shortest, most cost-effective path from where your operations are today to where they need to be.&rdquo;
                    </blockquote>

                    <div style="display: flex; gap: 0.6rem; flex-wrap: wrap;">
                        <span class="stamp-badge">IT Strategy &amp; Roadmaps</span>
                        <span class="stamp-badge">AI Readiness Audits</span>
                        <span class="stamp-badge">Systems Integration</span>
                        <span class="stamp-badge">Custom Software Architecture</span>
                        <span class="stamp-badge">Process Automation</span>
                        <span class="stamp-badge">KPI Governance</span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- SECTOR DEPTH & INDUSTRIES -->
    <!-- <section class="sec sec-warm" id="industries">
        <div class="wrap">
            <div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 2.8rem;">
                <div style="max-width: 680px;">
                    <span class="eyebrow">Enterprise Sector Depth</span>
                    <h2>Sector Intelligence. One Standard: Commercial Return.</h2>
                    <p style="margin-bottom: 0; color: var(--ink-muted);">
                        Enterprise discipline translated into affordable, highly leveraged operational moves for growing UK businesses.
                    </p>
                </div>
                <a href="{{ route('industries.index') }}" class="btn btn-secondary">
                    View All 15 Sectors &rarr;
                </a>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">
                @if(isset($homeIndustries) && $homeIndustries->count() > 0)
                    @foreach($homeIndustries as $ind)
                        <article class="ind-item-card">
                            <span class="crosshair crosshair-tr">+</span>
                            <div class="ind-img-frame">
                                <img src="{{ $ind->image_url }}" alt="{{ $ind->title }}" loading="lazy">
                            </div>
                            <div class="ind-card-body">
                                <div class="ind-item-badge">{{ $ind->title }}</div>
                                <h3>{{ Str::limit($ind->tagline ?: $ind->title, 48) }}</h3>
                                <p>{{ Str::limit($ind->short_desc ?: strip_tags($ind->description), 110) }}</p>
                                <a href="{{ route('industries.show', $ind->slug) }}" class="btn-link" style="margin-top: auto;">
                                    Sector Briefing &rarr;
                                </a>
                            </div>
                        </article>
                    @endforeach
                @else
                    <article class="ind-item-card">
                        <span class="crosshair crosshair-tr">+</span>
                        <div class="ind-img-frame">
                            <img src="{{ asset('images/A3.png') }}" alt="Banking and fintech" loading="lazy">
                        </div>
                        <div class="ind-card-body">
                            <div class="ind-item-badge">Banking &amp; Fintech</div>
                            <h3>Secure, compliant, automated</h3>
                            <p>Customer onboarding, fraud-aware workflows, compliance triage, and automated regulatory reporting.</p>
                            <a href="{{ route('industries.show', 'banking-fintech') }}" class="btn-link" style="margin-top: auto;">Sector Briefing &rarr;</a>
                        </div>
                    </article>
                    <article class="ind-item-card">
                        <span class="crosshair crosshair-tr">+</span>
                        <div class="ind-img-frame">
                            <img src="{{ asset('images/A4.png') }}" alt="Insurance advisory" loading="lazy">
                        </div>
                        <div class="ind-card-body">
                            <div class="ind-item-badge">Insurance</div>
                            <h3>From paper documents to digital pipeline</h3>
                            <p>Claims intake automation, broker portal synchronization, and automated policy documentation.</p>
                            <a href="{{ route('industries.show', 'insurance') }}" class="btn-link" style="margin-top: auto;">Sector Briefing &rarr;</a>
                        </div>
                    </article>
                    <article class="ind-item-card">
                        <span class="crosshair crosshair-tr">+</span>
                        <div class="ind-img-frame">
                            <img src="{{ asset('images/A5.png') }}" alt="Manufacturing automation" loading="lazy">
                        </div>
                        <div class="ind-card-body">
                            <div class="ind-item-badge">Manufacturing</div>
                            <h3>Synchronised factory operations</h3>
                            <p>Real-time machine throughput, automated inventory tracking, and unified production dashboards.</p>
                            <a href="{{ route('industries.show', 'manufacturing') }}" class="btn-link" style="margin-top: auto;">Sector Briefing &rarr;</a>
                        </div>
                    </article>
                    <article class="ind-item-card">
                        <span class="crosshair crosshair-tr">+</span>
                        <div class="ind-img-frame">
                            <img src="{{ asset('images/A6.png') }}" alt="Education campus" loading="lazy">
                        </div>
                        <div class="ind-card-body">
                            <div class="ind-item-badge">Education</div>
                            <h3>Scalable digital learning systems</h3>
                            <p>Automated admissions workflows, LMS integration, and automated student feedback loops.</p>
                            <a href="{{ route('industries.show', 'education') }}" class="btn-link" style="margin-top: auto;">Sector Briefing &rarr;</a>
                        </div>
                    </article>
                    <article class="ind-item-card">
                        <span class="crosshair crosshair-tr">+</span>
                        <div class="ind-img-frame">
                            <img src="{{ asset('images/A7.png') }}" alt="E-commerce fulfilment" loading="lazy">
                        </div>
                        <div class="ind-card-body">
                            <div class="ind-item-badge">E-commerce</div>
                            <h3>Fulfillment without operational chaos</h3>
                            <p>Omnichannel stock sync, automated customer service routing, and order-to-ledger automation.</p>
                            <a href="{{ route('industries.show', 'e-commerce') }}" class="btn-link" style="margin-top: auto;">Sector Briefing &rarr;</a>
                        </div>
                    </article>
                    <article class="ind-item-card">
                        <span class="crosshair crosshair-tr">+</span>
                        <div class="ind-img-frame">
                            <img src="{{ asset('images/A8.png') }}" alt="Customer service team" loading="lazy">
                        </div>
                        <div class="ind-card-body">
                            <div class="ind-item-badge">Professional Services</div>
                            <h3>Client delivery with guaranteed SLAs</h3>
                            <p>Automated billing sequences, executive time-tracking, and priority inbox triage.</p>
                            <a href="{{ route('industries.show', 'professional-services') }}" class="btn-link" style="margin-top: auto;">Sector Briefing &rarr;</a>
                        </div>
                    </article>
                @endif
            </div>

            <div style="margin-top: 2.5rem; padding: 2rem 2.2rem; border: 1px solid var(--line); background-color: var(--paper-card); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem;">
                <div style="max-width: 720px;">
                    <div class="stamp-badge accent" style="margin-bottom: 0.6rem;">Specialist Practice</div>
                    <h3 style="font-size: 1.35rem; margin-bottom: 0.4rem;">Looking for Industrial OEM Spares, Rail &amp; Plant Equipment?</h3>
                    <p style="font-size: 0.92rem; color: var(--ink-muted); margin: 0;">
                        Nexteck maintains specialized engineering sourcing bridges across Oil &amp; Gas, Mining, Rail (<a href="https://pearlconrail.co.uk" target="_blank" style="text-decoration: underline; color: var(--ink);">pearlconrail.co.uk</a>), Water Treatment, and Low-Cost Global Sourcing.
                    </p>
                </div>
                <a href="{{ route('industries.index') }}" class="btn btn-secondary">
                    Explore Sourcing Practice
                </a>
            </div>
        </div>
    </section> -->

    <!-- RISK REVERSAL & COMMITMENTS -->
    <!-- <section class="sec">
        <div class="wrap">
            <div style="max-width: 700px; margin-bottom: 2.8rem;">
                <span class="eyebrow">Risk Governance</span>
                <h2>Why founders entrust Nexteck with their operational core</h2>
                <p class="lead">
                    You are sharing your commercial workflows, customer records, and internal plans. Here is our governance framework.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.8rem;">
                <div style="border-top: 2px solid var(--line-dark); padding-top: 1.2rem;">
                    <div style="font-family: var(--font-mono); font-size: 0.74rem; color: var(--accent); margin-bottom: 0.5rem;">01 &middot; INTELLECTUAL PROPERTY</div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">You own every asset</h3>
                    <p style="font-size: 0.9rem; color: var(--ink-muted); margin: 0;">The entire toolkit, roadmap, dashboards, and documentation remain 100% your property. Zero software lock-in, ever.</p>
                </div>
                <div style="border-top: 2px solid var(--line-dark); padding-top: 1.2rem;">
                    <div style="font-family: var(--font-mono); font-size: 0.74rem; color: var(--accent); margin-bottom: 0.5rem;">02 &middot; CONFIDENTIALITY</div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">NDA prior to disclosure</h3>
                    <p style="font-size: 0.9rem; color: var(--ink-muted); margin: 0;">All initial conversations are confidential. We sign your NDA or ours before any business details or financials are exchanged.</p>
                </div>
                <div style="border-top: 2px solid var(--line-dark); padding-top: 1.2rem;">
                    <div style="font-family: var(--font-mono); font-size: 0.74rem; color: var(--accent); margin-bottom: 0.5rem;">03 &middot; CAPITAL CONTROL</div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Costed before commitment</h3>
                    <p style="font-size: 0.9rem; color: var(--ink-muted); margin: 0;">Every software line item carries a transparent budget estimate and impact score. You authorize every spend in advance.</p>
                </div>
                <div style="border-top: 2px solid var(--line-dark); padding-top: 1.2rem;">
                    <div style="font-family: var(--font-mono); font-size: 0.74rem; color: var(--accent); margin-bottom: 0.5rem;">04 &middot; VALUE PROPORTION</div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Enterprise rigour at SME scale</h3>
                    <p style="font-size: 0.9rem; color: var(--ink-muted); margin: 0;">Institutional methodologies right-sized for founder budgets &mdash; sequenced so investment never outpaces realized savings.</p>
                </div>
                <div style="border-top: 2px solid var(--line-dark); padding-top: 1.2rem;">
                    <div style="font-family: var(--font-mono); font-size: 0.74rem; color: var(--accent); margin-bottom: 0.5rem;">05 &middot; TEAM CONTINUITY</div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Engineered for internal teams</h3>
                    <p style="font-size: 0.9rem; color: var(--ink-muted); margin: 0;">SOP registers, delegation logs, and staff guidance are built-in &mdash; ensuring procedures endure independently of any single person.</p>
                </div>
                <div style="border-top: 2px solid var(--line-dark); padding-top: 1.2rem;">
                    <div style="font-family: var(--font-mono); font-size: 0.74rem; color: var(--accent); margin-bottom: 0.5rem;">06 &middot; TIME EFFICIENCY</div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">60-minute weekly reviews</h3>
                    <p style="font-size: 0.9rem; color: var(--ink-muted); margin: 0;">Management by exception: monitor key red flags in under an hour per week without wading through unnecessary reports.</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- CALM ADVISORY CLOSING -->
    <!-- <section class="sec sec-dark" id="urgency" style="border-top: 1px solid #2D2B26;">
        <div class="wrap">
            <div class="grid-12" style="align-items: center;">
                <div class="col-7">
                    <span class="eyebrow" style="color: #9D9688;">Next Step</span>
                    <h2>Let us identify &mdash; in one conversation &mdash; what is holding your business back.</h2>
                    <p class="lead" style="color: #C5BFB3;">
                        A free 45-minute discovery consultation with principal architect Mohammed Nasar. We run the diagnostic framework live, benchmark your pain points, and provide an honest assessment of whether an audit makes commercial sense.
                    </p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 2rem;">
                        <a class="btn btn-primary" href="{{ route('landing') }}#book" style="background-color: #FFFFFF; color: var(--ink); border-color: #FFFFFF;">
                            Book Discovery Call
                        </a>
                        <a class="btn btn-ghost" href="#method" style="color: #DCD6C8; border-color: #4D483F;">
                            Review Methodology
                        </a>
                    </div>
                </div>

                <div class="col-5">
                    <div style="border: 1px solid #38342D; background-color: #22201C; padding: 2.2rem; border-radius: var(--radius-sm);">
                        <div style="font-family: var(--font-mono); font-size: 0.74rem; color: #83B89E; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 0.8rem;">
                            Direct Engagement
                        </div>
                        <h3 style="color: #FFFFFF; font-size: 1.35rem; margin-bottom: 0.8rem;">
                            Strict Quarterly Engagement Limit
                        </h3>
                        <p style="font-size: 0.92rem; color: #B5AFA2; line-height: 1.6; margin-bottom: 1.4rem;">
                            To maintain direct, principal-led advisory depth, Nexteck accepts a maximum of six engagements per calendar quarter.
                        </p>
                        <div style="font-family: var(--font-mono); font-size: 0.78rem; color: #9D9688; border-top: 1px solid #332F27; padding-top: 1rem;">
                            Direct Telephone: <a href="tel:+447879175585" style="color: #F6F3EC; text-decoration: underline;">+44 (0)78 7917 5585</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- @include('partials.footer') -->
</body>
</html>