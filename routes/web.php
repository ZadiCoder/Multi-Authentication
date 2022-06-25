<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsertypeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('usertype')->group(function () {

Route::get('/show/usertype/{id}',[UsertypeController::class,'show'])->name('usertype.show');
Route::get('/show_all_users',[UsertypeController::class,'index'])->name('usertype.index');
Route::get('/add/usertype',[UsertypeController::class,'create'])->name('usertype.create');
Route::post('/store/usertype',[UsertypeController::class,'store'])->name('usertype.store');
Route::get('/edit/usertype/{id}',[UsertypeController::class,'edit'])->name('usertype.edit');
Route::post('/edit/usertype/{id}',[UsertypeController::class,'update'])->name('usertype.update');
Route::get('/delete/usertype/{id}',[UsertypeController::class,'destroy'])->name('usertype.delete');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
