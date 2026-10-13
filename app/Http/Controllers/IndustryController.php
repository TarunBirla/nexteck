<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * Get the full catalog of the 9 targeted industries with high-converting details,
     * SEO keywords, images, specifications, and related sub-services.
     */
    public static function getIndustries(): array
    {
        return [
            'oil-gas-petrochemicals' => [
                'title'       => 'Oil, Gas & Petrochemicals',
                'slug'        => 'oil-gas-petrochemicals',
                'tagline'     => 'Spare parts & OEM supply and sourcing for upstream, midstream and downstream operators.',
                'image'       => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1200&q=80',
                'short_desc'  => 'Comprehensive procurement, engineering supply chain, and digital inventory workflows for upstream rigs, midstream transmission pipelines, and downstream refineries.',
                'seo_title'   => 'Oil, Gas & Petrochemical Spare Parts OEM Sourcing UK | Nexteck',
                'meta_desc'   => 'Spare parts & OEM supply and sourcing for upstream, midstream and downstream oil, gas and petrochemical operators. UK and global procurement solutions.',
                'keywords'    => [
                    'Oil and Gas OEM spare parts sourcing UK',
                    'Petrochemical equipment procurement London',
                    'Upstream midstream downstream supply chain',
                    'Refinery valve and pump replacement parts',
                    'Pipeline integrity monitoring & custom software'
                ],
                'highlights'  => [
                    'API 6A / 6D compliant valves, actuators, and mechanical seals',
                    'Turbomachinery, compressor spares, and heat exchanger bundles',
                    'Explosion-proof instrumentation and ATEX-certified field devices',
                    'Traceable mill test certificates (EN 10204 3.1 / 3.2)',
                    'Predictive inventory management & digital ERP tracking for critical shut-down periods'
                ],
                'why_nexteck' => 'With extensive enterprise supply chain strategy experience, Nexteck eliminates downtime by vetting global OEM manufacturers, inspecting material specs, and deploying modern logistics software so critical spares arrive on schedule.'
            ],

            'mining-drilling' => [
                'title'       => 'Mining & Drilling',
                'slug'        => 'mining-drilling',
                'tagline'     => 'Rotating equipment and drilling consumables for demanding site conditions.',
                'image'       => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?auto=format&fit=crop&w=1200&q=80',
                'short_desc'  => 'Heavy-duty rotating equipment, wear-resistant drilling consumables, and robust supply chain automation engineered for underground and open-pit mining operations.',
                'seo_title'   => 'Mining & Drilling Rotating Equipment Consumables Sourcing | Nexteck',
                'meta_desc'   => 'Rotating equipment and drilling consumables for demanding site conditions. Heavy-duty mining supply chain and bespoke software solutions UK.',
                'keywords'    => [
                    'Mining equipment supply and sourcing UK',
                    'Drilling consumables and drill bits London',
                    'Rotating equipment for mining operations',
                    'Wear resistant heavy machinery parts',
                    'Mining logistics and fleet management software'
                ],
                'highlights'  => [
                    'Tungsten carbide drill bits, drill rods, and down-the-hole (DTH) hammers',
                    'Slurry pumps, crushers, vibrating screens, and conveyor belting spares',
                    'High-wear manganese liners and abrasion-resistant steel plates',
                    'Submersible dewatering pumps and heavy gearboxes',
                    'Automated re-order software logic to prevent costly drill-rig stoppage'
                ],
                'why_nexteck' => 'Mining sites operate in extreme environments where equipment failure means massive hourly losses. Nexteck combines vetted manufacturing sources with custom telemetry and tracking software to secure maximum uptime.'
            ],

            'industrial-process-plants' => [
                'title'       => 'Industrial & Process Plants',
                'slug'        => 'industrial-process-plants',
                'tagline'     => 'Tailored materials sourced to client drawings, samples and specification.',
                'image'       => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1200&q=80',
                'short_desc'  => 'Precision-engineered components, bespoke fabrication, and customized process plant materials manufactured strictly according to technical client drawings.',
                'seo_title'   => 'Industrial Process Plant Materials & Custom Fabrication Sourcing | Nexteck',
                'meta_desc'   => 'Tailored materials sourced to client drawings, samples and specification. Industrial and process plant engineering procurement UK.',
                'keywords'    => [
                    'Industrial process plant materials sourcing',
                    'Bespoke engineering fabrication client drawings',
                    'Process plant spare parts and piping UK',
                    'Custom CNC machining & casting London',
                    'Industrial automation process optimization'
                ],
                'highlights'  => [
                    'Custom CNC machined shafts, flanges, couplings, and pressure vessels',
                    'High-temperature alloys, stainless steel, and Hastelloy fabrication',
                    'Process flow control valves, steam traps, and flowmeters',
                    'Rapid reverse engineering from client physical samples or CAD files',
                    'Integrated quality assurance with CMM dimensional reports and NDT testing'
                ],
                'why_nexteck' => 'When off-the-shelf catalog parts cannot solve bespoke plant challenges, Nexteck bridges engineering design with precision global manufacturing, backed by strict UK QA audits and digital tracking.'
            ],

            'railways' => [
                'title'       => 'Railways',
                'slug'        => 'railways',
                'tagline'     => 'Rolling stock and infrastructure components sourced through pearlconrail.co.uk.',
                'image'       => 'https://images.unsplash.com/photo-1474487548417-781cb71495f3?auto=format&fit=crop&w=1200&q=80',
                'short_desc'  => 'Approved rolling stock mechanical spares, track infrastructure hardware, and railway systems integration delivered in strategic partnership with pearlconrail.co.uk.',
                'seo_title'   => 'Railway Rolling Stock & Infrastructure Components UK | pearlconrail.co.uk',
                'meta_desc'   => 'Rolling stock and infrastructure components sourced through pearlconrail.co.uk. Certified UK rail supply chain and custom software solutions.',
                'keywords'    => [
                    'Railway rolling stock components UK',
                    'Rail infrastructure sourcing pearlconrail.co.uk',
                    'Train braking and bogie spare parts London',
                    'Railway electrification and signaling supply',
                    'Rail asset tracking & maintenance software'
                ],
                'highlights'  => [
                    'Bogie components, wheelsets, axles, and suspension damping systems',
                    'Brake calipers, composite brake blocks, and pneumatic air systems',
                    'Track fastening systems, fishplates, switches, and overhead catenary parts',
                    'EN 45545 fire and smoke compliant interior materials and cabling',
                    'Direct supply integration via verified network partner pearlconrail.co.uk'
                ],
                'why_nexteck' => 'Rail transport demands zero-defect compliance and strict British/European rail certifications. In direct coordination with pearlconrail.co.uk, Nexteck provides audited supply lines and digital tracking for train operators and maintenance contractors.'
            ],

            'water-waste-water' => [
                'title'       => 'Water & Waste Water',
                'slug'        => 'water-waste-water',
                'tagline'     => 'Pumps, valves and treatment equipment for municipal and industrial plants.',
                'image'       => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=1200&q=80',
                'short_desc'  => 'High-efficiency fluid handling pumps, gate/butterfly valves, filtration membranes, and SCADA-integrated treatment machinery for water utility boards and industrial effluent plants.',
                'seo_title'   => 'Water & Waste Water Treatment Pumps Valves Equipment UK | Nexteck',
                'meta_desc'   => 'Pumps, valves and treatment equipment for municipal and industrial plants. Clean water and sewage infrastructure procurement UK.',
                'keywords'    => [
                    'Water and waste water treatment equipment UK',
                    'Municipal sewage pumps and valves London',
                    'Effluent treatment plant machinery sourcing',
                    'Water treatment membrane filtration systems',
                    'SCADA & IoT water management software'
                ],
                'highlights'  => [
                    'Centrifugal, progressive cavity, and submersible sewage pumps',
                    'Resilient seated gate valves, air release valves, and penstocks',
                    'Fine bubble diffusers, aerators, decanters, and sludge dewatering belt presses',
                    'Corrosion-resistant GRP / 316 stainless steel assemblies',
                    'Automated pump monitoring software to predict seal failure before spills occur'
                ],
                'why_nexteck' => 'Nexteck helps municipal water authorities and industrial effluent facilities upgrade ageing water treatment hardware while integrating automated telemetry and power-saving VFD controls.'
            ],

            'chemicals-lubricants' => [
                'title'       => 'Chemicals & Lubricants',
                'slug'        => 'chemicals-lubricants',
                'tagline'     => 'Vetted vendor relationships across specialty and bulk chemical supply.',
                'image'       => 'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=1200&q=80',
                'short_desc'  => 'Direct sourcing of certified industrial solvents, process additives, specialty greases, and high-performance synthetic lubricants from vetted chemical manufacturers.',
                'seo_title'   => 'Chemicals & Lubricants Bulk Specialty Supply Sourcing UK | Nexteck',
                'meta_desc'   => 'Vetted vendor relationships across specialty and bulk chemical supply. Industrial grade lubricants, solvents and process chemicals UK.',
                'keywords'    => [
                    'Industrial chemicals and lubricants supply UK',
                    'Specialty chemicals sourcing London',
                    'Bulk industrial lubricants and grease supplier',
                    'REACH compliant chemical procurement',
                    'Chemical batch traceability software'
                ],
                'highlights'  => [
                    'Synthetic gear oils, hydraulic fluids, compressor oils, and food-grade lubricants',
                    'Industrial process solvents, degreasers, acids, and surfactant compounds',
                    'Corrosion inhibitors, anti-foaming agents, and water conditioning biocides',
                    'Fully documented REACH compliance, Certificate of Analysis (COA), and SDS datasheets',
                    'Secure chemical batch traceability and dangerous goods compliance software'
                ],
                'why_nexteck' => 'Chemical supply requires rigorous compliance and supply resilience. Nexteck connects businesses to certified refineries and formulators, eliminating markups while safeguarding REACH and hazardous transport regulations.'
            ],

            'manufacturing-plants' => [
                'title'       => 'Manufacturing Plants',
                'slug'        => 'manufacturing-plants',
                'tagline'     => 'Consumables and capital equipment for continuous production lines.',
                'image'       => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1200&q=80',
                'short_desc'  => 'Production consumables, PLC automation components, cutting tools, and capital manufacturing machinery for automated high-volume production facilities.',
                'seo_title'   => 'Manufacturing Plants Consumables & Capital Equipment UK | Nexteck',
                'meta_desc'   => 'Consumables and capital equipment for continuous production lines. Smart factory automation and factory supply sourcing London.',
                'keywords'    => [
                    'Manufacturing plant equipment sourcing UK',
                    'Production line consumables London',
                    'Factory capital equipment procurement',
                    'Smart manufacturing and Industry 4.0 software',
                    'PLC servo drives automation spare parts'
                ],
                'highlights'  => [
                    'PLC modules, sensors, servo motors, pneumatic cylinders, and robotics spares',
                    'Carbide cutting inserts, tooling holders, abrasives, and welding consumables',
                    'Automated conveyor lines, packaging machinery, and carton sealers',
                    'Total Productive Maintenance (TPM) software workflows to track OEE',
                    'Vendor Consolidation: replace 20 scattered suppliers with one reliable partner'
                ],
                'why_nexteck' => 'Continuous manufacturing plants cannot afford unscheduled line halts. Nexteck optimizes plant operations through unified vendor management, fast spare parts delivery, and Industry 4.0 automation roadmaps.'
            ],

            'lab-medical-equipment' => [
                'title'       => 'Lab & Medical Equipment',
                'slug'        => 'lab-medical-equipment',
                'tagline'     => 'Instrumentation and controlled sourcing for UK medical device supply.',
                'image'       => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=1200&q=80',
                'short_desc'  => 'Certified clinical diagnostic instrumentation, laboratory testing consumables, and regulatory-controlled medical device supply chain solutions for the UK healthcare ecosystem.',
                'seo_title'   => 'Lab & Medical Equipment Controlled Sourcing UK | Nexteck',
                'meta_desc'   => 'Instrumentation and controlled sourcing for UK medical device supply. ISO 13485 compliant laboratory healthcare procurement.',
                'keywords'    => [
                    'Lab and medical equipment sourcing UK',
                    'UK medical device procurement London',
                    'Laboratory analytical instrumentation supply',
                    'ISO 13485 medical supply chain compliance',
                    'Clinical trial & healthcare lab software'
                ],
                'highlights'  => [
                    'Analytical spectrometers, centrifuges, autoclaves, and biosafety cabinets',
                    'Single-use sterile consumables, diagnostic reagents, and pipette tips',
                    'Hospital ward equipment, patient monitoring devices, and surgical stainless tools',
                    'ISO 13485, CE, and UKCA compliance validation with full batch lot tracking',
                    'Temperature-controlled cold-chain logistics monitoring software'
                ],
                'why_nexteck' => 'Medical device procurement requires zero compromise on hygiene, sterilization, and documentation. Nexteck guarantees audited supplier qualification, verifiable compliance records, and prompt UK delivery.'
            ],

            'low-cost-country-supply-and-sourcing' => [
                'title'       => 'Low Cost Country supply and sourcing',
                'slug'        => 'low-cost-country-supply-and-sourcing',
                'tagline'     => 'Bridging Asia Pacific and Indian manufacturing capacity into global supply.',
                'image'       => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80',
                'short_desc'  => 'Strategic cross-border sourcing that connects UK and European buyers with ISO-certified manufacturing hubs across India, Vietnam, and the Asia-Pacific region.',
                'seo_title'   => 'Low Cost Country Sourcing India Asia Pacific to UK | Nexteck Global',
                'meta_desc'   => 'Bridging Asia Pacific and Indian manufacturing capacity into global supply. Low cost country supply and sourcing with UK quality guarantees.',
                'keywords'    => [
                    'Low cost country sourcing UK',
                    'Indian manufacturing capacity global supply',
                    'Asia Pacific procurement for UK SMEs',
                    'Cross border supplier vetting quality audit',
                    'Global supply chain cost reduction software'
                ],
                'highlights'  => [
                    '30% to 55% reduction in production costs compared to Western domestic fabrication',
                    'Vetted Tier-1 and Tier-2 factories in India (Pune, Chennai, Gujarat) & Southeast Asia',
                    'Independent on-site factory inspections (Pre-production, DUPRO, Final Random PSI)',
                    'Complete customs, freight forwarding, and landed cost calculation software',
                    'Strict IP protection, bilateral NDA enforcement, and UK-enforceable supplier contracts'
                ],
                'why_nexteck' => 'Sourcing from low-cost countries often fails due to quality deviations or communication gaps. Nexteck acts as your on-the-ground engineering bridge — verifying factories, enforcing UK quality tolerances, and handling international shipping seamlessly.'
            ],

            'banking-fintech' => [
                'title'       => 'Banking & Fintech',
                'slug'        => 'banking-fintech',
                'tagline'     => 'Secure, compliant, automated systems for financial institutions & fintechs.',
                'image'       => '/images/A3.png',
                'short_desc'  => 'Enterprise-grade customer onboarding, automated AML/KYC workflows, fraud detection pipelines, and regulatory compliance reporting built for UK banks and emerging fintech scale-ups.',
                'seo_title'   => 'Banking & Fintech Custom Software Solutions London | Nexteck',
                'meta_desc'   => 'Customer onboarding, fraud-aware workflows, and reporting automation for banking and fintech firms in London and across the UK.',
                'keywords'    => [
                    'Banking and fintech software development London',
                    'KYC AML customer onboarding automation UK',
                    'Financial software architecture consulting',
                    'FCA compliant banking workflow integration',
                    'Fintech secure API systems London'
                ],
                'highlights'  => [
                    'Automated identity verification, AML screening, and friction-free customer onboarding',
                    'Real-time transaction monitoring and anomaly-detection rule engines',
                    'Secure core banking integrations (Open Banking, ISO 20022 compliant APIs)',
                    'Automated regulatory audit trail generation for FCA/PRA compliance',
                    'Custom investor and client portals with end-to-end data encryption'
                ],
                'why_nexteck' => 'With 25+ years of enterprise banking IT architecture experience, Mohammed Nasar and the Nexteck team design banking systems that balance strict institutional security with modern user speed.'
            ],

            'insurance' => [
                'title'       => 'Insurance',
                'slug'        => 'insurance',
                'tagline'     => 'From paper to pipeline: Claims triage, broker portals & AI document intelligence.',
                'image'       => '/images/A4.png',
                'short_desc'  => 'Transforming legacy policy administration, automating FNOL claims triage, and deploying AI document extraction for insurance syndicates, brokers, and MGAs.',
                'seo_title'   => 'Insurance Software & AI Claims Automation London | Nexteck',
                'meta_desc'   => 'Claims triage, broker systems, and AI document intelligence for insurance firms. Modernize legacy insurance operations in London & UK.',
                'keywords'    => [
                    'Insurance software development London',
                    'AI claims triage and processing UK',
                    'Insurance broker portal integration',
                    'Policy administration systems modernisation',
                    'Insurtech document intelligence automation'
                ],
                'highlights'  => [
                    'First Notice of Loss (FNOL) digital triage with instant validation',
                    'AI-powered document extraction for loss adjuster reports and policy schedules',
                    'Bespoke MGA and broker portals with real-time rating engine APIs',
                    'Automated bordereau reporting and ledger reconciliation',
                    'Legacy core migration roadmaps sequenced to avoid policy disruption'
                ],
                'why_nexteck' => 'Insurance firms lose thousands of hours manually re-keying risk submissions. Nexteck automates document pipelines so underwriters and claim handlers focus purely on high-margin decision making.'
            ],

            'manufacturing' => [
                'title'       => 'Manufacturing',
                'slug'        => 'manufacturing',
                'tagline'     => 'Connected operations: Production data, inventory sync & real-time shopfloor dashboards.',
                'image'       => '/images/A5.png',
                'short_desc'  => 'Bridging shopfloor OT machinery with top-floor ERP systems to deliver live Overall Equipment Effectiveness (OEE), automated inventory replenishment, and quality defect tracking.',
                'seo_title'   => 'Manufacturing Operations & ERP Software London | Nexteck',
                'meta_desc'   => 'Production data, inventory sync, and quality tracking on one unified dashboard. Smart factory and manufacturing IT roadmaps UK.',
                'keywords'    => [
                    'Manufacturing software development UK',
                    'Smart factory shopfloor integration London',
                    'Production tracking and OEE software',
                    'ERP inventory synchronization manufacturing',
                    'Automated quality control reporting UK'
                ],
                'highlights'  => [
                    'Unified dashboard connecting shopfloor PLCs, machines, and management ERP',
                    'Real-time production scheduling and bottleneck alert tracking',
                    'Barcoding, RFID, and automated warehouse inventory sync',
                    'Predictive machine maintenance logs to prevent catastrophic line stoppages',
                    'Elimination of clipboard inspections with digital tablet QA signoffs'
                ],
                'why_nexteck' => 'Nexteck eliminates the disconnect between physical assembly lines and back-office financial ledgers, ensuring production metrics are live, accurate, and completely paperless.'
            ],

            'education' => [
                'title'       => 'Education',
                'slug'        => 'education',
                'tagline'     => 'Learning that scales: Student journeys, admin automation & knowledge systems.',
                'image'       => '/images/A6.png',
                'short_desc'  => 'Digital student enrolment pipelines, automated timetable scheduling, secure LMS integrations, and institutional knowledge bases for universities, academies, and edtech providers.',
                'seo_title'   => 'Education Management & EdTech Software London | Nexteck',
                'meta_desc'   => 'Student journeys, admin automation, LMS and knowledge systems for universities and educational institutions across the UK.',
                'keywords'    => [
                    'Education management software London',
                    'Student enrollment onboarding automation UK',
                    'Edtech custom platform development',
                    'Learning management system LMS integration',
                    'School and university workflow software'
                ],
                'highlights'  => [
                    'End-to-end student recruitment and digital admissions management',
                    'Automated tuition fee invoicing, payment gateway, and finance reconciliation',
                    'Custom LMS integrations (Canvas, Moodle, bespoke SCORM players)',
                    'Automated attendance tracking and early-intervention retention alerts',
                    'Centralized faculty SOP and academic curriculum documentation'
                ],
                'why_nexteck' => 'Education administrators spend weeks on manual enrolment and exam scheduling. Nexteck streamlines academic administration into seamless digital student journeys.'
            ],

            'e-commerce' => [
                'title'       => 'E-commerce',
                'slug'        => 'e-commerce',
                'tagline'     => 'Fulfilment without chaos: Order-to-ledger automation & customer service AI.',
                'image'       => '/images/A7.png',
                'short_desc'  => 'Multi-channel inventory synchronization, automated warehouse picking logic, dynamic carrier shipping integrations, and 24/7 AI-driven order resolution for high-growth e-commerce brands.',
                'seo_title'   => 'E-commerce Automation & Custom Software London | Nexteck',
                'meta_desc'   => 'Order-to-ledger automation, stock sync, and customer service AI for high-growth e-commerce brands in the UK and worldwide.',
                'keywords'    => [
                    'Ecommerce software solutions London',
                    'Order to ledger automation UK',
                    'Multi channel inventory synchronization',
                    'Warehouse picking fulfillment integration',
                    'AI customer service chat e-commerce'
                ],
                'highlights'  => [
                    'Automated sync across Shopify, Amazon, eBay, and central accounting ERP',
                    'Intelligent order routing to 3PL warehouses based on lowest shipping cost',
                    'Real-time stock alerts to prevent overselling and backorder delays',
                    'AI chatbot handling 70% of "Where is my order?" (WISMO) support queries',
                    'Automated returns processing and customer refund management'
                ],
                'why_nexteck' => 'As order volume scales, manual spreadsheets break down. Nexteck builds bulletproof order-to-ledger pipelines that let founders fulfill 10× more orders with the same headcount.'
            ],

            'professional-services' => [
                'title'       => 'Professional Services',
                'slug'        => 'professional-services',
                'tagline'     => 'Clients served brilliantly: Response-time SLAs, AI-drafted replies & escalation inboxes.',
                'image'       => '/images/A8.png',
                'short_desc'  => 'Client intake automation, billable time tracking, AI-assisted proposal drafting, and centralized triage inboxes for consultancies, legal firms, and accounting practices.',
                'seo_title'   => 'Professional Services Practice Management Software | Nexteck',
                'meta_desc'   => 'Response-time SLAs, AI-drafted replies, escalation-only inboxes and client intake automation for UK professional service practices.',
                'keywords'    => [
                    'Professional services software London',
                    'Client onboarding intake automation UK',
                    'AI assisted proposal drafting consultancies',
                    'SLA tracking and escalation management',
                    'Bespoke practice management portal London'
                ],
                'highlights'  => [
                    'Automated client onboarding, engagement letter generation, and digital e-signatures',
                    'Shared inbox triage routing high-value tickets directly to partners',
                    'AI-assisted drafting of routine client queries and weekly status updates',
                    'Integrated project milestone, billing, and WIP accounting synchronization',
                    'Secure client document upload portals with automated compliance verification'
                ],
                'why_nexteck' => 'Nexteck returns 10+ partner hours every week by automating routine administrative communication, ensuring firm clients enjoy lightning-fast response times.'
            ],

        ];
    }

    /**
     * Display the listing page of all 9 industries.
     */
    public function index()
    {
        $industries = self::getIndustries();
        return view('industries.index', compact('industries'));
    }

    /**
     * Display a single industry detail page with SEO metadata and related industries.
     */
    public function show($slug)
    {
        $industries = self::getIndustries();

        if (!isset($industries[$slug])) {
            abort(404);
        }

        $industry = $industries[$slug];

        // Pick related industries excluding current
        $related = array_filter($industries, fn($key) => $key !== $slug, ARRAY_FILTER_USE_KEY);
        $related = array_slice($related, 0, 3, true);

        return view('industries.show', compact('industry', 'related'));
    }
}
