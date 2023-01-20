<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = "Laravel Comics";
    return view('index', [
        "title" => $title,
    ]);
})->name("home");
