<?php

namespace App\Http\Controllers;

use App\Models\SmeToolkit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class ToolkitController extends Controller
{
    public static function ensureTableExists(): void
    {
        if (!Schema::hasTable('sme_toolkits')) {
            Artisan::call('migrate', ['--force' => true]);
        }
    }
    /**
     * Get the default template structure matching the Nexteck SME Strategy & Tracking Toolkit XLSX.
     */
    public static function getDefaultTemplate(): array
    {
        return [
            'overview' => [
                ['tab' => 'Client Diagnostic', 'purpose' => 'A fixed checklist of the 8 pain points that show up most often across SME clients. Use it on the first discovery call to work out which apply and how severely.', 'fill' => 'Yellow cells: Present? (Y/N), Severity, notes'],
                ['tab' => 'Industry Benchmark', 'purpose' => 'Compare the client against 3-5 recognised leaders in their sector across 5 lenses, and stage the actions to close each gap.', 'fill' => 'Yellow cells: Leader Example, What They Do, Gap, Action, Owner, Target Date'],
                ['tab' => 'Competitor Tracker', 'purpose' => 'Map direct competitors to find category norms vs. genuine whitespace to differentiate in.', 'fill' => 'Yellow cells: all competitor and analysis columns'],
                ['tab' => 'AI & IT Opportunity Log', 'purpose' => 'Turn every owner-dependent process into an automation/delegation opportunity, scored by impact and urgency.', 'fill' => 'Yellow cells: Process, Manual Effort, Owner Involvement, Solution, Cost, Impact, Urgency'],
                ['tab' => 'SOP & Delegation Register', 'purpose' => "Track which recurring tasks are documented, who they're delegated to, and how automated they are.", 'fill' => 'Yellow cells: Task, Frequency, Current Owner, Delegate To, Automation Level, Target Date'],
                ['tab' => 'KPI Dashboard', 'purpose' => "Monthly targets vs. actuals across Sales, Marketing, Finance, Ops and Customer — the owner's weekly review sheet.", 'fill' => 'Yellow cells: Target and Actual columns'],
                ['tab' => 'Tool Stack', 'purpose' => 'Recommended tools by business function and budget tier (Starter / Growth / Established).', 'fill' => 'Reference only — adjust to client budget'],
            ],
            'diagnostic' => [
                [
                    'pain_point' => 'Manual processes taking too much time',
                    'symptoms'   => 'Staff spend hours a week on tasks like data entry, invoicing, or scheduling that follow the same steps every time.',
                    'question'   => "Which tasks do you or your team repeat every week that feel like they shouldn't need a person?",
                    'present'    => '',
                    'severity'   => '',
                    'response'   => 'Workflow automation (Zapier/Make), templated documents, AI-assisted drafting.',
                    'feeds_into' => 'AI & IT Opportunity Log',
                    'notes'      => '',
                ],
                [
                    'pain_point' => 'Disconnected systems and data',
                    'symptoms'   => "The same customer or order information is re-typed into more than one tool; there's no single source of truth; reports are built by hand from several exports.",
                    'question'   => 'How many different tools do you use to run the business day to day, and do they talk to each other?',
                    'present'    => '',
                    'severity'   => '',
                    'response'   => 'System integration, a central CRM/database, one unified reporting dashboard.',
                    'feeds_into' => 'AI & IT Opportunity Log, Tool Stack',
                    'notes'      => '',
                ],
                [
                    'pain_point' => 'Difficulty scaling operations',
                    'symptoms'   => "Quality drops or the owner becomes the bottleneck as volume grows; hiring more people doesn't increase output proportionally.",
                    'question'   => "What's the first thing that breaks if you had twice the customers or orders next month?",
                    'present'    => '',
                    'severity'   => '',
                    'response'   => 'Documented SOPs, automation of high-volume tasks, self-serve systems members/customers can use directly.',
                    'feeds_into' => 'SOP & Delegation Register, AI & IT Opportunity Log',
                    'notes'      => '',
                ],
                [
                    'pain_point' => 'Repetitive administrative work',
                    'symptoms'   => 'The owner or staff are doing invoicing, scheduling, data entry, or follow-up emails manually, none of which need real judgement.',
                    'question'   => "What admin tasks eat up your week that don't actually need your judgement?",
                    'present'    => '',
                    'severity'   => '',
                    'response'   => 'Automation first, delegation second; AI-drafted responses and documents for a human to approve.',
                    'feeds_into' => 'SOP & Delegation Register',
                    'notes'      => '',
                ],
                [
                    'pain_point' => 'Uncertainty about where AI can genuinely add value',
                    'symptoms'   => "The owner has heard AI could help but isn't sure what applies to their business, and is wary of chasing hype with no return.",
                    'question'   => "Where do you think AI could genuinely help here, and where do you suspect it's just hype for your business?",
                    'present'    => '',
                    'severity'   => '',
                    'response'   => "A process-by-process AI opportunity audit, prioritised by impact x urgency, not by what's trending.",
                    'feeds_into' => 'AI & IT Opportunity Log',
                    'notes'      => '',
                ],
                [
                    'pain_point' => 'Outdated technology',
                    'symptoms'   => 'Legacy or unsupported software, slow systems, security risk, staff building workarounds instead of using the tool properly.',
                    'question'   => 'Is there a tool everyone in the business complains about, or quietly works around?',
                    'present'    => '',
                    'severity'   => '',
                    'response'   => 'A phased modernisation roadmap and migration plan, sequenced by risk and disruption.',
                    'feeds_into' => 'Tool Stack, AI & IT Opportunity Log',
                    'notes'      => '',
                ],
                [
                    'pain_point' => 'Multiple systems that do not communicate properly',
                    'symptoms'   => 'Manual exports and imports between tools, duplicate records, and errors from re-keying the same data twice.',
                    'question'   => 'Where do you currently copy and paste data from one system into another?',
                    'present'    => '',
                    'severity'   => '',
                    'response'   => 'An integration layer (API/Zapier/Make) so systems share one record instead of many.',
                    'feeds_into' => 'AI & IT Opportunity Log, Tool Stack',
                    'notes'      => '',
                ],
                [
                    'pain_point' => 'A business idea that cannot be delivered effectively using off-the-shelf software',
                    'symptoms'   => "The business model doesn't fit any existing SaaS tool; the team has patched together spreadsheets and workarounds; growth is capped by what the tools allow.",
                    'question'   => 'Is there a part of how you want to run the business that no existing software actually supports?',
                    'present'    => '',
                    'severity'   => '',
                    'response'   => 'Custom software development — this is where Nexteck builds rather than configures.',
                    'feeds_into' => 'AI & IT Opportunity Log, Tool Stack',
                    'notes'      => '',
                ],
            ],
            'benchmark' => [
                [
                    'lens'         => 'Customer experience',
                    'leader'       => 'e.g. [Named leader]',
                    'what_they_do' => 'e.g. 24/7 AI chat concierge + same-day response',
                    'client_score' => 2,
                    'leader_score' => 5,
                    'gap'          => 3,
                    'action'       => 'e.g. Launch WhatsApp/website FAQ bot, then booking, then personalisation',
                    'priority'     => 'H',
                    'owner'        => '',
                    'target_date'  => '',
                    'status'       => 'Not started',
                ],
                [
                    'lens'         => 'Technology & automation',
                    'leader'       => '',
                    'what_they_do' => '',
                    'client_score' => '',
                    'leader_score' => '',
                    'gap'          => 0,
                    'action'       => '',
                    'priority'     => '',
                    'owner'        => '',
                    'target_date'  => '',
                    'status'       => 'Not started',
                ],
                [
                    'lens'         => 'Marketing & brand',
                    'leader'       => '',
                    'what_they_do' => '',
                    'client_score' => '',
                    'leader_score' => '',
                    'gap'          => 0,
                    'action'       => '',
                    'priority'     => '',
                    'owner'        => '',
                    'target_date'  => '',
                    'status'       => 'Not started',
                ],
                [
                    'lens'         => 'Operations',
                    'leader'       => '',
                    'what_they_do' => '',
                    'client_score' => '',
                    'leader_score' => '',
                    'gap'          => 0,
                    'action'       => '',
                    'priority'     => '',
                    'owner'        => '',
                    'target_date'  => '',
                    'status'       => 'Not started',
                ],
                [
                    'lens'         => 'Talent & org structure',
                    'leader'       => '',
                    'what_they_do' => '',
                    'client_score' => '',
                    'leader_score' => '',
                    'gap'          => 0,
                    'action'       => '',
                    'priority'     => '',
                    'owner'        => '',
                    'target_date'  => '',
                    'status'       => 'Not started',
                ],
            ],
            'competitor' => [
                [
                    'competitor'    => '[Competitor name]',
                    'positioning'   => 'e.g. Budget/local',
                    'pricing'       => '£',
                    'strength'      => 'Fast turnaround',
                    'weakness'      => 'No online booking',
                    'channels'      => 'Facebook, referrals',
                    'category_norm' => 'N',
                    'whitespace'    => 'Offer instant online booking with live pricing',
                    'priority'      => 'H',
                ],
                [
                    'competitor'    => '',
                    'positioning'   => '',
                    'pricing'       => '',
                    'strength'      => '',
                    'weakness'      => '',
                    'channels'      => '',
                    'category_norm' => '',
                    'whitespace'    => '',
                    'priority'      => '',
                ],
                [
                    'competitor'    => '',
                    'positioning'   => '',
                    'pricing'       => '',
                    'strength'      => '',
                    'weakness'      => '',
                    'channels'      => '',
                    'category_norm' => '',
                    'whitespace'    => '',
                    'priority'      => '',
                ],
            ],
            'opportunity' => [
                [
                    'process'           => 'e.g. Answering sales enquiries',
                    'manual_effort'     => 8,
                    'owner_involvement' => 'H',
                    'solution'          => 'CRM + AI lead-qualification chatbot',
                    'autonomy_gain'     => 'Owner only handles qualified, high-value leads',
                    'est_cost'          => 45,
                    'impact'            => 5,
                    'urgency'           => 4,
                    'priority_score'    => 20,
                    'status'            => 'Not started',
                ],
                [
                    'process'           => 'e.g. Re-keying data between booking tool and accounting software',
                    'manual_effort'     => 5,
                    'owner_involvement' => 'M',
                    'solution'          => 'Zapier/Make integration linking the two systems',
                    'autonomy_gain'     => 'No one manually re-types orders into the ledger',
                    'est_cost'          => 25,
                    'impact'            => 4,
                    'urgency'           => 5,
                    'priority_score'    => 20,
                    'status'            => 'Not started',
                ],
                [
                    'process'           => 'e.g. Running a workflow no off-the-shelf tool supports (custom booking/member logic)',
                    'manual_effort'     => 10,
                    'owner_involvement' => 'H',
                    'solution'          => 'Custom-built module (Nexteck development)',
                    'autonomy_gain'     => 'Owner stops managing it manually in spreadsheets',
                    'est_cost'          => 350,
                    'impact'            => 5,
                    'urgency'           => 3,
                    'priority_score'    => 15,
                    'status'            => 'Not started',
                ],
                [
                    'process'           => '',
                    'manual_effort'     => '',
                    'owner_involvement' => '',
                    'solution'          => '',
                    'autonomy_gain'     => '',
                    'est_cost'          => '',
                    'impact'            => '',
                    'urgency'           => '',
                    'priority_score'    => 0,
                    'status'            => 'Not started',
                ],
                [
                    'process'           => '',
                    'manual_effort'     => '',
                    'owner_involvement' => '',
                    'solution'          => '',
                    'autonomy_gain'     => '',
                    'est_cost'          => '',
                    'impact'            => '',
                    'urgency'           => '',
                    'priority_score'    => 0,
                    'status'            => 'Not started',
                ],
            ],
            'sop' => [
                [
                    'task'             => 'e.g. Weekly invoicing',
                    'frequency'        => 'Weekly',
                    'current_owner'    => 'Owner',
                    'sop_documented'   => 'N',
                    'delegate_to'      => 'Bookkeeper',
                    'automation_level' => 'Partial (auto-generate, manual send)',
                    'target_date'      => '',
                    'status'           => 'Not started',
                ],
                [
                    'task'             => '',
                    'frequency'        => '',
                    'current_owner'    => '',
                    'sop_documented'   => '',
                    'delegate_to'      => '',
                    'automation_level' => '',
                    'target_date'      => '',
                    'status'           => 'Not started',
                ],
                [
                    'task'             => '',
                    'frequency'        => '',
                    'current_owner'    => '',
                    'sop_documented'   => '',
                    'delegate_to'      => '',
                    'automation_level' => '',
                    'target_date'      => '',
                    'status'           => 'Not started',
                ],
            ],
            'kpi' => [
                [
                    'category'     => 'Sales',
                    'kpi'          => 'New leads this month',
                    'target'       => 40,
                    'actual'       => 27,
                    'variance'     => -13,
                    'variance_pct' => -32.5,
                    'trend_note'   => '',
                ],
                [
                    'category'     => 'Sales',
                    'kpi'          => 'Conversion rate',
                    'target'       => 0.2,
                    'actual'       => 0.16,
                    'variance'     => -0.04,
                    'variance_pct' => -20.0,
                    'trend_note'   => '',
                ],
                [
                    'category'     => 'Marketing',
                    'kpi'          => 'Website visitors',
                    'target'       => 1200,
                    'actual'       => 950,
                    'variance'     => -250,
                    'variance_pct' => -20.8,
                    'trend_note'   => '',
                ],
                [
                    'category'     => 'Finance',
                    'kpi'          => 'Cash collected on time (%)',
                    'target'       => 0.9,
                    'actual'       => 0.78,
                    'variance'     => -0.12,
                    'variance_pct' => -13.3,
                    'trend_note'   => '',
                ],
                [
                    'category'     => 'Operations',
                    'kpi'          => 'On-time delivery (%)',
                    'target'       => 0.95,
                    'actual'       => 0.88,
                    'variance'     => -0.07,
                    'variance_pct' => -7.4,
                    'trend_note'   => '',
                ],
                [
                    'category'     => 'Customer',
                    'kpi'          => 'Response time (hrs)',
                    'target'       => 4,
                    'actual'       => 9,
                    'variance'     => 5,
                    'variance_pct' => 125.0,
                    'trend_note'   => '',
                ],
            ],
            'tool_stack' => [
                [
                    'function'    => 'CRM / Sales',
                    'starter'     => 'HubSpot Free, Pipedrive',
                    'growth'      => 'HubSpot Starter, Zoho CRM',
                    'established' => 'Salesforce, HubSpot Pro',
                    'notes'       => 'Central record of every lead and conversation',
                ],
                [
                    'function'    => 'Marketing',
                    'starter'     => 'Canva, Buffer, Meta Business Suite',
                    'growth'      => 'AI copy tools (e.g. Claude), Mailchimp',
                    'established' => 'HubSpot Marketing Hub',
                    'notes'       => 'Content calendar + AI drafting reduces owner writing time',
                ],
                [
                    'function'    => 'Finance',
                    'starter'     => 'QuickBooks, Xero (starter tier)',
                    'growth'      => 'Xero + automated invoicing/reminders',
                    'established' => 'Xero/NetSuite + dedicated bookkeeper',
                    'notes'       => 'Automate invoicing and payment chasing first',
                ],
                [
                    'function'    => 'Operations / workflow',
                    'starter'     => 'Zapier free/starter, Trello',
                    'growth'      => 'Make.com, Notion, Zapier Pro',
                    'established' => 'Custom workflow platform (Nexteck build)',
                    'notes'       => 'Connects the other tools so tasks run without the owner',
                ],
                [
                    'function'    => 'Customer service',
                    'starter'     => 'WhatsApp Business, shared inbox',
                    'growth'      => 'Helpdesk (Freshdesk, Zendesk) + AI drafts',
                    'established' => 'Full helpdesk + AI triage',
                    'notes'       => 'Owner only sees escalations',
                ],
                [
                    'function'    => 'Reporting / BI',
                    'starter'     => 'Google Sheets dashboard',
                    'growth'      => 'Looker Studio linked to CRM/finance',
                    'established' => 'Power BI / custom dashboard (Nexteck build)',
                    'notes'       => 'Feeds the KPI Dashboard tab automatically once connected',
                ],
                [
                    'function'    => 'Knowledge / SOPs',
                    'starter'     => 'Google Docs, Notion free',
                    'growth'      => 'Notion team wiki',
                    'established' => 'Dedicated LMS/knowledge base',
                    'notes'       => 'Where the SOP register in this workbook should live long-term',
                ],
            ],
        ];
    }

    /**
     * Show the public SME Strategy & Tracking Toolkit page.
     */
    public function index()
    {
        $template = self::getDefaultTemplate();
        return view('toolkit.index', compact('template'));
    }

    /**
     * Store a client's submitted SME Strategy & Tracking Toolkit.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name'      => 'required|string|max:255',
            'company_name'     => 'required|string|max:255',
            'client_email'     => 'required|email|max:255',
            'phone'            => 'nullable|string|max:50',
            'diagnostic_data'  => 'nullable|array',
            'benchmark_data'   => 'nullable|array',
            'competitor_data'  => 'nullable|array',
            'opportunity_data' => 'nullable|array',
            'sop_data'         => 'nullable|array',
            'kpi_data'         => 'nullable|array',
        ]);

        // Recompute formulas server-side for Benchmark, Opportunity, and KPI tabs
        if (!empty($validated['benchmark_data'])) {
            foreach ($validated['benchmark_data'] as &$row) {
                $c = is_numeric($row['client_score'] ?? null) ? (float) $row['client_score'] : 0;
                $l = is_numeric($row['leader_score'] ?? null) ? (float) $row['leader_score'] : 0;
                $row['gap'] = ($c > 0 || $l > 0) ? ($l - $c) : 0;
            }
        }

        if (!empty($validated['opportunity_data'])) {
            foreach ($validated['opportunity_data'] as &$row) {
                $impact  = is_numeric($row['impact'] ?? null) ? (float) $row['impact'] : 0;
                $urgency = is_numeric($row['urgency'] ?? null) ? (float) $row['urgency'] : 0;
                $row['priority_score'] = $impact * $urgency;
            }
        }

        if (!empty($validated['kpi_data'])) {
            foreach ($validated['kpi_data'] as &$row) {
                $target = is_numeric($row['target'] ?? null) ? (float) $row['target'] : 0;
                $actual = is_numeric($row['actual'] ?? null) ? (float) $row['actual'] : 0;
                $variance = $actual - $target;
                $row['variance'] = round($variance, 4);
                $row['variance_pct'] = $target != 0 ? round(($variance / $target) * 100, 1) : 0;
            }
        }

        $validated['status'] = 'Submitted';

        self::ensureTableExists();
        $toolkit = SmeToolkit::create($validated);

        return redirect()
            ->route('toolkit.index')
            ->with('success', 'Thank you, ' . $toolkit->client_name . '! Your SME Strategy & Tracking Toolkit for ' . $toolkit->company_name . ' has been saved and submitted to the Nexteck team.');
    }
}
