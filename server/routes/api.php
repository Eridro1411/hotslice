<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/list",[PizzaController::class,"list"]);
Route::get("/detail/{id}",[PizzaController::class,"detail"]);
Route::post("/create",[PizzaController::class,"create"]);
Route::post("/edit/{id}",[PizzaController::class,"edit"]);