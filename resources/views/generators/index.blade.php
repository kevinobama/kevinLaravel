@extends('layouts.app')

@section('content')

 @foreach( $tasks as $task )
 
 <li>
  {!! $task->name !!}
 </li>
 
 @endforeach

@endsection
