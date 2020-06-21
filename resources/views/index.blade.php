@extends('template.app')
@section('content')
    <div class="card mb-3 rounded-0 border-0">
        <img class="card-img-top" src="{{ asset('images/Imkers-Leiden.png') }}" alt="Card image cap">
    </div>

    <div class="container text-center">
        <div class="row p-3 mt-3 home-row">
            <div class="col my-auto">
                <h2>De imker vereniging van Leiden en omstreken</h2>
            </div>
        </div>
        <div class="row p-3 mt-3 home-row">
            <div class="col-sm-6 my-auto">
                <p>
                    {{ $Home[0]->section1 }}
                </p>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('images/Voorbeeld-nieuws.jpg') }}" class="img img-home w-100" alt="Responsive image ">
            </div>
        </div>

        <div class="row p-3 mt-3 home-row">
            <div class="col-sm-6">
                <img src="{{ asset('images/Voorbeeld-nieuws.jpg') }}" class="img w-100" alt="Responsive image">
            </div>
            <div class="col-sm-6 my-auto">
                <p>
                    {{ $Home[0]->section2 }}
                </p>
            </div>
        </div>
    </div>
@endsection
