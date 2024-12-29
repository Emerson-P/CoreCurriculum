<?php

use App\Http\Controllers\App;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserAuthController::class ,'returnPageIndex'])->name("indexPage");
Route::get('/login',[UserAuthController::class ,'returnPagelogin'])->name("login"); //
Route::get('/cadastro',[UserAuthController::class ,'returnPageCadastro'])->name("cadastroPage");

Route::post('/cadastro',[UserAuthController::class ,'PostCadastro'])->name("cadastroPost");
Route::post('/login',[UserAuthController::class ,'PostLogin'])->name("loginPost");

Route::middleware('auth')->group(function(){
    Route::get('/home',[App::class ,'returnPageHome'])->name("HomePage");
    Route::get('/pdf',[App::class ,'pdf'])->name("pdf");
});