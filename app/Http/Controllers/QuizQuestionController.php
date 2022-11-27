<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizQuestionController extends Controller
{
    public function store(Request $request, $quiz_id)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['quiz_id'] = $quiz_id;
        QuizQuestion::create($input);

        return redirect('/quiz/' . $quiz_id);
    }
}