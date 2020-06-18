@extends('template.app')

@section('content')
    <div class="row justify-content-center mr-auto mt-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Cursus Pagina Aanpassen') }}</div>

                <div class="card-body">
                    <form method="POST" action="/cursusEntryUpdate/{{ $CEContent[0]->id }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-1 col-form-label text-md-right">{{ __('Titel') }}</label>

                            <div class="col-md-11">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $CEContent[0]->title }}" required autocomplete="title" autofocus>

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
                                <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" rows="10" required autocomplete="content">{{ $CEContent[0]->content }}</textarea>

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
                                    {{ __('Update Cursus') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
