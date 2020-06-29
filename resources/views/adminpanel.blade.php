@extends('template.app')

@section('content')
    <div class="row mr-auto">
        <div class="container text-center mt-3">
            <h1>Hier kunt u de pagina's aanpassen via een simpele form</h1>
            <div class="row">
                @foreach($HContent as $Home)
                    <article class="bg-dark rounded col-4 m-2 p-2">
                        <h1 class='text-white'>Home Content</h1>
                        <a class='btn btn-warning' href='homeedit/{{ $Home->id }}' role='button'>Homepage Aanpassen</a>
                    </article>
                @endforeach

                @foreach($AContent as $About)
                    <article class="bg-dark rounded col-3 m-2 p-2">
                        <h1 class='text-white'>About Content</h1>
                        <a class='btn btn-warning' href='aboutedit/{{ $About->id }}' role='button'>Over Ons Aanpassen</a>
                    </article>
                @endforeach

                @foreach($ATContent as $Activiteit)
                    <article class="bg-dark rounded col-4 m-2 p-2">
                        <h1 class='text-white'>Activiteiten pagina</h1>
                        <a class='btn btn-warning' href='activiteitedit/{{ $Activiteit->id }}' role='button'>Activiteit Aanpassen</a>
                    </article>
                @endforeach

                @foreach($CContent as $Cursus)
                    <article class="bg-dark rounded col-4 m-2 p-2">
                        <h1 class='text-white'>Cursus Content</h1>
                        <a class='btn btn-warning' href='cursusedit/{{ $Cursus->id }}' role='button'>Cursus Aanpassen</a>
                    </article>
                @endforeach

                @foreach($NContent as $Nieuws)
                    <article class="bg-dark rounded col-3 m-2 p-2">
                        <h1 class='text-white'>Nieuws pagina</h1>
                        <a class='btn btn-warning' href='nieuwsedit/{{ $Nieuws->id }}' role='button'>Nieuws Aanpassen</a>
                    </article>
                @endforeach

                @foreach($WContent as $Winkel)
                    <article class="bg-dark rounded col-4 m-2 p-2">
                        <h1 class='text-white'>Winkel pagina</h1>
                        <a class='btn btn-warning' href='winkeledit/{{ $Winkel->id }}' role='button'>Winkel Aanpassen</a>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="container text-center mt-3">
            <h1>Cursussen Beheren</h1>
            <a class='btn btn-primary' href='createcursusentry' role='button'>+ Cursus Aanmaken +</a>
            <div class="row m-auto">
                @foreach($CEContent as $Entry)
                    <article class="bg-dark rounded col-3 m-2 p-2">
                        <h1 class='text-white'>{{ $Entry->title }}</h1>
                        <a class='btn btn-danger' href='cursusdelete/{{ $Entry->id }}' role='button'>Cursus Verwijderen</a>
                        <a class='btn btn-warning' href='cursusentryedit/{{ $Entry->id }}' role='button'>Cursus Aanpassen</a>
                    </article>
                @endforeach
            </div>
        </div>

    </div>
@endsection
