<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LeadController;

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

// Route to run migrations and create table on server hit
Route::get('/run-migrations', function () {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return response()->json([
            'status' => 'success',
            'message' => 'Database migration executed successfully! Table created.',
            'output' => Artisan::output()
        ]);
    } catch (\Throwable $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Migration failed: ' . $e->getMessage()
        ], 500);
    }
});
