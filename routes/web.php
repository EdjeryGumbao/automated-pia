<?php

use Illuminate\Support\Facades\Route;

// Added 
use App\Http\Controllers\PiaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/system_description', [PiaController::class, 'proceed_to_system_description']);
Route::get('/proceed_to_threshold_analysis', [PiaController::class, 'proceed_to_threshold_analysis']);
Route::post('proceed_to_threshold_analysis', [PiaController::class, 'proceed_to_threshold_analysis']);
Route::get('/proceed_to_data_flows', [PiaController::class, 'proceed_to_data_flows']);
Route::post('proceed_to_data_flows', [PiaController::class, 'proceed_to_data_flows']);
Route::get('/proceed_to_privacy_impact_analysis', [PiaController::class, 'proceed_to_privacy_impact_analysis']);
Route::post('proceed_to_privacy_impact_analysis', [PiaController::class, 'proceed_to_privacy_impact_analysis']);
Route::get('/proceed_to_privacy_risk_management', [PiaController::class, 'proceed_to_privacy_risk_management']);
Route::post('proceed_to_privacy_risk_management', [PiaController::class, 'proceed_to_privacy_risk_management']);
Route::get('/proceed_to_recommended_privacy_solutions', [PiaController::class, 'proceed_to_recommended_privacy_solutions']);
Route::post('proceed_to_recommended_privacy_solutions', [PiaController::class, 'proceed_to_recommended_privacy_solutions']);
Route::get('/proceed_to_end', [PiaController::class, 'proceed_to_end']);
Route::post('proceed_to_end', [PiaController::class, 'proceed_to_end']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
