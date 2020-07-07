@extends('template.app')
@section('content')
<a class='btn btn-warning' role='button' href="adminpanel">Back</a>
    <div class="container mt-5 text-center">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Title</th>
                <th scope="col">Question</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contact as $contacts)
                @if($user->username == $contacts->contactPerson)
                <tr>
                    <td>{{ $contacts->contactid }}</td>
                    <td>{{ $contacts->namePerson }}</td>
                    <td>{{ $contacts->mailPerson }}</td>
                    <td>{{ $contacts->title }}</td>
                    <td>{{ $contacts->content }}</td>
                    <td><a class='btn btn-warning' role='button' href="writeAnswer?id={{ $contacts->contactid }}&title={{ $contacts->title }}">Answer</a></td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
