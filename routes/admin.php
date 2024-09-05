<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admins\{
    HomeController,
    InfoController,
    AboutUsController,
    ContactsController,
    DahboardController,
    ProjectsController,
    ServicesController
};
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;

// Admin Routes with authentication
Route::prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Admin\Auth')->group(function () {
        Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('adminLogin');
    });

    Route::middleware('auth:admin')->group(function () {

        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

        Route::get('/home', [DahboardController::class, 'home'])->name('home');

        Route::get('/createAboutUs', [AboutUsController::class, 'createAboutUs'])->name('createAboutUs');
        Route::post('/storeAboutUs', [AboutUsController::class, 'storeAboutUs'])->name('storeAboutUs');
        Route::get('/editAboutUs', [AboutUsController::class, 'editAboutUs'])->name('editAboutUs');
        Route::post('/updateAboutUs', [AboutUsController::class, 'updateAboutUs'])->name('updateAboutUs');

        Route::get('/allProjects', [ProjectsController::class, 'allProjects'])->name('projects.all');
        Route::get('/createProject', [ProjectsController::class, 'createProject'])->name('project.create');
        Route::post('/storeProject', [ProjectsController::class, 'storeProject'])->name('project.store');
        Route::delete('/deleteProject/{id}', [ProjectsController::class, 'destroy'])->name('project.destroy');
        Route::get('/edit/{id}', [ProjectsController::class, 'edit'])->name('project.edit');
        Route::put('/update/{id}', [ProjectsController::class, 'update'])->name('project.update');

        Route::get('/createContacts', [ContactsController::class, 'createContacts'])->name('contacts.create');
        Route::post('/storeContacts', [ContactsController::class, 'storeContacts'])->name('contacts.store');
        Route::get('/editContacts', [ContactsController::class, 'editContacts'])->name('contacts.edit');
        Route::put('/updateContacts', [ContactsController::class, 'updateContacts'])->name('contacts.update');

        Route::get('/createInfo', [InfoController::class, 'createInfo'])->name('info.create');
        Route::post('/storeInfo', [InfoController::class, 'storeInfo'])->name('info.store');
        Route::get('/editInfo', [InfoController::class, 'editInfo'])->name('info.edit');
        Route::put('/updateInfo', [InfoController::class, 'updateInfo'])->name('info.update');

        Route::get('/allServices', [ServicesController::class, 'allServices'])->name('services.all');
        Route::get('/createService', [ServicesController::class, 'createService'])->name('service.create');
        Route::post('/storeService', [ServicesController::class, 'storeService'])->name('service.store');
        Route::get('/editService/{id}', [ServicesController::class, 'editService'])->name('service.edit');
        Route::put('/updateService/{id}', [ServicesController::class, 'updateService'])->name('service.update');
        Route::delete('/destroyService/{id}', [ServicesController::class, 'destroyService'])->name('service.destroy');
    });

    Route::get('/', function () {return redirect()->route('admin.login');});
    Route::fallback(function () {return redirect()->route('admin.login');});
});