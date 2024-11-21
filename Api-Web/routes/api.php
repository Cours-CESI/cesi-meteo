<?php

use App\Http\Controllers\API\ProbeController;
use App\Http\Controllers\API\ReportController;
use Illuminate\Support\Facades\Route;

Route::apiResource("probes", ProbeController::class);
Route::apiResource("reports", ReportController::class);