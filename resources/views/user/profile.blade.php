@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Profile</h1>
        <p>Welcome, {{ Auth::user()->name }}!</p>
        <p>Email: {{ Auth::user()->email }}</p>
    </div>
@endsection
