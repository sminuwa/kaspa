<?php

use App\Http\Controllers\AgroDealerController;
use App\Http\Controllers\FarmerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function(){
    return view('pages.dashboards.index');
})->name('dashboard');


Route::prefix('farmers')->group(function(){
   Route::get('/',[FarmerController::class, 'index'])->name('farmer.index');
   Route::post('/',[FarmerController::class, 'store'])->name('farmer.store');
   Route::post('/show/{farmer}',[FarmerController::class, 'show'])->name('farmer.show');
   Route::delete('/delete/{farmer}',[FarmerController::class, 'destroy'])->name('farmer.destroy');
});

Route::prefix('agro-dealers')->group(function(){
    Route::get('/',[AgroDealerController::class, 'index'])->name('agro-dealer.index');
    Route::post('/',[AgroDealerController::class, 'store'])->name('agro-dealer.store');
    Route::post('/show/{agroDealer}',[AgroDealerController::class, 'show'])->name('agro-dealer.show');
    Route::delete('/delete/{agroDealer}',[AgroDealerController::class, 'destroy'])->name('agro-dealer.destroy');
});
