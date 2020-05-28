<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// defines the crud api routes methods for  the specified controller and specifies which methods we want

Route::resource('goal_details','Goal_detailController', [
    'only' => ['show','store']
]);  

Route::resource('categories','League_categoryController', [
    'only' => ['index','show','store','update','destroy']
]);

Route::resource('managers','ManagerController', [
    'only' => ['index','show','store','update']
]);
Route::resource('match_captains','Match_captainController', [
    'only' => ['show','store']
]);
Route::resource('match_details','Match_detailController', [
    'only' => ['show','store']
]);
Route::resource('matches','MatchController', [
    'only' => ['index','show','store','update']
]);

Route::resource('penalty_shootouts','Penalty_shootoutController', [
    'only' => ['show','store']
]);
Route::resource('players','PlayerController', [
    'only' => ['index','show','store','update','destroy']
]);
Route::resource('playing_positions','Playing_positionController', [
    'only' => ['index','show','store','update','destroy']
]);
Route::resource('referees','RefereeController', [
    'only' => ['index','show','store','destroy']
]);
Route::resource('teams','TeamController', [
    'only' => ['index','show','store','update','destroy']
]);
Route::resource('venues','VenueController', [
    'only' => ['index','show','store','update','destroy']
]);




