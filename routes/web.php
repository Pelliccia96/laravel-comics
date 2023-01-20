<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $headerArray = ["CHARACTERS", "COMICS", "MOVIES", "TV", "GAMES", "COLLECTIBLES", "VIDEOS", "FANS", "NEWS", "SHOP"];

    return view('index', [
        "headerArray" => $headerArray,
    ]);
})->name("home");
