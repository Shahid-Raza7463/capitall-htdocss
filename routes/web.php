<?php

use App\Http\Controllers\Admin\ProxiesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\LinkRedirectionCheckController;
use App\Http\Controllers\Web\LinksTesterController;
use App\Models\Web\CountryName;
use Illuminate\Support\Facades\Route;


//* Admin dashboard
Route::resource('proxy', ProxiesController::class);
// Get proxy bulk action
Route::post('proxy-deleted', [ProxiesController::class, 'bulkAction']);
//* Admin dashboard end


//* home page
// home page
Route::get('/', [LinkRedirectionCheckController::class, 'dashboard']);
// tester logic
Route::resource('tester', LinkRedirectionCheckController::class)->middleware('throttle:only_fifty_time');
// Get share link report
Route::get('link-test/{unique_id?}', [LinkRedirectionCheckController::class, 'dashboard'])->middleware('linktester', 'throttle:only_fifty_time');
//* home page end 



//* login functionality
Route::get('/dashboard', function () {
    return view('Admin.admintemplate');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
//* login functionality end


// //*this login route expertaff se copy kiya hai login routes start
// Route::prefix('admin')->group(function () {
//     Route::get('dashboard', function () {
//         return view('Admin.template');
//     })->middleware(['auth', 'verified'])->name('admin.dashboard');
// });

// // add this route in views/layouts/navigation.blade file route('admin.dashboard')
// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', function () {
//         return redirect()->route('admin.dashboard');
//     })->name('dashboard');
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';
// //*login routes end
