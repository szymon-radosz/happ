@extends('layouts/app')

@section('content')
<div class="row rank">
    <div class="col-sm-8 col-sm-offset-2">
        <h2>Ranking of users</h2>

        @php ($i = 1)
        @php ($level = 1)
        
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

            <?php
                switch($user->points) {
                    case ($user->points < 3):
                        $level = 1;
                        break;
                    case ($user->points > 3) && ($user->points < 10):
                        $level = 2;
                        break;
                    case ($user->points >= 10) && ($user->points < 20):
                        $level = 3;
                        break;
                    case ($user->points >= 20) && ($user->points < 35):
                        $level = 4;
                        break;
                    case ($user->points >= 35) && ($user->points < 55):
                        $level = 5;
                        break;
                    case ($user->points >= 55) && ($user->points < 85):
                        $level = 6;
                        break;
                    case ($user->points >= 85) && ($user->points < 130):
                        $level = 7;
                        break;
                    case ($user->points > 130):
                        $level = 8;
                        break;
                    default:
                        $level = 1;
                }
            ?>
        
                <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->points}}</td>
                <td>{{$level}}</td>
                </tr>

                @php ($i++)
                
            @endforeach
        @else
            <p>No Users </p>
        @endif

        </tbody>
        </table>
    </div>
</div>
@endsection