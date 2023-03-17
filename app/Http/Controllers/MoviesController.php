<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $movie = new Movie;

        // $movie->title = $request->title;
        // $movie->director = $request->director;
        // $movie->image_url = $request->image_url;
        // $movie->duration = $request->duration;
        // $movie->release_date = $request->release_date;
        // $movie->genre = $request->genre;

        // $movie->save();

        $movie = Movie::create($request->all());

        return response()->json($movie);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);
        return response()->json($movie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return response()->json($movie);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
    }
}
