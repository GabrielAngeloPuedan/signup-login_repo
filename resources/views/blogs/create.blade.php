@extends('layouts.app')

@section('content')
    <h1>Write a Blog</h1>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
        @csrf

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required><br>

        <label for="description">Description</label>
        <textarea id="description" name="description" required>{{ old('description') }}</textarea><br>

        <label for="cover_photo">Cover Photo</label>
        <input type="file" id="cover_photo" name="cover_photo"><br>

        <button type="submit">Submit</button>
    </form>
@endsection