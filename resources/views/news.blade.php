@extends('layouts.app')

@section('news')
{{-- il contenuto all'interno sostituirà @yield('content') in app --}}
<section class="bg-primary">
    <!-- Jumbotron -->
    <div class="main-bg"></div>
    <div class="container">
        <div class="margin--">
            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" class="img-fluid" alt="">
        </div>
    </div>
</section>
<section class="bg-white">
    <!-- Main Section -->
    <div class="container py-5">
        <div class="text-dark my-3">
            <h2 class="fw-semibold">ACTION COMICS #1000: THE DELUXE EDITION</h2>
        </div>
        <div class="d-flex">
            <div>
                <div class="my-4 d-flex">
                    <button class="btn btn-success border border-2 border-success p-2 pb-1 d-flex justify-content-between w-50">
                        <h5 class="text-white px-2">U.S. Price: $19.99</h5>
                        <h5 class="text-white px-2">AVAILABLE</h5>
                    </button>
                    <button class="btn btn-success border border-2 border-success p-2 pb-1">
                        <h5 class="text-white px-2">Check Availability &#x25BE;</h5>
                    </button>
                </div>
                <div>
                    <p class="fw-semibold">The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for superman's new look, scripts for the stories, the original art from the last story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all-the Superman stories Action Comics #1 and 2 from 1938!</p>
                </div>
            </div>
            <div>
                <div class="text-dark">
                    <h6 class="fw-semibold">ADVERTISEMENT</h6>
                </div>
                <div>
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-secondary">
    <!-- SecondaryMain Section -->
    <div class="container py-5">
        <div class="text-white d-flex gap-4">
            <div>
                <h4 class="p-3">Talent</h4>
                <ul>
                    <li class="list-item">
                        <h6>Art by:</h6>
                        <div>
                            <a href="#">
                                "José Luis García-López",
                                "Clay Mann",
                                "Rafael Albuquerque",
                                "Patrick Gleason",
                                "Dan Jurgens",
                                <br>
                                "Joe Shuster",
                                "Neal Adams",
                                "Curt Swan",
                                "John Cassaday",
                                "Olivier Coipel",
                                "Jim Lee"
                            </a>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="list-item">
                        <h6>Written by:</h6>
                        <div>
                            <a href="#">
                                "Brad Meltzer",
                                "Tom King",
                                "Scott Snyder",
                                "Geoff Johns",
                                "Brian Michael Bendis",
                                "Paul Dini",
                                <br>
                                "Louise Simonson",
                                "Richard Donner",
                                "Marv Wolfman",
                                "Peter J. Tomasi",
                                "Dan Jurgens",
                                "Jerry Siegel",
                                "Paul Levitz"
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="p-3">Specs</h4>
                <ul>
                    <li class="list-item">
                        <h6>Series:</h6>
                        <div>
                            <a href="#">ACTION COMICS</a>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="list-item">
                        <h6>U.S. Price:</h6>
                        <div>
                            <a href="#">$19.99</a>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="list-item">
                        <h6>On Sale Date:</h6>
                        <div>
                            <a href="#">Oct 02 2018</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center border p-2">
        <div class="d-flex align-items-center gap-3">
            @foreach ($itemsList as $item)
            <div class="img-container">
                <img src="{{ Vite::asset($item["img"]) }}" class="img-fluid my-main-img">
            </div>
            <div class="me-5"><a href="#" class="text-white fw-semibold">{{ $item["title"] }}</a></div>
            @endforeach
        </div>
    </div>
</section>
@endsection
