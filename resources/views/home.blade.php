@extends('layout')

@section("content")
    <h1>Home Page</h1>
    <a href="/receipe/create"><button class="btn btn-success">CREATE</button></a><hr>
    @foreach($data as $value)
        <a href="/receipe/{{$value->id}}"><li>Name-{{$value->name}}</li></a>
        <li>Ingredients-{{$value->ingredients}}</li>
        <li>Category-{{$value->category}}</li><hr>
    @endforeach
@endsection