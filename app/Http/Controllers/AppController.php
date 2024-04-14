<?php

namespace App\Http\Controllers;

use App\Models\App;
use Illuminate\Http\Request;

class AppController extends Controller
{

    /**
     * Display all chapters for the app
     */
    public function chapters(string $id)
    {
        $chapters = App::findOrFail($id)->chapters;
        return $chapters;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apps = App::all();

        return $apps;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(App $app)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, App $app)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(App $app)
    {
        //
    }
}
