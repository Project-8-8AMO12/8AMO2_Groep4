@extends('template.app')

@section('content')
    <div class="container text-center">
        <h1 class="my-3">Cursussen</h1>
        <div class="row">
            <div class="mt-2">
                <div class="card">
                    <div class="card-body">
                        <h2>Basiscursus bijenteelt 2020</h2>
                        <p class="card-text">
                            {{ $CursusContent[0]->section1 }}
                        </p>
                        <p class="card-text mt-5">
                            {{ $CursusContent[0]->section2 }}
                        </p>

                        <h2 class="mt-5 mb-2 text-center text-success text-bold">Rooster Basiscursus Bijenteelt – Leiden</h2>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Titel</th>
                                        <th scope="col">Beschrijving</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($CursusEntry as $Entry)
                                        <tr>
                                            <th scope="row">Dag {{ $Entry->id }}</th>
                                            <th scope="row">{{ $Entry->title }}</th>
                                            <td>{{ $Entry->content }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <p class="my-5">
                {{ $CursusContent[0]->section3 }}
            </p>
        </div>
    </div>
@endsection
