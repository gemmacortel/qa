<?php

namespace App\Http\Controllers;

use App\Question;

class QuestionController extends Controller
{
    public function store()
    {
        request()->validate([
            'text' => ['required', 'min:5', 'ends_with:?'],
        ]);


        $newQuestion = new Question();
        $newQuestion->text = request('text');

        $newQuestion->save();

        return redirect('/');
    }
}
