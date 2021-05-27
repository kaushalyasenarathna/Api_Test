<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Bus_schedule_bookingController;
use App\Http\Controllers\BusrouteController;
use App\Http\Controllers\Super_adminController;
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

// Add to header
use Illuminate\Support\Facades\Route;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('profile', [AuthController::class, 'profile']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('/bus_schedule_booking', [Bus_schedule_bookingController::class, 'index']);
    Route::get('/bus_schedule', [bus_schedulesController::class, 'index']);
});

Route::post('k/register', [Super_adminController::class, 'register']);
Route::post('k/login', [Super_adminController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('profile', [Super_adminController::class, 'profile']);
    Route::post('logout', [Super_adminController::class, 'logout']);

    Route::get('/bus', [BusController::class, 'index']);
    Route::post('/bus', [BusController::class, 'store']);
    Route::put('/bus/{id}', [BusController::class, 'update']);
    Route::delete('/bus/{id}', [BusController::class, 'destroy']);

    Route::get('/route', [RouteController::class, 'index']);
    Route::post('/route', [RouteController::class, 'store']);
    Route::put('/route/{id}', [RouteController::class, 'update']);
    Route::delete('/route/{id}', [RouteController::class, 'destroy']);

    Route::get('/bus_seates', [Bus_seatsController::class, 'index']);
    Route::post('/bus_seates', [Bus_seatsController::class, 'store']);
    Route::put('/bus_seates/{id}', [Bus_seatsController::class, 'update']);
    Route::delete('/bus_seates/{id}', [Bus_seatsController::class, 'destroy']);

    Route::get('/bus_schedule', [bus_schedulesController::class, 'index']);
    Route::post('/bus_schedule', [bus_schedulesController::class, 'store']);
    Route::put('/bus_schedule/{id}', [bus_schedulesController::class, 'update']);
    Route::delete('/bus_schedule/{id}', [bus_schedulesController::class, 'destroy']);

    Route::get('/bus_route', [BusrouteController::class, 'index']);
    Route::post('/bus_route', [BusrouteController::class, 'store']);
    Route::put('/bus_route/{id}', [BusrouteController::class, 'update']);
    Route::delete('/bus_route/{id}', [BusrouteController::class, 'destroy']);

    Route::get('/bus_route', [BusrouteController::class, 'index']);
    Route::post('/bus_route', [BusrouteController::class, 'store']);
    Route::put('/bus_route/{id}', [BusrouteController::class, 'update']);
    Route::delete('/bus_route/{id}', [BusrouteController::class, 'destroy']);

    Route::get('/bus_schedule_booking', [Bus_schedule_bookingController::class, 'index']);
    Route::post('/bus_schedule_booking', [Bus_schedule_bookingController::class, 'store']);
    Route::put('/bus_schedule_booking/{id}', [Bus_schedule_bookingController::class, 'update']);
    Route::delete('/bus_schedule_booking/{id}', [Bus_schedule_bookingController::class, 'destroy']);
});
