<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/producto', [ProductoController::class, "productos"]);
Route::post('/save', [ProductoController::class, "store"]);
Route::delete('/delete/producto/{id}', [ProductoController::class, "delete"]);
Route::get('/edit/producto/{id}' ,[ProductoController::class, "edit"]);    
Route::put('/producto/update/{id}', [ProductoController::class, "Update"]);