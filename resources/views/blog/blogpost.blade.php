@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->headline }}</h1>
        @if ($post->filename)
            <img src="{{ asset('storage/' . $post->filepath) }}" alt="Post Image">
        @endif
        <p class="text-muted">{{ $post->author }} | {{ $post->publish_date }}</p>
        <p>Last Change:{{ $post->updated_at}}</p>
        <p>Category: @if ($post->category)<a href="{{ route('blog.category', $post->category) }}">{{ $post->category }}</a></p>@endif 
        <p>Keywords:
            @if ($post->keywords)
                @foreach (explode(',', $post->keywords) as $keyword)
                    <a href="{{ route('blog.keyword', $keyword) }}">{{ $keyword }}</a>@unless($loop->last),@endunless
                @endforeach
            @endif 
        </p>
        <p>{{ $post->text }}</p>
        <a href="{{ route('frontpage') }}" class="btn btn-primary">Back to Front Page</a>
    </div>
@endsection