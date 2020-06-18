@extends('template.app')

@section('content')
    <div class="container text-center">
        <h1>Alles over de vereniging</h1>
        <div class="row">
            <div class="mx-auto w-75">
                <div class="card">
                    <div class="card-body bg-warning">
                        <p class="card-text">
                            {{ $About[0]->intro }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-md-6">
                <img
                    src="{{ asset('images/bijenkasten.jpg') }}"
                    class="img rounded" alt="Bijenkasten">
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1>{{ $About[0]->title1 }}</h1>
                        <p class="card-text">
                            {{ $About[0]->section1 }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1>{{ $About[0]->title2 }}</h1>
                        <p class="card-text">
                            {{ $About[0]->section2 }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <img
                    src="{{ asset('images/De-imker-uit-Leiden.jpg') }}"
                    class="img rounded" alt="Imker Leiden">
            </div>
        </div>


        <div class="mx-auto mt-5 pb-5">
            <div class="card">
                <div class="card-body">
                    <h1>{{ $About[0]->title3 }}</h1>
                    <p class="card-text">
                        {{ $About[0]->section3 }}
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
