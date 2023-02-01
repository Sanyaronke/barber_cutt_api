<?php

use App\Http\Controllers\Api\Haircuts\HaircutController;
use App\Http\Controllers\Api\Haircuts\HaircutReservationController;
use App\Http\Controllers\Api\Home\HomeController;
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

Route::get('/random-shampoos', [HomeController::class, 'randomShampoos']);

Route::get('/unavailable-hours/{haircutService}', [HaircutReservationController::class, 'getHaircutReservationTimesByDate']);
Route::apiResource('haircuts/reservation', HaircutReservationController::class);
Route::apiResource('haircuts', HaircutController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
