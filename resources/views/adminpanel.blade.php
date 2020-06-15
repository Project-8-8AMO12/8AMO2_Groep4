@extends('app')
@section('content')
    <div class="row mr-auto">

        <div class="container text-center mt-3">
            <div class="row">
                @foreach($HContent as $Home)
                    <article class="bg-dark rounded col-md-4 mr-auto ml-auto p-2">
                        <h1 class='titleContent text-white'>Home Content</h1>
                        <a class='btn btn-warning' href='homeedit/{{ $Home->id }}' role='button'>Homepage Aanpassen</a>
                    </article>
                @endforeach
                @foreach($AContent as $About)
                    <article class="bg-dark rounded col-md-4 mr-auto ml-auto p-2">
                        <h1 class='titleContent text-white'>About Content</h1>
                        <a class='btn btn-warning' href='aboutedit/{{ $About->id }}' role='button'>Over Ons Aanpassen</a>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="container text-center mt-3">
            <h1>Cursussen Aanpassen</h1>
            <div class="row">
                @foreach($CContent as $Cursus)
                    <article class="bg-dark rounded col-md-3 mr-auto ml-auto p-2">
                        <h1 class='titleContent text-white'>{{ $Cursus->title }}</h1>
                        <a class='btn btn-warning' href='cursusedit/{{ $Cursus->id }}' role='button'>Cursus Aanpassen</a>
                    </article>
                @endforeach
            </div>
        </div>

    </div>
@endsection
