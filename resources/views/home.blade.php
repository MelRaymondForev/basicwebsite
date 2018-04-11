@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>I am still a novice when it comes to Laravel, but I assure you that I will stop at nothing to learn new
    things and be the best!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to sidebar</p>
@endsection