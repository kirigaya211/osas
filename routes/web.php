<?php

use App\Http\Controllers\ApplicationStatusListController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\ApplicationInfoController;
use App\Http\Controllers\DataExport;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [dashboardController::class, 'overview'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function(){
    Route::prefix('dashboard')->group(function () {
        Route::resource('dashboard', dashboardController::class);
        Route::get('/overview', [dashboardController::class, 'overview'])->name('dashboard.overview');
        Route::get('/pending/{status}', [dashboardController::class, 'pending'])->name('dashboard.pending');
});

});





Route::get("/", function () {
    return view("Client.Landingpage");
})->name("landingpage");

Route::get('/application', [ApplicationInfoController::class, 'application'])->name('application');

Route::get('/application/status/edit/{id}', [ApplicationStatusListController::class, 'edit'])->name('application-info.edit');


Route::put('/application/status/update/{id}', [ApplicationStatusListController::class, 'update'])->name('application-info.update');



Route::post('/application/store', [ApplicationInfoController::class, 'store'])->name('application.store');
Route::get('/application/{type}/step/{step}', [ApplicationInfoController::class, 'handleApplication'])->name('application.step');


Route::get('/application', [ApplicationInfoController::class, 'application'])->name('application');


Route::get('/application/docs', [ApplicationInfoController::class, 'applicationDocs'])->name('applicationDocs');


Route::get('/existing-transaction/form', [ApplicationInfoController::class, 'showExistingTransactionForm'])->name('existingTransaction.form');

Route::get('/existing-transaction', [ApplicationInfoController::class, 'showExistingTransactionForm'])->name('existingTransaction');
Route::post('/search-existing-transaction', [ApplicationInfoController::class, 'searchExistingTransaction'])->name('searchExistingTransaction');


Route::post('/application/submit/{type}', [ApplicationInfoController::class, 'store'])->name('application.submit');



Route::get("/data-export", [DataExport::class, 'export_excel'])->name("data-export.index");











require __DIR__.'/auth.php';
