@extends('layouts/app')

@section('content')
    <h2>{{$single->name}}</h2>
    <p>{{$single->description}}</p>
    <p>{{$single->difficulty}}</p>
    <p>{{$single->NumberOfCompleted}}</p>
@endsection