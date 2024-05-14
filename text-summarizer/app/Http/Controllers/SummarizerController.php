<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class SummarizerController extends Controller
{
    public function index()
    {
        return view('summarizer');
    }

    public function summarizer()
    {
        $completion = OpenAI::completions()->create([
            'model' => 'gpt-3.5-turbo-instruct',
            'prompt' => 'PHP is ',
        ]);

        return view('summarizer', ['completion' => $completion['choices'][0]['text']]);
    }

}
