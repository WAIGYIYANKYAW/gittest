@extends('layout')

@section("content")
    <h1>Edit Page</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="/receipe/{{$receipe->id}}" method="post">
        {{method_field("PATCH")}}
        {{csrf_field()}}
        <div class="form-group">
            <label>Receipe Name</label>
            <input type="text" name="name" class="form-control" value="{{$receipe->name}}" required>
        </div>
        <div class="form-group">
            <label>Ingredients</label>
            <input type="text" name="ingredients" class="form-control" value="{{$receipe->ingredients}}"required >
        </div>
        <div class="form-group">
            <label>Category</label>
            <input type="text" name="category" class="form-control" value="{{$receipe->category }}"required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection