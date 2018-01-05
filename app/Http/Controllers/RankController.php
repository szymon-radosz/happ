<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;

class RankController extends Controller
{
    public function index()
    {
        $allUsers = User::orderBy('points','desc')->get();

        return view('rank.index')->with('allUsers', $allUsers);
    }
}
