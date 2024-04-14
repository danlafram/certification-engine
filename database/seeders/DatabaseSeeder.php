<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\App;
use App\Models\Chapter;
use App\Models\Question;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        App::factory()->count(1)->create()->each(function($app) {
            Chapter::factory()->count(5)->create([
                'app_id' => $app->id
            ])->each(function ($chapter){
                Question::factory()->count(5)->create([
                    'chapter_id' => $chapter->id,
                ])->each(function ($question){
                    Answer::factory()->count(4)->create([
                        'question_id'=> $question->id
                    ]);
                });
            });
        });
    }
}
