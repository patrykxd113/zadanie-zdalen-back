<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TravelController;
use App\Models\Company;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/travel',[TravelController::class,'index']);

Route::get('/companies',[CompanyController::class,"index"]);
Route::post('/companies',[CompanyController::class,"store"]);
Route::get('/companies/{id}',[CompanyController::class,"show"]);
Route::patch('/companies/{id}',[CompanyController::class,"update"]);
Route::delete('/companies/{id}',[CompanyController::class,"destroy"]);
