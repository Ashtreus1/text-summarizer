<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummarizerController extends Controller
{
    public function index()
    {
        return view('summarizer');
    }

    public function summarize(Request $request)
    {
        $request->validate([
            'paragraph' => 'required|string',
        ]);

        $paragraph = $request->input('paragraph');

        $summary = $this->summarizer($paragraph);

        return view('summarizer', ['summary' => $summary, 'paragraph' => $paragraph]);
    }

    private function summarizer($paragraph)
    {
        // Split the paragraph into sentences
        $sentences = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $paragraph);

        // Shuffle the sentences randomly
        shuffle($sentences);

        // Calculate the total number of sentences and the number of sentences to keep in the summary
        $total_sentences = count($sentences);
        $summary_length = max(1, round($total_sentences * 0.3)); // Keep 30% of the sentences

        // Select the first $summary_length sentences for the summary
        $summary_sentences = array_slice($sentences, 0, $summary_length);

        // Join the summary sentences back into a single string
        $summary = implode(' ', $summary_sentences);

        return $summary;
    }
}
