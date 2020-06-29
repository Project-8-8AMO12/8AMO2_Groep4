@extends('template.app')

@section('content')
    <div class="container">
        <div class="text-center row home-row p-3">
            <div class="col my-auto">
                <h1 class="t-green">Alles over de vereniging</h1>
            </div>
        </div>

        <div class="row pt-4 home-row p-3">
            <div class="col-md-9">
                <p class="card-text">
                    {{ $WinkelContent[0]->intro }}
                </p>
            </div>

            <div class="col-md-3">
                <img src="{{ asset('images/bijenkasten.jpg') }}"
                    class="w-100 rounded" alt="Bijenkasten">
            </div>
        </div>

        <div class="row pt-4 home-row p-3">
            <div class="col-md-9">
                <h1 class="t-header">{{ $WinkelContent[0]->title1 }}</h1>
                <p class="card-text">
                    {{ $WinkelContent[0]->section1 }}
                </p>
            </div>
        </div>

        <div class="row pt-4 home-row p-3">
            <div class="col-md-9">
                <h1 class="t-header">{{ $WinkelContent[0]->title2 }}</h1>
                <p class="card-text">
                    {{ $WinkelContent[0]->section2 }}
                </p>
            </div>
        </div>

        <div class="row pt-4 home-row p-3">
            <div class="col-md-9">
                <h1 class="t-header">{{ $WinkelContent[0]->title3 }}</h1>
                <p class="card-text">
                    {{ $WinkelContent[0]->section3 }}
                </p>
            </div>
        </div>

    </div>
@endsection
