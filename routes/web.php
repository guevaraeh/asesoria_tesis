<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;

/*Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');*/

Route::get('/', [ClientController::class, 'index'])->name('home');
Route::get('/acerca-de-nosotros', [ClientController::class, 'about'])->name('about');
Route::get('/contacto', [ClientController::class, 'contact'])->name('contact');
Route::get('/servicios', [ClientController::class, 'services'])->name('services');
Route::get('/enviar', [ClientController::class, 'sendEmail'])->name('email');
Route::post('/envio-contacto', [ClientController::class, 'contact_email'])->name('contact.email');
Route::get('/descarga-cv', [AdminController::class, 'download_cv'])->name('download_cv');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        //return Inertia::render('dashboard');
	return Inertia::location(route('index'));
    })->name('dashboard');

    Route::get('/admin', [AdminController::class, 'index'])->name('index');
    Route::put('/admin/update', [AdminController::class, 'update'])->name('update');

    Route::post('/admin/store-phone', [ContactController::class, 'store_phone'])->name('phone.store');
    Route::post('/admin/store-email', [ContactController::class, 'store_email'])->name('email.store');

    Route::put('/admin/phone/{phone}/update', [ContactController::class, 'update_phone'])->name('phone.update');
    Route::put('/admin/email/{email}/update', [ContactController::class, 'update_email'])->name('email.update');

    Route::get('/admin/main-phone/{phone}', [ContactController::class, 'main_phone'])->name('phone.main');
    Route::get('/admin/main-email/{email}', [ContactController::class, 'main_email'])->name('email.main');

    Route::delete('/admin/phone/{phone}/destroy', [ContactController::class, 'destroy_phone'])->name('phone.destroy');
    Route::delete('/admin/email/{email}/destroy', [ContactController::class, 'destroy_email'])->name('email.destroy');

    Route::post('/admin/service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::put('/admin/service/{service}/update', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('/admin/service/{service}/destroy', [ServiceController::class, 'destroy'])->name('service.destroy');

    Route::post('/admin/comment/store', [AboutController::class, 'store_comment'])->name('comment.store');
    Route::put('/admin/comment/{comment}/update', [AboutController::class, 'update_comment'])->name('comment.update');
    Route::delete('/admin/comment/{comment}/destroy', [AboutController::class, 'destroy_comment'])->name('comment.destroy');

});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
