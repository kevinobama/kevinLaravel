<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Helpers\RocketShip;
use App\Helpers\Contracts\RocketShipContract;
use Debugbar;
use DB;
use Session;
use RocketShipContractSingleton;
use Auth;
use Log;

class DemoController extends Controller
{
    //
	public function index(RocketShipContract $rocketship)
	{
		
	    //Auth::attempt()
	    //Auth::login(1)
	    //error_log("  \n data:".print_r(session::getDefaultDriver(),true)." \n", 3, "/tmp/errors.log");
		//error_log("  \n data:".print_r(Auth::getTokenForRequest(),true)." \n", 3, "/tmp/errors.log");
		//error_log("  \n data:".print_r(Auth::getHasher(),true)." \n", 3, "/tmp/errors.log");
		//error_log("  \n data:".print_r(Auth::getHasher(),true)." \n", 3, "/tmp/errors.log");
		
		Auth::basic("kevinobamatheus@gmail.com");
		
		error_log("  \n auth attempt:".print_r(Auth::attempt(['email' => 'kevinobamatheus@gmail.com', 'password' => '654321']),true)." \n", 3, "/tmp/errors.log");
		
        $boom = $rocketship->blastOff();
		$tables = $rocketship->allTables();

	    return view('demo.index', compact('boom','tables'));
	}       
	
	public function show()
	{
		echo("show");
	}
}
