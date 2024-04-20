@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Article</h1>

        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" name="author" id="author" class="form-control" value="{{ $post->author }}">
            </div>

            <div class="form-group">
                <label for="headline">Headline:</label>
                <input type="text" name="headline" id="headline" class="form-control" value="{{ $post->headline }}">
            </div>

            <div class="form-group">
                <label for="publish_date">Publish Date:</label>
                <input type="date" name="publish_date" id="publish_date" class="form-control" value="{{ $post->publish_date }}">
            </div>

            <div class="form-group">
                <label for="text">Text:</label>
                <textarea name="text" id="text" class="form-control" rows="5">{{ $post->text }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Article</button>
        </form>
    </div>
@endsection
