<?php

use App\Player;
use App\Team;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $players = Player::with('team')->oldest('name')->get();
    $teams = Team::with('players')->get();

    return view('auction', compact('players', 'teams'));
});
