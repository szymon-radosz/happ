@extends('layouts/app')

@section('content')
    <h2>{{$single->name}}</h2>
    <p>{{$single->description}}</p>
    <p>{{$single->difficulty}}</p>
    <p>{{$single->NumberOfCompleted}}</p>
    <a href="/habits/{{$single->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['HabitsController@destroy', $single->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    
@endsection