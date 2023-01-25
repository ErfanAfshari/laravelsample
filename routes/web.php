<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\CustomAuthController;

use PhpParser\Node\Name;

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
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 


Route::get('stuffs', [StuffController::class,'index'])->name('stuffs.index');
Route::get('insertproduct',  [StuffController::class,'insert'])->name('insertproduct');
Route::post('storeproduct',  [StuffController::class,'store'])->name('storeproduct');
Route::get('updateproduct/{id}',  [StuffController::class,'update'])->name('updateproduct');
Route::put('editproduct',  [StuffController::class,'edit'])->name('editproduct');
Route::get('showproduct/{id}',  [StuffController::class,'show'])->name('showproduct');
Route::delete('deleteproduct/{id}',  [StuffController::class,'delete'])->name('deleteproduct');

