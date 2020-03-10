<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function show($question_id)
    {
        return view(
            'answers',
            ['question' => Question::where('id', $question_id)->firstOrFail()]
        );
    }
}
