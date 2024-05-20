<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Include the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-300">
    <div class="container mx-auto">
        @yield('content')

        <div class="p-8">
            <h2 class="text-3xl font-bold mb-4">Why you need to use it</h2>
            <p class="mb-4 mx-10 text-lg ">This tool offers a simple and efficient way to summarize <span class="text-blue-500 font-bold">long paragraphs</span>, <span class="text-blue-500 font-bold">articles</span>, and <span class="text-blue-500 font-bold">long paragraphs</span>, <span class="text-blue-500 font-bold">document text</span>. It can help you save time by condensing lengthy content into concise summaries, making it ideal for researchers, students, and professionals who need to process large amounts of information quickly.</p>
            <p class="mb-4 mx-10 text-lg ">Additionally, it is completely free to use, making it accessible to anyone who needs a reliable summarization tool. Its user-friendly interface ensures that even those with limited technical knowledge can easily navigate and utilize its features, making it an essential tool for anyone looking to streamline their reading and research process.</p>
        </div>
    </div>

    <footer class="bg-gray-500 text-center py-4">
        <p>Powered by <a href="https://github.com/Ashtreus1" target="_blank" class="text-blue-500">Keiru Dev</a>    </footer>
</body>

</html>
