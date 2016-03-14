<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class QuestionsController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$users = User::all();
		error_log("  \n data:".print_r($users,true)." \n", 3, "/tmp/errors.log");
		return view('questions.index', compact('users'));
    }    
}
