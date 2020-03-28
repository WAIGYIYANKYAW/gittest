@extends('layout')

@section("content")
    <h1>Home Page</h1>
    @foreach($data as $value)
        <li>Name-{{$value->name}}</li>
        <li>Ingredients-{{$value->ingredients}}</li>
        <li>Category-{{$value->category}}</li><hr>
    @endforeach
@endsection