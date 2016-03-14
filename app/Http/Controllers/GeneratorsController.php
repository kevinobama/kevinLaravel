<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Models\Task;
use PDO;

class GeneratorsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }	
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        //error_log("  \n data:".print_r($users,true)." \n", 3, "/tmp/errors.log");

        return view('generators.index', compact('tasks'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function model()
    {
        //$users = DB::connection('mysql2')->select(...);
        //DB::table('users')->get();
        //error_log("  \n data:".print_r($users,true)." \n", 3, "/tmp/errors.log");
        $pdo = \DB::connection('hooray_exam')->getPdo();
        $sql = "show tables";
        $sth = $pdo->prepare($sql);
        $sth->execute();

        $tables = $sth->fetchAll(PDO::FETCH_CLASS);
        foreach($tables as $table) {
            $Tables_in_hooray_exam = str_replace("edu_", "", $table->Tables_in_hooray_exam);
            $Tables_in_hooray_exam = str_replace("_", " ", $Tables_in_hooray_exam);
            $Tables_in_hooray_exam = ucwords($Tables_in_hooray_exam);
            $Tables_in_hooray_exam = str_replace(" ", "", $Tables_in_hooray_exam);

            error_log("  \n tableName:".print_r($Tables_in_hooray_exam,true)." \n", 3, "/tmp/errors.log");
            error_log("php artisan make:model  Models/".$Tables_in_hooray_exam."\n", 3, "/var/www/php/php_others/quickstart/createModels.sh");
        }

        return view('generators.model', compact('tables'));
    }
}
