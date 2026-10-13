<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ToolkitController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminIndustryController;
use App\Http\Controllers\Admin\AdminToolkitController;
use App\Http\Controllers\Admin\AdminAnalyticsController;
use App\Models\User;
use App\Models\Blog;
use App\Models\Industry;
use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Page Route (Shows Top 6 Industries by sort_order)
Route::get('/', function () {
    if (Schema::hasTable('industries') && Industry::count() === 0) {
        (new \Database\Seeders\IndustrySeeder())->run();
    }
    $homeIndustries = Schema::hasTable('industries')
        ? Industry::where('is_active', true)->orderBy('sort_order', 'asc')->orderBy('id', 'asc')->take(6)->get()
        : collect();
    return view('home', compact('homeIndustries'));
})->name('home');

Route::get('/home', function () {
    return redirect()->route('home');
});

// Landing Page Route
Route::get('/landing', function () {
    return view('landing');
})->name('landing');

// Form Submission Route
Route::post('/submit-strategy-call', [LeadController::class, 'submitStrategyCall'])->name('lead.submit');

// Frontend Blog Routes
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');

// Frontend Industry Routes
Route::get('/industries', [IndustryController::class, 'index'])->name('industries.index');
Route::get('/industries/{slug}', [IndustryController::class, 'show'])->name('industries.show');

// Frontend SME Strategy & Tracking Toolkit Routes
Route::get('/toolkit', [ToolkitController::class, 'index'])->name('toolkit.index');
Route::post('/toolkit', [ToolkitController::class, 'store'])->name('toolkit.store');

// Admin Guest Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Protected Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    
    // Blog Management
    Route::get('/blogs', [AdminBlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/create', [AdminBlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs', [AdminBlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{id}/edit', [AdminBlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [AdminBlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [AdminBlogController::class, 'destroy'])->name('blogs.destroy');

    // Dynamic Industries (Sectors) Management (10 per page)
    Route::resource('industries', AdminIndustryController::class);

    // Lead Form Submissions
    Route::get('/leads', [AdminDashboardController::class, 'leads'])->name('leads.index');

    // SME Strategy & Tracking Toolkit Submissions
    Route::get('/toolkits', [AdminToolkitController::class, 'index'])->name('toolkits.index');
    Route::get('/toolkits/{id}', [AdminToolkitController::class, 'show'])->name('toolkits.show');
    Route::put('/toolkits/{id}', [AdminToolkitController::class, 'update'])->name('toolkits.update');
    Route::delete('/toolkits/{id}', [AdminToolkitController::class, 'destroy'])->name('toolkits.destroy');

    // Website Visitor Analytics & IP Tracker
    Route::get('/analytics', [AdminAnalyticsController::class, 'index'])->name('analytics.index');
    Route::delete('/analytics/{id}', [AdminAnalyticsController::class, 'destroy'])->name('analytics.destroy');
});

// Dynamic XML Sitemap Route for SEO
Route::get('/sitemap.xml', function () {
    $blogs = Blog::where('is_active', true)->latest()->get();
    $content = view('sitemap', compact('blogs'));
    return response($content, 200)->header('Content-Type', 'text/xml');
});

// LLM / AI Search Discovery File (ChatGPT, Perplexity, Claude, Gemini)
Route::get('/llms.txt', function () {
    $path = public_path('llms.txt');
    if (file_exists($path)) {
        return response(file_get_contents($path), 200)->header('Content-Type', 'text/plain; charset=UTF-8');
    }
    return abort(404);
});

// Temporary Setup Route (hit via browser after server start to setup DB tables & Admin user)
Route::get('/run-migrations', function () {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return response()->json([
            'status'  => 'success',
            'message' => 'Database migration executed successfully!',
            'output'  => Artisan::output()
        ]);
    } catch (\Throwable $e) {
        return response()->json([
            'status'  => 'error',
            'message' => 'Migration failed: ' . $e->getMessage()
        ], 500);
    }
});

