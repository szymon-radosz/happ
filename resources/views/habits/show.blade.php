@extends('layouts/app')

@section('content')
<div class="row single">
    <div class="col-sm-8 col-sm-offset-2 showSingleHabit">
        <h2>{{$single->name}}</h2>
        <p>{{$single->description}}</p>
        <p>{{$single->difficulty}}</p>
        <p>{{$single->NumberOfCompleted}}</p>
        <a href="/habits/{{$single->id}}/edit" class="btn btn-default">Edit</a>
        
        {!!Form::open(['action' => ['HabitsController@destroy', $single->id], 'method' => 'POST'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}

   
        <a href="http://127.0.0.1:8000/habits/add-point">ADD </a>
       
        

    </div>
</div>
@endsection