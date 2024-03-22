<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
// Group routes under the 'admin' prefix
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard/cc', 'viewCC')->name('CC');
    Route::get('/getData', 'get');
    Route::get('/dashboard/sqd', 'viewSQD')->name('SQD');
    Route::get('/report', 'viewReport')->name('report');
});
