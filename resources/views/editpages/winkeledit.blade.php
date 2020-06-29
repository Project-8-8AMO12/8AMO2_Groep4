@extends('template.app')
@section('content')
    <div class="row justify-content-center mr-auto">
        <div class="col-md-10">
            <h1 class="text-center">{{ __('Winkel Aanpassen') }}</h1>
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="/winkelEdit/{{ $WContent[0]->id }}">
                        @csrf

                        <div class="form-group row">
                            <label for="intro" class="col-md-1 col-form-label text-md-right">{{ __('Intro') }}</label>

                            <div class="col-md-11">
                                <input id="intro" type="text" class="form-control @error('intro') is-invalid @enderror" name="intro" value="{{ $WContent[0]->intro }}" required autocomplete="intro" autofocus>

                                @error('intro')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <h1 class="text-center">Sectie 1</h1>

                        <div class="form-group row">
                            <label for="title" class="col-md-1 col-form-label text-md-right">{{ __('Titel') }}</label>

                            <div class="col-md-11">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title1" value="{{ $WContent[0]->title1 }}" required autocomplete="title1">

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-1 col-form-label text-md-right">{{ __('Content') }}</label>

                            <div class="col-md-11">
                                <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="section1" rows="5" required autocomplete="section1">{{ $WContent[0]->section1 }}</textarea>

                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <h1 class="text-center">Sectie 2</h1>

                        <div class="form-group row">
                            <label for="title" class="col-md-1 col-form-label text-md-right">{{ __('Titel') }}</label>

                            <div class="col-md-11">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title2" value="{{ $WContent[0]->title2 }}" required autocomplete="title2">

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-1 col-form-label text-md-right">{{ __('Content') }}</label>

                            <div class="col-md-11">
                                <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="section2" rows="5" required autocomplete="section2">{{ $WContent[0]->section2 }}</textarea>

                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <h1 class="text-center">Sectie 3</h1>

                        <div class="form-group row">
                            <label for="title" class="col-md-1 col-form-label text-md-right">{{ __('Titel') }}</label>

                            <div class="col-md-11">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title3" value="{{ $WContent[0]->title3 }}" required autocomplete="title3">

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-1 col-form-label text-md-right">{{ __('Content') }}</label>

                            <div class="col-md-11">
                                <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="section3" rows="5" required autocomplete="section3">{{ $WContent[0]->section3 }}</textarea>

                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Winkel') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

