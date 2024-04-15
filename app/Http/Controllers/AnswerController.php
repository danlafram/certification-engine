<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
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
        $answer_text = $request->input('answer_text');
        $is_answer = $request->input('is_answer');
        $question_id = $request->input('question_id');
        
        Answer::create([
            'answer' => $answer_text,
            'is_answer' => $is_answer,
            'question_id' => $question_id
        ]);

        return response()->json(['success' => 'success'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Answer $answer)
    {
        //
    }
}
