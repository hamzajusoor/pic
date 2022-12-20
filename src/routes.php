<?php
use Alzugbieh\Pic\TestController;
use Illuminate\Support\Facades\Route;



Route::get('/test',[TestController::class,'test']);
