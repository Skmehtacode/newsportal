<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\NewsController;



Route::get("/",[NewsController::class,"index"])->name("home");
Route::get("/read/{id}",[NewsController::class,"readmore"])->name("readmore");
Route::match(["post","get"],"/store",[NewsController::class,'store'])->name("store");
Route::get("/search",[NewsController::class,"search"])->name("search");
Route::get("/delete/{id}",[NewsController::class,"delete"])->name("delete");