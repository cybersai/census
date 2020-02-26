<?php

namespace App\Http\Controllers;

use App\Bio;
use App\Http\Requests\StoreBio;
use App\Http\Requests\UpdateBio;
use Illuminate\Http\Request;

class BioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Bio::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreBio $request)
    {
        $bio = Bio::query()->create($request->validated());
        return response()->json($bio, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bio  $bio
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Bio $bio)
    {
        return response()->json($bio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bio  $bio
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateBio $request, Bio $bio)
    {
        $bio->update($request->validated());
        return response()->json($bio);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bio  $bio
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Bio $bio)
    {
        $bio->delete();
        return response()->json([], 204);
    }
}
