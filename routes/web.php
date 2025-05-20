<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/clients');

Route::controller(ClientController::class)->prefix('clients')->name('clients.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
});
