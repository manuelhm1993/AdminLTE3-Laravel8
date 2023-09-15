<?php

use App\Http\Controllers\Admin\DatatableController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(DatatableController::class)->prefix('datatables')->name('datatables.')->group(function () {
    Route::get('/users', 'users')->name('users');
});
