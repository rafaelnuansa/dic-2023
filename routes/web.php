<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [App\Http\Controllers\Web\HomeController::class, 'index'])->name('web.home');
Route::get('conferences', [App\Http\Controllers\Web\ConferenceController::class, 'index'])->name('web.conferences');
Route::get('conferences/{conference}', [App\Http\Controllers\Web\ConferenceController::class, 'show'])->name('web.conferences.show');
Route::get('conferences/{conference}/payment', [App\Http\Controllers\Web\ConferenceController::class, 'payment'])->name('web.conferences.payment');
Route::get('registration-payment', [App\Http\Controllers\Web\ConferenceController::class, 'payment'])->name('web.payment');



Route::get('logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('conferences/assign/{conference}', [App\Http\Controllers\Admin\ConferenceController::class, 'assign'])->name('conferences.assign');
    Route::post('conferences/assign/{conference}', [App\Http\Controllers\Admin\ConferenceController::class, 'storeAssign'])->name('conferences.storeAssign');
    Route::delete('conferences/{conference}/keynotes/{keynote}', [App\Http\Controllers\Admin\ConferenceController::class, 'removeKeynote'])->name('conferences.removeKeynote');

    Route::resource('conferences', App\Http\Controllers\Admin\ConferenceController::class)->names('conferences');
    Route::resource('fos', App\Http\Controllers\Admin\FieldOfStudyController::class)->names('field_of_studies');
    Route::resource('keynotes', App\Http\Controllers\Admin\KeynoteController::class)->names('keynotes');
    Route::resource('dashboard', App\Http\Controllers\Admin\DashboardController::class);
});






Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dark-mode/toggle', [App\Http\Controllers\Admin\DarkModeController::class, 'toggleDarkMode'])->name('dark-mode.toggle');
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
 
});




require __DIR__.'/auth.php';
