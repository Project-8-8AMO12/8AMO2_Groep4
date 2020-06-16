@extends('app')
@section('content')

    <div class="container text-center mt-3">
        <div class="row">
        @foreach($users as $user)
            <article class="bg-dark rounded col m-2 p-2">
                <h1 class='titleContent text-white'>{{ $user->username }}</h1>
                <a class='btn btn-danger' href='deleteUser/{{ $user->id }}' role='button'>Delete User</a>
                <a class='btn btn-warning' href='editUser/{{ $user->id }}' role='button'>Edit User</a>
            </article>
        @endforeach
        </div>
    </div>

@endsection



