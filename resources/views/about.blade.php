@extends('template.app')

@section('content')
    <div class="container text-center">
        <div class="row home-row p-3">
            <div class="col my-auto">
                <h1 class="t-green">Alles over de vereniging</h1>
            </div>
        </div>

        <div class="row mt-2">
            <div class="mx-auto mt-3 c c-border">
                    <div class="card-body bg-warning">
                        <p class="card-text">
                            {{ $About[0]->intro }}
                        </p>
                    </div>
            </div>
        </div>

        <div class="row pt-4 home-row p-3">
            <div class="col-md-6">
                <img
                    src="{{ asset('images/bijenkasten.jpg') }}"
                    class="w-100 rounded" alt="Bijenkasten">
            </div>
            <div class="col-md-6">
                <h1 class="t-header">{{ $About[0]->title1 }}</h1>
                <p class="card-text">
                    {{ $About[0]->section1 }}
                </p>
            </div>
        </div>

        <div class="row pt-4 home-row p-3">
            <div class="col-md-6">
                <h1 class="t-header">{{ $About[0]->title2 }}</h1>
                <p class="card-text">
                    {{ $About[0]->section2 }}
                </p>
            </div>

            <div class="col-md-6">
                <img
                    src="{{ asset('images/De-imker-uit-Leiden.jpg') }}"
                    class=" w-100 rounded" alt="Imker Leiden">
            </div>
        </div>

        <div class="home-row p-3">
            <div class="col-lg">
                <h1 class="t-header">{{ $About[0]->title3 }}</h1>
                <p class="card-text">
                    {{ $About[0]->section3 }}
                </p>
            </div>
        </div>

    </div>
@endsection
