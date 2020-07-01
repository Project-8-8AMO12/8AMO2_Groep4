@extends('template.app')

@section('content')
    <div class="container text-center">
        <div class="row home-row p-3">
            <div class="col my-auto">
                <h1 class="t-green">{{$Bijenstal[0]->title1}}</h1>
            </div>
        </div>
        <div class="row home-row p-3">
            <div class="col my-auto">
                <h5 class="card-text mt-2 pb-2 text-left">{{$Bijenstal[0]->section1}}</h5>
                <img class="rounded mt-4 pb-4 w-75" src="https://www.imkersleiden.nl/wp-content/uploads/2020/01/image002.png" alt="foto van de stal">
            </div>
        </div>

    </div>
@endsection
