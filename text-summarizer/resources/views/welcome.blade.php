@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="text-center">
            <h1 class="text-4xl font-bold">Welcome to Text Summarizer</h1>
            <p class="text-lg mt-4">This is a description of the text summarizer.</p>
            <a href="/summarizer" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Go to Summarizer</a>
        </div>
    </div>
@endsection
