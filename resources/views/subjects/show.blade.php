@extends('layouts.master')

@section('content')

    <h1>Subject</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Subject Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $subject->id }}</td> <td> {{ $subject->subject_name }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection