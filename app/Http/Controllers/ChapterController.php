<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display all chapters for the app
     */
    public function questions(string $id)
    {
        $chapters = Chapter::findOrFail($id)->questions;
        return $chapters;
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
        $chapter_data = $request->input('chapter');
        Chapter::create([
            'name' => $chapter_data,
            'app_id' => 1
        ]);

        return response()->json(['success' => 'success'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Chapter $chapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chapter $chapter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chapter $chapter)
    {
        //
    }
}
