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
    $comicsArray = config('comics');
    $itemsList = [
        [
            "img" => "./resources/img/buy-comics-digital-comics.png",
            "title" => "Digital Comics",
        ],
        [
            "img" => "./resources/img/buy-comics-merchandise.png",
            "title" => "DC Merchandise",
        ],
        [
            "img" => "./resources/img/buy-comics-subscriptions.png",
            "title" => "Subscription",
        ],
        [
            "img" => "./resources/img/buy-comics-shop-locator.png",
            "title" => "Comic Shop Locator",
        ],
        [
            "img" => "./resources/img/buy-dc-power-visa.svg",
            "title" => "DC Power Visa",
        ],
    ];

    return view('index', [
        "headerArray" => $headerArray,
        "footerArray" => $footerArray,
        "comicsArray" => $comicsArray,
        "itemsList" => $itemsList,
    ]);
})->name("home");
