@extends('template.app')

@section('content')
    <div class="container mt-5 text-center">
        <h1 class="t-green">Contact form</h1>
        <div class="row p-3 home-row justify-content-center">
            <div class="col mt-3">
                <div class="card">
                    <div class="card-header">{{ __('Contact') }}</div>

                    <div class="card-body">
                        <form method="POST" action="contact">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titel') }}</label>

                                <div class="col-md-6">
                                    <input id="title" placeholder="de titel van het onderwerp....." type="text" class="form-control @error('title') is-invalid @enderror" name="title" required autocomplete="title" autofocus>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Beschrijving') }}</label>

                                <div class="col-md-6">
                                    <textarea placeholder="het gespreks onderwerp, waar je het over wilt hebben...." id="content" class="form-control" rows="7" @error('content') is-invalid @enderror name="content" required autocomplete="content">
                                    </textarea>
                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Uw Naam') }}</label>

                                <div class="col-md-6">
                                    <input id="name" placeholder="john doe" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Uw E-mail Adress') }}</label>

                                <div class="col-md-6">
                                    <input id="email" placeholder="johndoe@gmail.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="userRight" class="col-md-4 col-form-label text-md-right">{{ __('Contact Lijst') }}</label>

                                <div class="col-md-6">
                                    <select id="userRight" class="form-control @error('userRight') is-invalid @enderror" name="userRight" required autocomplete="userRight">
                                        @foreach($users as $user)
                                            <option value="{{$user->username}}">{{$user->username}}</option>
                                        @endforeach
                                    </select>

                                    @error('userRight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Verstuur') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-3 home-row mt-2">
            <div class="col-md-6 p-3 text-left">
                <h3 class="t-header ">Winkel / verenigingsgebouw (voorheen depot)</h3>
                <br>
                <p class="h4">Boerenpad 3</p>
                <p class="h4">2322 LA Leiden</p>
            </div>
            <div class="col-md-6 p-3 text-left">
                <h3 class="t-header">Postadres</h3>
                <br>
                <p class="h4">Imkersvereniging Leiden en omstreken</p>
                <p class="h4">Jan van Goyenkade 42</p>
                <p class="h4">2311 BC Leiden</p>
            </div>
        </div>
    </div>
@endsection
