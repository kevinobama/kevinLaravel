<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subject;

class CommonSubjectsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subjects = Subject::paginate(15);

        return view('common_subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('common_subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        //Subject::create($request->all());
        $subject = new Subject();

        $subject->subject_name = $request->subject_name;
        $subject->save();

        return redirect('common-subjects');
    }
}
