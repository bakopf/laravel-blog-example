@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->headline }}</h1>
        <p class="text-muted">{{ $post->author }} | {{ $post->publish_date }}</p>

        <p>{{ $post->text }}</p>

        <a href="{{ route('frontpage') }}" class="btn btn-primary">Back to Front Page</a>
    </div>
@endsection
