<?php

use App\Http\Controllers\CarrinhoControler;
use App\Http\Controllers\SiteController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/',[SiteController::class,'index'])
->name('site.home');

Route::get('/site/produtos/{slug}',
[SiteController::class,'detalhes'])
->name('site.detalhes');

Route::get('/site/categoria/{categoria}',
[SiteController::class,'categoria'])
->name('site.categoria');

Route::get('/carrinho',[CarrinhoControler::class,'lista'])->name('site.carrinho');