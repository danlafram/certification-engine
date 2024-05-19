<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuizController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/apple', function (Request $request) {
    Log::debug('Received install info from apple');
    Log::debug("Body: " . $request->getContent());
    return response()->json(['success' => 'success'], 200);
});

Route::controller(AppController::class)->group(function () {
    Route::get('/app', 'index');
    Route::get('app/{id}/chapters', 'chapters');
});

Route::controller(ChapterController::class)->group(function () {
    Route::get('chapter/{id}/questions', 'questions');
    Route::post('chapter', 'store');
});

Route::controller(QuestionController::class)->group(function () {
    Route::get('question/{id}/answers', 'answers');
    Route::post('question', 'store');
    Route::post('question/{id}', 'update');
});

Route::controller(AnswerController::class)->group(function () {
    Route::post('answer', 'store');
    Route::post('answer/{id}', 'update');
});

Route::controller(QuizController::class)->group(function () {
    Route::get('quiz/{id}', 'quiz');
});
