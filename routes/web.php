<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $headerArray = ["CHARACTERS", "COMICS", "MOVIES", "TV", "GAMES", "COLLECTIBLES", "VIDEOS", "FANS", "NEWS", "SHOP"];
    $footerArray = [
        ["Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"],
        ["Shop Dc", "Shop Dc Collectibles"],
        ["Term Of Use", "Privacy policy (New)", "Ad Choise", "Adversting", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificateds", "Rating", "Shop Help", "Contact Us"],
        ["DC", "MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"],
    ];

    return view('index', [
        "headerArray" => $headerArray,
        "footerArray" => $footerArray,
    ]);
})->name("home");
