<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display all chapters for the app
     */
    public function answers(string $id)
    {
        $answers = Question::findOrFail($id)->answers;
        return $answers;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $question_data = $request->input('question');
        $question = Question::create([
            'question' => $question_data,
            'chapter_id' => 1
        ]);

        return $question;
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
