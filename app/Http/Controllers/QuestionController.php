<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store()
    {
        /*request()->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required'],
            'slug' => ['required'],
        ]);*/


        $newQuestion = new Question();
        $newQuestion->text = request('text');

        $newQuestion->save();

        return redirect('/');
    }
}
