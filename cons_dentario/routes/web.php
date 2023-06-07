<?php

use Illuminate\Support\Facades\Route;
//php artisan serve

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Route::get('/invoicing', [App\Http\Controllers\DashboardController::class, 'index'])->name('invoicing');

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/invoicing',
                [App\Http\Controllers\DashboardController::class, 'invoicing']
             );
    Route::group(['prefix' => 'appointment'], function(){
        Route::get('/', [App\Http\Controllers\AppointmentController::class, 'index']);
        Route::get('/create',
            [App\Http\Controllers\AppointmentController::class, 'create']
         );
    });
    Route::group(['prefix' => 'dentist'], function(){
        Route::get('/', [App\Http\Controllers\DentistController::class, 'index']);
        Route::get('/create',
            [App\Http\Controllers\DentistController::class, 'create']
         );
        Route::post('/salvar_novo',
         [CidadeApp\Http\Controllers\DentistControllerController::class, 'salvar_novo']
     );
    });

});
