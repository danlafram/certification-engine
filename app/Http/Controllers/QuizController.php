<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\App;
use App\Models\Answer;
use App\Models\Chapter;
use App\Models\Question;



class QuizController extends Controller
{
    /**
     * Display all chapters for the app
     */
    public function quiz(string $id)
    {
        $chapters = App::findOrFail($id)->chapters;
        $question_data = [];

        foreach ($chapters as $chapter) {
            $questions = Question::where('chapter_id', '=', $chapter->id)->get();

            $index = 0;
            foreach($questions as $question){
                $answers = $question->answers;
                $question['answers'] = $answers;
                $index++;
            }

            // $question_data[$chapter->name] = $questions;
            array_push($question_data, $questions);
        }

        $response_object = (object) [
            'chapters' => $chapters,
            'questions' => $question_data
        ];

        return $response_object;
    }
}
