<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\NewsController;


Route::get('/dashboard',function (){
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




Route::get("/store",[NewsController::class,"view"])->name("view")->middleware(['auth']);
Route::get("/",[NewsController::class,"index"])->name("home");
Route::get("/category/{cat_id}",[NewsController::class,"filter"])->name("filter");
Route::get("/read/{id}",[NewsController::class,"readmore"])->name("readmore");
Route::post("/store",[NewsController::class,'store'])->name("store");
Route::get("/search",[NewsController::class,"search"])->name("search");
Route::get("/delete/{id}",[NewsController::class,"delete"])->name("delete");