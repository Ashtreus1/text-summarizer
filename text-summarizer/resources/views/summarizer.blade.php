@extends('layouts.app')

@section('title', 'Summarizer')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-lg p-6 bg-white shadow-md rounded-lg">
            <h1 class="text-3xl font-semibold text-gray-800 mb-4">Text Summarizer</h1>
            <div class="relative border border-dashed border-gray-300 rounded-lg p-6">
                <form method="POST" action="/summarizer?{{ time() }}" class="space-y-4">
                    @csrf
                    <div
                        class="flex items-center justify-center h-32 border-dashed border-2 border-gray-400 rounded-lg cursor-pointer">
                        <input type="file" name="file" id="fileInput" class="hidden" accept=".txt" />
                        <label for="fileInput" class="text-gray-400 hover:text-gray-600">
                            <span>Drag and drop a file here or</span>
                            <span class="underline">browse</span>
                        </label>
                    </div>
                    <textarea name="paragraph" rows="6"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Or enter your text here..."></textarea>
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-300">Summarize</button>
                </form>
            </div>
        </div>
    </div>
    @if (isset($summary))
        <div id="summary" class="max-w-lg mx-auto my-10 p-4 bg-gray-100 rounded-lg">
            <h2 class="text-2xl font-semibold text-gray-700 mb-2">Summary</h2>
            <p class="text-gray-700">{{ $summary }}</p>
        </div>
        <script>
            // Auto-scroll to the summary
            document.getElementById('summary').scrollIntoView({
                behavior: 'smooth'
            });
        </script>
    @endif

    <script>
        const fileInput = document.getElementById('fileInput');
        const textArea = document.querySelector('textarea[name="paragraph"]');

        fileInput.addEventListener('change', function() {
            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    textArea.value = e.target.result;
                };
                reader.readAsText(file);
            }
        });
    </script>
@endsection
