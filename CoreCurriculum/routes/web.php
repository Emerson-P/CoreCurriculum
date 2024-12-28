<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserAuthController::class ,'returnPageIndex'])->name("indexPage");
Route::get('/login',[UserAuthController::class ,'returnPagelogin'])->name("loginPage");
Route::get('/cadastro',[UserAuthController::class ,'returnPageCadastro'])->name("cadastroPage");

Route::post('/cadastro',[UserAuthController::class ,'PostCadastro'])->name("cadastroPost");
Route::post('/login',[UserAuthController::class ,'PostLogin'])->name("loginPost");
