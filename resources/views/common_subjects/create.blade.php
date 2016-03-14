@extends('layouts.master')

@section('content')

    <h1>Create New Subject</h1>
    <hr/>

    {!! Form::open(['url' => 'common-subjects', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('subject_name') ? 'has-error' : ''}}">
                {!! Form::label('subject_name', 'Subject Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('subject_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('subject_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection