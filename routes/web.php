<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Allotment\AllotmentController;
use App\Http\Controllers\FullCalenderController;

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

Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// allotment
Route::get('/allotment', [AllotmentController::class, 'index'])->name('allotment.index');
// Route::get('/allotment/create', [AllotmentController::class, 'create']);
// Route::post('/allotment/insert', [AllotmentController::class, 'insert'])->name('adddata');
// Route::get('/allotment/data', [AllotmentController::class, 'showdata'])->name('showdata');
// Route::post('/allotment/create', [AllotmentController::class, 'store']);
// Route::put('/allotment/{id}', [AllotmentController::class, 'update']);
// Route::delete('/allotment/{allotment_id}', [AllotmentController::class, 'destroy']);


// calendar 1

Route::get('fullcalender', [FullCalenderController::class, 'index'])->name('fullcalendar.index');
Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);