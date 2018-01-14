@extends('layouts/app')

@section('content')
<div class="row single">
    <div class="col-sm-8 col-sm-offset-2 showSingleHabit">

        <div class="header">
            <h2>{{$single->name}}</h2>

            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ...
            </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a href="/habits/{{$single->id}}/edit"><div class="dropdown-item EditLink">Edit</div></a>
                    {!!Form::open(['action' => ['HabitsController@destroy', $single->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['id' => 'deleteBtn'])}}
                    {!!Form::close()!!}
                </div>
            </div>

            <a href="http://127.0.0.1:8000/habits/add-point/{{$single->id}}">
                <div class="btn btn-default" id="addBtn">
                    Completed Today!</a>
                </div>
            </a>
        </div>

        <p><span>Description: </span>{{$single->description}}</p>
        <p><span>Difficulty: </span>{{$single->difficulty}}</p>
        <p>You completed that task {{$single->NumberOfCompleted}} times</p>
        
        
    </div>
</div>
@endsection