Route::get('/setup-industries-table', function () {
    try {
        Artisan::call('migrate', ['--force' => true]);
        (new \Database\Seeders\IndustrySeeder())->run();
        return response()->json([
            'status'  => 'success',
            'message' => 'Industries table created and all 15 sectors seeded successfully!',
            'count'   => \App\Models\Industry::count()
        ]);
    } catch (\Throwable $e) {
        return response()->json([
            'status'  => 'error',
            'message' => 'Failed: ' . $e->getMessage()
        ], 500);
    }
});

Route::get('/setup-admin-blog', function () {
    try {
        // Run migration
        Artisan::call('migrate', ['--force' => true]);

        // Create or update Admin User
        $admin = User::updateOrCreate(
            ['email' => 'admin@nexteck.co.uk'],
            [
                'name'     => 'Nexteck Admin',
                'password' => Hash::make('nexteck@123'),
            ]
        );

        // Seed or update the 5 high-ranking industry & software blogs with sort_order 1 to 5
        $blogsToSeed = [
            [
                'title'       => 'Spare Parts & OEM Sourcing in Oil, Gas & Petrochemicals: Eliminating Plant Shutdowns',
                'slug'        => 'spare-parts-oem-sourcing-oil-gas-petrochemicals',
                'sort_order'  => 1,
                'is_active'   => true,
                'description' => "Unplanned downtime in upstream drilling rigs, midstream compressor stations, and downstream refineries costs operators thousands of pounds per hour. 

In this comprehensive guide, Nexteck explains how vetted OEM supply relationships, API 6A/6D compliance, and digital predictive inventory workflows eliminate critical spare parts bottlenecks across the UK and international energy sector.

### Key Procurement Topics Covered:
1. Sourcing API 6D pipeline valves, high-pressure actuators, and mechanical seals.
2. Heat exchanger re-tubing bundles and turbomachinery rotor spares.
3. Traceable EN 10204 3.1/3.2 mill test certifications and hazardous ATEX compliance.
4. Integrating IoT and ERP alerts to order long-lead items 90 days before scheduled turnarounds.",
            ],
            [
                'title'       => 'Rotating Equipment & Drilling Consumables: Maximising Uptime in Mining & Industrial Plants',
                'slug'        => 'rotating-equipment-drilling-consumables-mining-industrial-plants',
                'sort_order'  => 2,
                'is_active'   => true,
                'description' => "Demanding site conditions in mining, quarrying, and continuous processing plants put extreme mechanical stress on rotating equipment and consumables. 

Discover how Nexteck sources abrasion-resistant manganese liners, tungsten carbide drill bits, slurry pumps, and bespoke machined components fabricated to exact client engineering drawings and CAD samples.

### Strategic Sourcing Highlights:
- Slurry pumps, gearboxes, and heavy conveyor drive systems for abrasive open-pit environments.
- Bespoke CNC machining from customer drawings when off-the-shelf catalog spares are discontinued.
- Reverse engineering legacy equipment using 3D coordinate measuring machines (CMM).
- Digital re-order thresholds that keep maintenance teams fully stocked without capital bloat.",
            ],
            [
                'title'       => 'UK Railway Rolling Stock & Track Sourcing: The pearlconrail.co.uk Supply Advantage',
                'slug'        => 'railway-rolling-stock-track-sourcing-pearlconrail-advantage',
                'sort_order'  => 3,
                'is_active'   => true,
                'description' => "Railway operations demand flawless safety compliance, EN 45545 fire integrity, and rigorous audit standards. 

In strategic partnership with pearlconrail.co.uk, Nexteck provides UK train operators, rolling stock leasing companies (ROSCOs), and track renewal contractors with direct access to vetted European and global rail component manufacturers.

### Core Rail Engineering Scope:
- Bogie assemblies, wheelsets, solid forged axles, and hydraulic suspension dampers.
- High-performance brake calipers, composite brake pads, and pneumatic compressor spares.
- Track fasteners, rail fishplates, catenary overhead wiring, and signalling hardware.
- Real-time rolling stock condition monitoring and predictive maintenance software.",
            ],
            [
                'title'       => 'Low-Cost Country Sourcing: Bridging India & Asia-Pacific Manufacturing into UK Supply Chains',
                'slug'        => 'low-cost-country-sourcing-india-asia-pacific-manufacturing',
                'sort_order'  => 4,
                'is_active'   => true,
                'description' => "Western SMEs are caught between rising domestic fabrication costs and the logistical risks of overseas procurement. 

Bridging vetted Tier-1 manufacturing capacity across India (Pune, Chennai, Gujarat) and Southeast Asia into the UK delivers 30% to 55% direct cost savings while upholding British engineering tolerances.

### How Nexteck De-Risks Global Procurement:
1. Strict bilateral NDAs, IP protection, and UK-enforceable commercial contracts.
2. Independent on-site factory inspections (Pre-production, In-Process DUPRO, and Final Random PSI).
3. Landed cost calculations including freight, import duties, and port customs clearance.
4. Vendor consolidation: replacing multiple fragmented suppliers with one audited UK bridge.",
            ],
            [
                'title'       => 'Smart Factory & Clean Water Automation: Pumps, Valves, Chemicals & Industry 4.0',
                'slug'        => 'smart-factory-clean-water-automation-pumps-valves-chemicals',
                'sort_order'  => 5,
                'is_active'   => true,
                'description' => "Continuous manufacturing plants, municipal clean water works, and effluent treatment facilities are accelerating the convergence of physical engineering and digital automation. 

Learn how combining high-efficiency pumps, resilient gate valves, REACH-compliant industrial chemicals, and custom SCADA telemetry returns over 10+ hours of operational capacity to plant managers every week.

### Practical Implementation Scope:
- Centrifugal and progressive cavity wastewater pumps with variable frequency drives (VFD).
- Specialty greases, synthetic compressor oils, and industrial solvents from audited formulators.
- PLC automation modules, servo robotics, and automated conveyor lines.
- End-to-end Nexteck SME IT Audit: eliminating manual re-keying and spreadsheet bottlenecks.",
            ],
        ];

        foreach ($blogsToSeed as $bData) {
            Blog::updateOrCreate(
                ['slug' => $bData['slug']],
                $bData
            );
        }

        return response()->json([
            'status'      => 'success',
            'message'     => 'Setup completed successfully!',
            'admin_email' => 'admin@nexteck.co.uk',
            'admin_pass'  => 'nexteck@123',
            'note'        => 'Please change the default password after logging into /admin/login'
        ]);
    } catch (\Throwable $e) {
        return response()->json([
            'status'  => 'error',
            'message' => 'Setup failed: ' . $e->getMessage()
        ], 500);
    }
});

