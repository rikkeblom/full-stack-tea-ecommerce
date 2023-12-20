<?php
use App\Models\User;
use App\Models\Produkt;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProduktController;
use App\Http\Controllers\KollektionController;
use App\Http\Controllers\KurvController;
use App\Http\Controllers\ProduktKollektionForbindelseController;
use App\Http\Controllers\ForsideController;

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
    return view('welcome');
});

/* Route::get('home', function () {
    return view('home');
}); */


Route::get('kollektionsside', function () {
    return view('allProducts');
 });

Route::get('/checkout', function () {
    return view('frontend.componets.checkout');
});

Route::get('product', function () {
    return view('product');
});

Route::get('/test2', [KollektionController::class, 'test']);

Route::get('/test1', [KurvController::class, 'test']);

Route::get('/home', [ForsideController::class, 'forside']);