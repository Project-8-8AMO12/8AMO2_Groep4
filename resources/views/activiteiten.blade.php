@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $title }}</h1>
                <p>{{ $content }}</p>
            </div>
            <div class="col mt-2 ">
                <img class="w-75 m-3 card-text rounded" src="https://www.imkersleiden.nl/wp-content/uploads/2019/07/Voorbeeld-nieuws.jpg" alt="bees">
            </div>
        </div>
    </div>
@endsection
