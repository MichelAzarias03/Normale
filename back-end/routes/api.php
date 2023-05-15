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


Route::prefix("/regions")->controller(RegionController::class)->group(function(){
    Route::get("/", "index");
    Route::get("/{region}", "show")->where(["region"=>"[0-9]+"]);
    Route::post("/store", "store");
    Route::post("/{region}/update", "update")->where(["region"=>"[0-9]+"]);
    Route::get("/{region}/delete", "destroy")->where(["region"=>"[0-9]+"]);

});

Route::prefix("/participants")->controller(ParticipantController::class)->group(function(){
    Route::get("/", "index");
    Route::get("/{participant}", "show")->where(["participant"=>"[0-9]+"]);
    Route::post("/store", "store");
    Route::post("{participant}/update", "update")->where(["participant"=>"[0-9]+"]);
    Route::get("{participant}/delete", "destroy")->where(["participant"=>"[0-9]+"]);
    Route::get("{participant}/toggle-etat", "toggleEtat")->where(["participant"=>"[0-9]+"]);

});