// Live Server Route to Create SME Toolkits Table Directly
Route::get('/setup-toolkit-table', function () {
    try {
        if (!\Illuminate\Support\Facades\Schema::hasTable('sme_toolkits')) {
            \Illuminate\Support\Facades\Schema::create('sme_toolkits', function (\Illuminate\Database\Schema\Blueprint $table) {
                $table->id();
                $table->string('client_name');
                $table->string('company_name');
                $table->string('client_email');
                $table->string('phone')->nullable();
                $table->json('diagnostic_data')->nullable();
                $table->json('benchmark_data')->nullable();
                $table->json('competitor_data')->nullable();
                $table->json('opportunity_data')->nullable();
                $table->json('sop_data')->nullable();
                $table->json('kpi_data')->nullable();
                $table->string('status')->default('Submitted');
                $table->text('admin_notes')->nullable();
                $table->timestamps();
            });

            return response()->json([
                'status'  => 'success',
                'message' => 'sme_toolkits table created successfully on live server!'
            ]);
        }

        return response()->json([
            'status'  => 'success',
            'message' => 'sme_toolkits table already exists!'
        ]);
    } catch (\Throwable $e) {
        return response()->json([
            'status'  => 'error',
            'message' => 'Failed to create sme_toolkits table: ' . $e->getMessage()
        ], 500);
    }
});

// Live Server Route to Create Visitors Analytics Table Directly
Route::get('/setup-analytics-table', function () {
    try {
        \App\Models\Visitor::ensureTableExists();
        return response()->json([
            'status'  => 'success',
            'message' => 'visitors analytics table created/verified successfully on live server!'
        ]);
    } catch (\Throwable $e) {
        return response()->json([
            'status'  => 'error',
            'message' => 'Failed to create visitors table: ' . $e->getMessage()
        ], 500);
    }
});


