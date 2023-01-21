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
            <h2 class="fw-semibold">{{$comicsArray[0]["title"]}}</h2>
        </div>
        <div class="d-flex">
            <div>
                <div class="my-4 d-flex">
                    <button class="btn btn-success border border-2 border-success p-2 pb-1 d-flex justify-content-between w-50">
                        <h5 class="text-white px-2">U.S. Price: {{$comicsArray[0]["price"]}}</h5>
                        <h5 class="text-white px-2">AVAILABLE</h5>
                    </button>
                    <button class="btn btn-success border border-2 border-success p-2 pb-1">
                        <h5 class="text-white px-2">Check Availability &#x25BE;</h5>
                    </button>
                </div>
                <div>
                    <p class="fw-semibold">{{$comicsArray[0]["description"]}}</p>
                </div>
            </div>
            <div>
                <div class="text-dark">
                    <h6 class="fw-semibold">ADVERTISEMENT</h6>
                </div>
                <div>
                    <img src="{{$comicsArray[0]["thumb"]}}" class="img-fluid" alt="">
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
                <div class="d-flex">
                    <ul>
                        <li class="list-item">
                            <h6>Art by:</h6>
                            @foreach ($comicsArray[0]["artists"] as $comicsElement)
                            <div>
                                <a href="#">{{$comicsElement}}</a>
                            </div>
                            @endforeach
                        </li>
                    </ul>
                    <ul>
                        <li class="list-item">
                            <h6>Written by:</h6>
                            @foreach ($comicsArray[0]["writers"] as $comicsElement)
                            <div>
                                <a href="#">{{$comicsElement}}</a>
                            </div>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <h4 class="p-3">Specs</h4>
                <ul>
                    <li class="list-item">
                        <h6>Series:</h6>
                        <div>
                            <a href="#">{{$comicsArray[0]["series"]}}</a>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="list-item">
                        <h6>U.S. Price:</h6>
                        <div>
                            <a href="#">{{$comicsArray[0]["price"]}}</a>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="list-item">
                        <h6>On Sale Date:</h6>
                        <div>
                            <a href="#">{{$comicsArray[0]["sale_date"]}}</a>
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
