@extends('layouts.app')

@section('content')
    <h1>Test</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @foreach($blogs as $blog)
        <div>
            <h2>{{ $blog->title }}</h2>
            <p>{{ $blog->description }}</p>
            @if($blog->cover_photo)
                <img src="{{ asset('storage/' . $blog->cover_photo) }}" alt="Blog Cover">
            @endif
        </div>
    @endforeach
@endsection