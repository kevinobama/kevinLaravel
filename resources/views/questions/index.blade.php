@extends('layouts.app')

@section('content')

 
<center>
	
 @foreach( $users as $user )
 
 
 {!! $user->name !!} <br> 
 
 
 @endforeach
	
</center>


@endsection
