<?php

use App\Http\Controllers\AuthAPIController;
use App\Http\Controllers\PacienteController;
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

Route::post('login', [AuthAPIController::class, 'authenticate']);
Route::post('register', [AuthAPIController::class, 'register']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('logout', [AuthAPIController::class, 'logout']);
    Route::get('get_user', [AuthAPIController::class, 'get_user']);
    Route::get('pacientes', [PacienteController::class, 'getPacientes']);
    Route::post('pacientes', [PacienteController::class, 'store']);
    Route::put('pacientes/{id}', [PacienteController::class, 'update']);
    Route::delete('pacientes/{id}', [PacienteController::class, 'delete']);

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
