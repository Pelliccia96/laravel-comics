@extends('layouts.app')

@section('content')
{{-- il contenuto all'interno sostituirà @yield('content') in app --}}
<main class="bg-dark">
    <!-- Jumbotron -->
    <div class="main-bg"></div>

    <div class="container">
        <div class="text-white d-flex margin-">
            <h3 class="border border-primary bg-primary rounded fw-bold p-3">CURRENT SERIES</h3>
        </div>
        <!-- Cards -->
        <div class="g-4 my-3">
            <div class="row">
                @foreach ($comicsArray as $comicsElement)
                <div class="col-2 card border-0 bg-dark">
                    <img src="{{ $comicsElement["thumb"] }}" class="card-img-top">
                    <div class="card-body bg-dark">
                        <h6 class="card-title text-white">{{ $comicsElement["title"] }}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center my-2">
            <button class="btn btn-primary fw-bold p-2 px-5 mb-4">LOAD MORE</button>
        </div>
    </div>
    <section>
        <div class="bg-primary">
            <div class="container d-flex justify-content-center py-5">
                <div class="d-flex align-items-center gap-3">
                    @foreach ($itemsList as $item)
                    <div class="img-container">
                        <img src="{{ Vite::asset($item["img"]) }}" class="img-fluid my-main-img">
                    </div>
                    <div class="me-5"><a href="#" class="text-white fw-semibold">{{ $item["title"] }}</a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
