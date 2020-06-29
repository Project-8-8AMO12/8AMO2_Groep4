@extends('template.app')

@section('content')
    <div class="row justify-content-center mr-auto mt-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Nieuws Aanpassen') }}</div>

                <div class="card-body">
                    <form method="POST" action="/nieuwsEdit/{{ $NContent[0]->id }}">
                        @csrf

                        <div class="form-group row">
                            <label for="section1" class="col-md-1 col-form-label text-md-right">{{ __('Sectie 1') }}</label>

                            <div class="col-md-11">
                                <textarea id="section1" type="text" class="form-control @error('section1') is-invalid @enderror" name="section1" rows="10" required autocomplete="section1">{{ $NContent[0]->section1 }}</textarea>

                                @error('section1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="section2" class="col-md-1 col-form-label text-md-right">{{ __('Sectie 2') }}</label>

                            <div class="col-md-11">
                                <textarea id="section2" type="text" class="form-control @error('section2') is-invalid @enderror" name="section2" rows="10" required autocomplete="section2">{{ $NContent[0]->section2 }}</textarea>

                                @error('section2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Nieuwspagina') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


