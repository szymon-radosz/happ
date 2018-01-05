@extends('layouts/app')

@section('content')
<div class="row rank">
    <h1>rank</h1>

    @php ($i = 1)

    <table class="table">
            <thead>
                <tr>
                <th scope="col">Position</th>
                <th scope="col">Name</th>
                <th scope="col">Points</th>
                <th scope="col">Level</th>
                </tr>
            </thead>
            <tbody>

    @if(count($allUsers) > 1)
        @foreach($allUsers as $user)
            
            <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->points}}</td>
            <td>{{$user->level}}</td>
            </tr>

            @php ($i++)
            
        @endforeach
    @else
        <p>No Users </p>
    @endif

    </tbody>
    </table>
</div>
@endsection