<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MaisonController;
use App\Http\Controllers\BailleurController;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\TypePieceController;
use App\Http\Controllers\MaisonTypeController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\CritereBudgetController;
use App\Http\Controllers\CommissionnaireController;
use App\Http\Controllers\MaisonDimensionController;
use App\Http\Controllers\UserSatisfactionController;
use App\Http\Controllers\ReservationMaisonController;
use App\Http\Controllers\TypeArchitecturalController;
use App\Http\Controllers\CertificationMaisonController;
use App\Http\Controllers\MateriauxConstructionController;
use App\Http\Controllers\MaisonZoneGeographiqueController;

Route::get('bailleur/desactive', [BailleurController::class, 'desactive']);
Route::post('user/register', [UserController::class, 'register']);
Route::post('user/login', [UserController::class, 'login']);
Route::post('user/type', [UserTypeController::class, 'store']);
Route::get('user', [UserController::class, 'index']);

Route::resource('critere/budget', CritereBudgetController::class)
->only(['index', 'show','edit','store']);

Route::resource('preference', PreferenceController::class)
->only(['index', 'show','edit','store']);

Route::middleware(['auth:sanctum'])->group(function () {
    // Route::get('user', [UserController::class, 'index']);
    // Route::resource('user', UserController::class)
    //     ->only(['index']);


    Route::resource('bailleur', BailleurController::class)
        ->only(['index', 'show','edit']);

    Route::resource('commissionnaire', CommissionnaireController::class)
        ->only(['index', 'show','edit']);

    Route::resource('client', ClientController::class)
        ->only(['index', 'show','edit']);

    Route::resource('maison', MaisonController::class)
        ->only(['index', 'show','edit']);

    Route::singleton('maison.reservation', ReservationMaisonController::class)
        ->only(['index', 'show', 'store']);

    Route::resource('maison.dimension', MaisonDimensionController::class)
        ->only(['index', 'show','store','edit']);

    Route::resource('maison.certification', CertificationMaisonController::class)
        ->only(['index', 'show', 'store','edit']);  
    
    Route::resource('maison.type', MaisonTypeController::class)
        ->only(['index', 'show', 'store','edit']); 
    
    Route::resource('maison.zone_geographique', MaisonZoneGeographiqueController::class)
        ->only(['index', 'show','store','edit']);

    Route::resource('piece', TypePieceController::class)
        ->only(['index', 'show','store','edit']);

    Route::resource('architectural', TypeArchitecturalController::class)
        ->only(['index', 'show','store','edit']);

    Route::singleton('user.satisfaction', UserSatisfactionController::class)
        ->only(['index', 'show','store'])
        ->creatable();

    Route::resource('material', MateriauxConstructionController::class)
        ->only(['index', 'show','store','edit']);

    })->missing(function (Request $request) {
        return response()->json([
            "message" => "url not found ".$request->fullUrl()
        ],404);
});