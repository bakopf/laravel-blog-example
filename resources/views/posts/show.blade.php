@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->headline }}</h1>
        <?php //var_dump($post); ?>
        <p class="text-muted">{{ $post->author }} | {{ $post->publish_date }}</p>
        <p>Last Change:{{ $post->updated_at}}</p>
        <p>Category: {{ $post->category}}</p>
        @php
            $keywords_array = explode(',', $post->keywords);
        @endphp

        <p>Keywords:
        @foreach ($keywords_array as $keyword)
            <a href="#">{{ $keyword }}</a>@unless($loop->last),@endunless
        @endforeach
        </p>
        
        <p>{{ $post->text }}</p>
        
        <a href="{{ route('frontpage') }}" class="btn btn-primary">Back to Front Page</a>
    </div>
@endsection
