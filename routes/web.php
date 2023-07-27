<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\App\ProjectController;
use App\Http\Controllers\App\ServiceController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\HistoryLogController;
use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\NotificationController;
use App\Http\Controllers\Developer\RoleController;
use Illuminate\Support\Facades\Route;

/**
 * Rutas generales/publicas
 * 
 * Rutas accesibles por todos los usuarios y no usuarios
 */
Route::redirect('/', '/app');

/**
 * Aplicación base
 */
Route::prefix('app')->name('app.')->group(function () {
    Route::get('/', [AppController::class, 'index'])->name('index');
    
    Route::prefix('nosotros')->name('about-us.')->group(function (){
        Route::get('/presentacion', [AppController::class, 'aboutUsPresentation'])->name('presentation');
        Route::get('/historia', [AppController::class, 'aboutUsHistory'])->name('history');
        Route::get('/mision', [AppController::class, 'aboutUsMission'])->name('mission');
        Route::get('/valores', [AppController::class, 'aboutUsValues'])->name('values');
        Route::get('/resena', [AppController::class, 'aboutUsReview'])->name('review');
    });
    
    Route::prefix('services')->name('services.')->group(function() {
        Route::get('/', [ServiceController::class, 'services'])->name('index');
    });
    
    Route::prefix('proyectos')->name('projects.')->group(function() {
        Route::get('/', [ProjectController::class, 'index'])->name('index');
    });

    Route::get('/contacto', [AppController::class, 'contact'])->name('contact');
});

/**
 * Rutas del Dashboard
 * 
 * El dashboard es el panel de los usuarios de forma general
 */
Route::prefix('dashboard')->name('dashboard.')->middleware([
    'auth:sanctum',
    'verified',
    config('jetstream.auth_session')
])->group(function () {
    Route::get('/welcome', [IndexController::class, 'index'])->name('index');
    Route::inertia('/changelogs', 'Dashboard/Changelogs')->name('changelogs');
    Route::inertia('/help', 'Dashboard/Help')->name('help');

    # Log de Acciones
    Route::resource('histories', HistoryLogController::class)->only([
        'index',
        'store'
    ]);

    Route::resource('notifications', NotificationController::class);
    Route::prefix('/users')->name('users.')->group(function()
    {
        Route::get('/notifications', [UserController::class, 'getNotifications'])->name('notifications');
    });
});

/**
 * Rutas de administrador
 * 
 * Estas ubicaciones son del administrador, sin embargo el desarrollador
 * puede acceder a ellas.
 */
Route::prefix('admin')->name('admin.')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session')
])->group(function () {
    Route::resource('users', UserController::class);

    Route::prefix('/users')->name('users.')->group(function()
    {
        Route::get('{user}/settings', [UserController::class, 'settings'])->name('settings');
        Route::post('/password', [UserController::class, 'updatePassword'])->name('password');
        Route::post('/syncRoles', [UserController::class, 'syncRoles'])->name('syncRoles');
    });

    Route::resource('clients', ClientController::class);
});

/**
 * Rutas solo del desarrollador
 * 
 * Son ubicaciones o funciones que pueden llegar a ser muy sensibles en el sistema, por lo que
 * solo el desarrollador debe de ser capaz de modificarlas o actualizarlas.
 */
Route::prefix('developer')->name('developer.')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session')
])->group(function () {
    Route::resource('roles', RoleController::class);
});
