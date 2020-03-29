@extends('layout')

@section("content")
    <h1>{{$receipe->name}}</h1>
        <li>Ingredients-{{$receipe->ingredients}}</li>
        <li>Category-{{$receipe->category}}</li>
        <hr>
        <a href="/receipe/{{$receipe->id}}/edit"><button class="btn btn-primary">EDIT</button></a>
        <hr>
        <form action="/receipe/{{$receipe->id}}" method="post">
            {{method_field("DELETE")}}
            {{csrf_field()}}
            <button type="submit" class="btn btn-primary">DELETE</button>
    </form>
@endsection