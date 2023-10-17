<?php

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
  return view('welcome');
});


Route::get('bangla', [App\Http\Controllers\LanguageController::class, 'bangla'])->name('bangla.language');
Route::get('english', [App\Http\Controllers\LanguageController::class, 'english'])->name('english.language');



Route::get('locale/{lange}', [App\Http\Controllers\LocalizationController::class, 'selLang']);