<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'redirect'])->name('dashboard');
});

//Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/hello', function(){
    return response()->json(['message' => 'Hello world']);
});


//Users
Route::get('/users', [UserController::class, 'index']);

Route::get('/users/{id}', [UserController::class, 'findOne'])->where('id', '[0-9]+');


//Categorie
Route::post('/categories/store', [CategorieController::class, 'store']);