<?php

use App\Http\Controllers\ElectionController;
use App\Http\Controllers\ElecteurController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ParticipantControler;

use Illuminate\Support\Facades\Route;

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

Route::prefix("/motivations")->name("motivation.")->controller(MotivationController::class)->group(function(){
    Route::get("/", "index")->name("index");
    Route::get("/create", "create")->name("create");
    Route::post("/store", "store")->name("store");
    Route::get("/{motivation}/edit", "edit")->name("edit")->where(["motivation"=>"[0-9]+"]);
    Route::post("/{motivation}/update", "update")->name("update")->where(["motivation"=>"[0-9]+"]);
    Route::get("/{motivation}/delete", "destroy")->name("destroy")->where(["motivation"=>"[0-9]+"]);

});
