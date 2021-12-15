<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\homeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseReportController;

Route::get("/", [homeController::class, "index"]);

Route::get("/dashboard", [DashboardController::class, "index"]);

Route::resource("/expense_reports", ExpenseReportController::class);

Route::get("/expense_reports/{id}/confirmDelete", [ExpenseReportController::class, "confirmDelete"]);