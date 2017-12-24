@extends('layouts/app')

@section('content')
    @if(count($habits) > 1)
        @foreach($habits as $habit)
            <div class="singleHabit">
                <h2><a href="/habits/{{$habit->id}}">{{$habit->name}}</a></h2>
                <p>{{$habit->description}}</p>
                <p>{{$habit->difficulty}}</p>
                <p>{{$habit->NumberOfCompleted}}</p>
            </div>
        @endforeach
    @else
        <p>No habits </p>
    @endif
@endsection