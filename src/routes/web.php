<?php

use Aquaro\LaravelMaintenanceMode\Http\Controllers\MaintenanceController;

Route::get('/maintenance', [MaintenanceController::class,'index'])->name('maintenance.index');
Route::post('/maintenance', [MaintenanceController::class,'toggle'])->name('maintenance.toggle');