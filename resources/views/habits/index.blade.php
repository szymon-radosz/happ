@extends('layouts/app')

@section('content')
<div class="row habits">

    <h2 id="hOne">List of habits</h2>
    @if(count($habits) >= 1)
        @foreach($habits as $habit)
            <div class="col-sm-8 col-sm-offset-2 singleHabit">
                <h2><a href="/habits/{{$habit->id}}">{{$habit->name}}</a></h2>
                <p><span>Description:</span> {{$habit->description}}</p>
                <p><span>Difficulty:</span> {{$habit->difficulty}}</p>
                <p><span>Number of completed:</span> {{$habit->NumberOfCompleted}}</p>
            </div>
        @endforeach
    @else
        <p>No habits </p>
    @endif
</div>
@endsection
