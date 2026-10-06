<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Models\User;
use App\Models\Blog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Page Route
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
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

    // Lead Form Submissions
    Route::get('/leads', [AdminDashboardController::class, 'leads'])->name('leads.index');
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

        // Create initial sample blog posts if empty
        if (Blog::count() === 0) {
            Blog::create([
                'title'       => 'Why SME Directors Need Costed AI & IT Roadmaps in 2026',
                'slug'        => 'why-sme-directors-need-costed-ai-it-roadmaps-in-2026',
                'description' => "Most small and medium enterprises spend thousands of pounds on disconnected software tools without a clear strategic roadmap. 

In this article, Mohammed Nasar outlines how a costed, 90-day IT and AI readiness audit helps business owners eliminate manual bottlenecks, scale operations, and compound response speed.",
                'image'       => null,
                'sort_order'  => 1,
                'is_active'   => true,
            ]);

            Blog::create([
                'title'       => '5 Common IT Systems Bottlenecks Eating 10+ Owner Hours Weekly',
                'slug'        => '5-common-it-systems-bottlenecks-eating-owner-hours',
                'description' => "Re-keying customer data between CRM and ERP, manually tracking leads in spreadsheets, and un-integrated invoicing are silent profit killers.

Discover the top 5 operational bottlenecks we uncover during Nexteck business audits and how simple integrations return 12+ hours to SME owners every week.",
                'image'       => null,
                'sort_order'  => 2,
                'is_active'   => true,
            ]);
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
