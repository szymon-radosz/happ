<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('habits/add-point', function(){

    $user = Auth::user()->increment('points');

    return redirect('/habits')->with('success', 'Habit created');
    
});
Route::resource('habits', 'HabitsController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
?>