<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\MeansOfTransportController;
use App\Http\Controllers\PlaceOfBusinessController;
use App\Http\Controllers\PurposeController;
use App\Http\Controllers\ServiceSectionController;

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

Route::get('/hello',[HelloController::class,"hello"]);
Route::get('/hoge',[HelloController::class,"hoge"]);


Route::resource('businessTripExpense/points', PointController::class);
Route::resource('businessTripExpense/meansOfTransport', MeansOfTransportController::class);
Route::resource('businessTripExpense/placesOfBusiness', PlaceOfBusinessController::class);
Route::resource('businessTripExpense/purpose',PurposeController::class);
Route::resource('businessTripExpense/serviseSection',ServiceSectionController::class);
