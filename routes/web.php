<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LPController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [LPController::class, 'index']);
route::get('/home/artikel', [LPController::class, 'home_artikel']);
route::get('/home/artikel/{artikel}', [LPController::class, 'home_artikel_detail']);
route::get('/jantung', [LPController::class, 'jantung']);
route::get('/about', [LPController::class, 'about']);

Route::middleware(['auth'])->group(function () {
    route::get('/dashboard', [DashboardController::class, 'dashboard']);
    route::get('/artikel', [DashboardController::class, 'artikel']);
    route::get('/artikel/create', [DashboardController::class, 'artikel_create']);
    route::post('/artikel', [DashboardController::class, 'artikel_store']);
    route::get('/artikel/{artikel}/destroy', [DashboardController::class, 'artikel_destroy']);
    route::get('/artikel/{artikel}/edit', [DashboardController::class, 'artikel_edit']);
    route::put('/artikel/{artikel}', [DashboardController::class, 'artikel_update']);
    route::get('/catatan_kesehatan', [DashboardController::class, 'catatan_kesehatan']);
    route::post('/catatan_kesehatan', [DashboardController::class, 'catatan_kesehatan_store']);
    route::get('/catatan_kesehatan/{catatan_kesehatan}', [DashboardController::class, 'catatan_kesehatan_destroy']);
    route::put('/catatan_kesehatan/{catatan_kesehatan}', [DashboardController::class, 'catatan_kesehatan_update']);
});

route::get('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});