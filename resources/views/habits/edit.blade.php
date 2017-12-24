@extends('layouts/app')

@section('content')
    {!! Form::open(['action' => ['HabitsController@update', $single->id], 'method' => 'POST']) !!}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', $single->name, ['class' => 'form-control', 'placeholder' => 'Name']) }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::text('description', $single->description, ['class' => 'form-control', 'placeholder' => 'Description']) }}
        </div>

        <div class="form-group">
            {{ Form::label('difficulty', 'Difficulty') }}
            {{ Form::select('difficulty', array('easy'=>'Easy', 'normal'=>'Normal', 'hard'=>'Hard'), null, array('class'=>'form-control')) }}
        </div> 
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Submit', ['class' => 'btn btn-default']) }}

    {!! Form::close() !!}
@endsection