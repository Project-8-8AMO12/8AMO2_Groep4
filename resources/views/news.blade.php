@extends('template.app')

@section('content')
    <div class="container mt-5">
        <div class="row mt-3">
            <div class="col-md home-row">
                <h2 class="t-yellow">Zo blijf je op de hoogte</h2>
                <h4 class="t-green">De laatste nieuwtjes</h4>
            </div>
            <div class="col"></div>
        </div>

        <div class="row home-row mt-3">
            <div class="col-md-6 my-auto">
                <h4>{{ $NieuwsContent[0]->section1 }}</h4>
                <h4>{{ $NieuwsContent[0]->section2 }}</h4>
            </div>
            <div class="col-md-6">
                <img class="w-75 m-3 rounded" src="{{ asset('images/IMG-20190509-WA0020.jpg') }}" alt="nieuws1">
            </div>
        </div>

        <div class="row mt-2 home-row">
            <h3 class="t-green mt-3">De nieuwe bijenstal</h3>
            <div class="col-md-12 mt-3">
                <img src="{{ asset('images/bijenstuifmeel2.jpg') }}" alt="bijenstal" class="rounded w-100">
                <h3>De gemeente gaat Park Cronesteyn herinrichten en een uitgebreid beheerplan is door de gemeenteraad in april 2019 goedgekeurd.</h3>
            </div>
            <a href="/bijenstal" class="btn btn-warning m-2 p-2 text-center">Lees meer</a>
        </div>

        <h3 class="t-green mt-3">Nieuws brieven</h3>
        <div class="row pb-5 container">
            <a href="https://www.imkersleiden.nl/wp-content/uploads/2020/02/202001-nieuwsbrief-jan-1-2020.pdf" class="btn btn-warning col-3 m-2 p-2">Januari 2020 #6</a>
            <a href="https://www.imkersleiden.nl/wp-content/uploads/2020/02/201905-nieuwsbrief-dec-5-2019.pdf" class="btn btn-warning col-3 m-2 p-2">December 2019 #5</a>
            <a href="https://www.imkersleiden.nl/wp-content/uploads/2020/02/201904-nieuwsbrief-nov-4-2019.pdf" class="btn btn-warning col-3 m-2 p-2">November 2019 #4</a>
            <a href="https://www.imkersleiden.nl/wp-content/uploads/2020/02/201903-nieuwsbrief-okt-3-2019.pdf" class="btn btn-warning col-3 m-2 p-2">Oktober 2019 #3</a>
            <a href="https://www.imkersleiden.nl/wp-content/uploads/2020/02/201902-nieuwsbrief-sept-2-2019.pdf" class="btn btn-warning col-3 m-2 p-2">September 2019 #2</a>
            <a href="https://www.imkersleiden.nl/wp-content/uploads/2020/02/201901-nieuwsbrief-sept-1-2019.pdf" class="btn btn-warning col-3 m-2 p-2">September 2019 #1</a>
        </div>
    </div>
@endsection

