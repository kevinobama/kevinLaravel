<?php
use App\Task;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
   return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Route::group(['middleware' => ['web']], function () {
    // //
// });

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
	Route::get('/questions', 'QuestionsController@index');
});


Route::get('/generators', 'GeneratorsController@index');
Route::get('/generators/model', 'GeneratorsController@model');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::resource('demo', 'DemoController');
//Route::get('/demo', 'DemoController@index');
Route::group(['middleware' => ['web']], function () {
	Route::resource('tasks', 'TasksController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('tasks', 'TasksController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('subjects', 'SubjectsController');
});