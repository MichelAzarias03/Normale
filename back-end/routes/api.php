<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\ParticipantController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix("/abonne")->controller(AbonneController::class)->group(function(){
    Route::get("/", "index");
    Route::get("/{abonne}", "show")->where(["abonne"=>"[0-9]+"]);
    Route::post("/store", "store");
    Route::post("{abonne}/update", "update")->where(["abonne"=>"[0-9]+"]);
    Route::get("{abonne}/delete", "destroy")->where(["abonne"=>"[0-9]+"]);
    Route::get("{abonne}/toggle-etat", "toggleEtat")->where(["abonne"=>"[0-9]+"]);

});



