@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Article</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" name="author" id="author" class="form-control">
            </div>

            <div class="form-group">
                <label for="headline">Headline:</label>
                <input type="text" name="headline" id="headline" class="form-control">
            </div>

            <div class="form-group">
                <label for="publish_date">Publish Date:</label>
                <input type="date" name="publish_date" id="publish_date" class="form-control">
            </div>

            <div class="form-group">
                <label for="text">Text:</label>
                <textarea name="text" id="text" class="form-control" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create Article</button>
        </form>
    </div>
@endsection
