@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="text-center">
            <h1 class="text-5xl font-extrabold text-gray-900">Make your article summarized!</h1>
            <p class="text-lg mt-4 text-gray-700">
                Effortlessly summarize lengthy articles, </br>
                documents, and more with our cutting-edge text summarizer. </br>
                Save time and enhance your productivity today!
            </p>
            <a href="/summarizer"
                class="bg-blue-500 
                       hover:bg-blue-700 
                       text-white 
                       font-bold 
                       py-2 px-4 
                       rounded 
                       mt-4 inline-block
                       transition-colors">
                       Try the Summarizer</a>
        </div>
    </div>
@endsection
