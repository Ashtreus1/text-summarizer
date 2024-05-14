@extends('layouts.app')

@section('title', 'Summarizer')

@section('content')
    <div class="mt-4">
        <h1 class="text-2xl font-bold">Text Summarizer</h1>
        <form method="POST" action="/summarizer" class="mt-4">
            @csrf
            <textarea name="paragraph" rows="5" class="w-full p-2 border rounded" placeholder="Enter your text here..."></textarea>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Summarize</button>
        </form>
        @if(isset($summary))
            <div class="mt-4">
                <h2 class="text-xl font-bold">Summary</h2>
                <p>{{ $summary }}</p>
            </div>
        @endif
        <a href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Back to Welcome Page</a>
    </div>
@endsection
