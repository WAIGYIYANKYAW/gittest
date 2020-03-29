@extends('layout')

@section("content")
    <h1>Create Page</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/receipe" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label>Receipe Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
        </div>
        <div class="form-group">
            <label>Ingredients</label>
            <input type="text" name="ingredients" class="form-control" value="{{old('ingredients')}}" required>
        </div>
        <div class="form-group">
            <label>Category</label>
            <input type="text" name="category" class="form-control" value="{{old('category')}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection  