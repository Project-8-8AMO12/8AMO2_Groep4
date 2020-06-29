@extends('template.app')
@section('content')

    <div class="container text-center mt-3">
        <h1>Gebruikers Beheren</h1>
        <a class='btn btn-primary' href='/register' role='button'>+ Gebruiker aanmaken +</a>
        <div class="row">
        @foreach($users as $user)
            <article class="bg-dark rounded col m-2 p-2">
                <h1 class='text-white'>{{ $user->username }}</h1>
                <a class='btn btn-danger' href='deleteUser/{{ $user->id }}' role='button'>Delete User</a>
                <a class='btn btn-warning' href='editUser/{{ $user->id }}' role='button'>Edit User</a>
            </article>
        @endforeach
        </div>
    </div>

@endsection



