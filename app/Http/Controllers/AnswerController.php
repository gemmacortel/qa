<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;

class AnswerController extends Controller
{
    public function show($question_id)
    {
        return view(
            'answers',
            ['question' => Question::where('id', $question_id)->firstOrFail()]
        );
    }

    public function store()
    {
        request()->validate([
            'text' => ['required', 'min:5'],
        ]);

        $newAnswer = new Answer();
        $newAnswer->text = request('text');
        $newAnswer->question_id = request('question');

        $newAnswer->save();

        return redirect('/question/'. request('question') . '/answers');
    }
}
