@extends('template.app')
@section('content')
    <div class="card mb-3 rounded-0 border-0">
        <img class="card-img-top" src="{{ asset('images/Imkers-Leiden.png') }}" alt="Card image cap">
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-6 my-auto">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                            {{ $Home[0]->section1 }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('images/Voorbeeld-nieuws.jpg') }}" class="img" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('images/Voorbeeld-nieuws.jpg') }}" class="img" alt="Responsive image">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-auto">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                            {{ $Home[0]->section2 }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
