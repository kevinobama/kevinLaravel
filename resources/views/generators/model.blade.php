@extends('layouts.app')

@section('content')

 @foreach( $tables as $table )

 {!! $table->Tables_in_hooray_exam !!} <br>

 @endforeach

@endsection
