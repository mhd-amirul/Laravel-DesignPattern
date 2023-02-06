<?php

use App\Http\Controllers\AppBasicPatternController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("basic-pattern", [AppBasicPatternController::class, "basic_pattern"])->name("pattern");
Route::get("basic-pattern-2", [AppBasicPatternController::class, "implementation_adapter"])->name("pattern2");
Route::get("basic-pattern-3", [AppBasicPatternController::class, "template_pattern"])->name("pattern3");
