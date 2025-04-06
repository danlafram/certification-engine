<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
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
        $explanation = $request->input('explanation');
        // $chapter_id = $request->input('chapter_id'); // WARNING: This may not always be present depending on the situation.
        $chapter = Chapter::first();
        $question = Question::create([
            'question' => $question_data,
            'chapter_id' => $chapter->id,
            'explanation' => $explanation
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
    public function update(Request $request, string $id, Question $question)
    {
        $question = Question::findOrFail($id);

        $question->question = $request->input('question');
        $question->explanation = $request->input('explanation');

        $question->save();
        
        return $question;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
