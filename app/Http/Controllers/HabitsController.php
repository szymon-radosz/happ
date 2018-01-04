<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habit;
use App\User;
use DB;
use App\Quotation;

class HabitsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //store in $habits all posts of current user 
        $habits = DB::table('habits')->where('user_id', auth()->id())->get();

        return view('habits.index')->with('habits', $habits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'description'=>'required',
            'difficulty'=>'required'
        ]);

        $habit = new Habit;
        $habit->name = $request->input('name');
        $habit->description = $request->input('description');
        $habit->difficulty = $request->input('difficulty');
        $habit->NumberOfCompleted = 0;
        $habit->user_id = auth()->user()->id;
        $habit->save();

        return redirect('/habits')->with('success', 'Habit created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single = Habit::find($id);

        return view('habits.show')->with('single', $single);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $single = Habit::find($id);
        return view('habits.edit')->with('single', $single);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required',
            'description'=>'required',
            'difficulty'=>'required'
        ]);

        $habit = Habit::find($id);
        $habit->name = $request->input('name');
        $habit->description = $request->input('description');
        $habit->difficulty = $request->input('difficulty');
        $habit->NumberOfCompleted = 0;
        $habit->save();

        return redirect('/habits')->with('success', 'Habit created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $single = Habit::find($id);
        $single->delete();

        return redirect('/habits')->with('success', 'Habit deleted');
    }

}
