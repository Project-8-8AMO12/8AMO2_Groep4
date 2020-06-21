@extends('template.app')

@section('content')
    <div class="container mt-5">
        <div class="row mt-3">
            <div class="col-md home-row">
                <h2 class="t-yellow">Leer de wondere wereld van de bij</h2>
                <h4 class="t-green">Activiteiten</h4>
            </div>
            <div class="col"></div>
        </div>
        <div class="row home-row mt-3 ">
            <div class="col-md-6 my-auto">
                <h1 class="t-header">{{ $Activiteiten[0]->title }}</h1>
                <p>{{ $Activiteiten[0]->content }}</p>
            </div>
            <div class="col-md-6">
                <img class="w-75 m-3 card-text rounded" src="https://www.imkersleiden.nl/wp-content/uploads/2019/07/Voorbeeld-nieuws.jpg" alt="bees">
            </div>
        </div>
        <div class="row">
            <div class="mx-auto mt-5 c c-border">
                <div class="card-body bg-warning">
                    <h2>question?</h2>
                    <h4 class="card-text">
                       weak promotion
                    </h4>
                </div>
            </div>
        </div>
    </div>
@endsection
