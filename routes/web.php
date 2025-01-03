<?php

use App\Http\Controllers\ApplicationStatusListController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Accreditation;
use App\Livewire\OrgDetails;
use App\Livewire\Reaccreditation;
use App\Livewire\ReviewApplication;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\ApplicationInfoController;
use App\Http\Controllers\DataExport;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\OrganizationDocumentListController;
use App\Livewire\Process;
use App\Livewire\UpdateApplication;
use App\Http\Controllers\PdfController;
use App\Livewire\UpdateProfile;







Route::get('/dashboard', [dashboardController::class, 'overview'])->middleware(['auth', 'verified', 'rolemanager:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.updateProfile');
});


Route::middleware(['auth', 'rolemanager:admin'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::resource('dashboard', dashboardController::class);
        Route::get('/overview', [dashboardController::class, 'overview'])->name('dashboard.overview');
        Route::get('/pending/{status}', [dashboardController::class, 'pending'])->name('dashboard.pending');
        Route::get('/review/{userID}', [dashboardController::class, 'review'])->name('review');
        Route::get('/organization', [dashboardController::class, 'organization'])->name('dashboard.organization');
        Route::get("/data-export", [DataExport::class, 'export_excel'])->name("data-export.index");
        Route::get('/organization/{organizationID}', [dashboardController::class, 'organizationView'])->name('organization.view');
        Route::get('/user-management', [dashboardController::class, 'userManagement'])->name('dashboard.user-management');
        Route::get('organization/documentList/{file}', [OrganizationDocumentListController::class, 'viewDocument'])->name('organization.documentView');
    });
});

Route::middleware(['auth', 'rolemanager:organization'])->group(function () {
    Route::view('/organization', 'organization.organization')->name('organization');
    Route::view('/organization/Document', 'organization.organizationDocument')->name('organizationDoc');
    Route::post('/organization/Document', [OrganizationDocumentListController::class, 'store'])->name('organizationDoc.store');
    Route::get('/organization/Document/download/{file}', [OrganizationDocumentListController::class, 'download'])->name('organizationDoc.download');
    Route::get("organization/Document/view/{file}", [OrganizationDocumentListController::class, 'show'])->name('organizationDoc.show');
    Route::get('/details', OrgDetails::class)->name('details');
});

Route::get('/application/status/edit/{id}', [ApplicationStatusListController::class, 'edit'])->middleware('auth', 'rolemanager:admin', 'rolemanager:user')->name('application-info.edit');
Route::put('/application/status/update/{id}', [ApplicationStatusListController::class, 'update'])->middleware('auth', 'rolemanager:admin', 'rolemanager:user')->name('application-info.update');


Route::get('/', function () {
    return view('livewire.start-page');
})->name('landingpage');

Route::get('/application', Process::class)->name('application');
Route::get('/application/accreditation', Accreditation::class)->name('accreditation');
Route::get('/application/reaccreditation', Reaccreditation::class)->name('reaccreditation');
Route::get('/application/update/{applicationNum}', UpdateApplication::class)->name('updateApplication');
Route::get('generate-pdf/{organizationID}',[PdfController::class, 'generatePdf'])->name('generate-pdf');
Route::get('/update/profile', UpdateProfile::class)->name('update-profile');


require __DIR__ . '/auth.php';
