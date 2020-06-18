@extends('template.app')
@section('content')
    <div class="row justify-content-center mr-auto mt-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Homepage Aanpassen') }}</div>

                <div class="card-body">
                    <form method="POST" action="/homeEdit/{{ $HContent[0]->id }}">
                        @csrf

                        <div class="form-group row">
                            <label for="content" class="col-md-1 col-form-label text-md-right">{{ __('Sectie 1 text') }}</label>

                            <div class="col-md-11">
                                <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="section1" rows="10" required autocomplete="content">{{ $HContent[0]->section1 }}</textarea>

                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content2" class="col-md-1 col-form-label text-md-right">{{ __('Sectie 2 text') }}</label>

                            <div class="col-md-11">
                                <textarea id="content2" type="text" class="form-control @error('content2') is-invalid @enderror" name="section2" rows="10" required autocomplete="content">{{ $HContent[0]->section2 }}</textarea>

                                @error('content2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Homepage') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
