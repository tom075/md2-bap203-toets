@extends('layouts.master')


@section('content')

<h1>voeg een link toe</h1>

<form method="POST" action="{{route('link.opslaan')}}">
    @csrf

    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>
        <div class="col-md-6">
            <input id="title" type="text" class="form-control" name="title" required>
        </div>

        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>
        <div class="col-md-6">
            <textarea style="width: 100%; margin-top: 20px;" name="description" id="" cols="30" rows="10"></textarea>
        </div>

        <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('url') }}</label>
        <div class="col-md-6">
            <input id="url" type="text" class="form-control" name="url" required>
        </div>


    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Voeg toe') }}
            </button>
        </div>
    </div>
</form>


@endsection


@section('sidebar')
    @foreach($links as $link)
        <a href="{{$link->url}}">{{$link->title}}</a>
        <p>{{$link->description}}</p>
    @endforeach
@endsection
