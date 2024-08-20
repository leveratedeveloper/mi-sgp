@extends('layout.app')
 
@section('title', 'Page About')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
    <p>This is about content.</p>
@endsection
