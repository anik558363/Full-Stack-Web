<?php

use App\Http\Controllers\PortfolioHomeController;

use Illuminate\Support\Facades\Route;




Route::get('/portfolioTest',[PortfolioHomeController::class,'test']);

Route::get('/',[PortfolioHomeController::class,'index']);


