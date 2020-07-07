@extends('template.app')
@section('content')
    <a class='btn btn-warning' role='button' href="vraagbeantwoord">Back</a>
    <div class="container mt-5 text-center">
        <form method="POST" action="writeAnswer">
            @csrf
            <div class="form-group">
                <h2>{{ $methodtitle }}</h2>
            </div>
            <div class="form-group">
                <textarea name="answer" class="form-control" rows="6"></textarea>
                <input type="hidden" value="{{ $method }}" name="id">
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>
        </form>
    </div>
@endsection
