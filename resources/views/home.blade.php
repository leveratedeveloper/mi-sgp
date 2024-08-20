@extends('layout.app')
 
@section('title', 'Page Home')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
    <p>This is home content.</p>
@endsection
