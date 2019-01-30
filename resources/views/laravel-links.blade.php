@extends('layouts.master')


@section('content')

    @foreach($links as $link)
        <a href="{{$link->url}}">{{$link->title}}</a>
        <p>{{$link->description}}</p>
    @endforeach

@endsection


