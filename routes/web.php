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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', function (){
    $project = App\Project::all();
    
    return view('projects.index', compact($project));
});

Route::post('/projects', function (){
    App\Project::create(request(['title','description']));
    
    return redirect('/projects');
});
