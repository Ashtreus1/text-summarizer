@extends('layouts.app')

@section('title', 'Summarizer')

@section('content')
    <div class="mt-4">
        <h1 class="text-2xl font-bold">Text Summarizer</h1>
        <p>{{ $completion }}</p>
        <a href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Back to Welcome Page</a>
    </div>
@endsection
