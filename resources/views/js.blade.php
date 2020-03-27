@extends('layout')

@section('content')
    @foreach($data as $value)
        <li>{{$value}}</li>
    @endforeach
@endsection