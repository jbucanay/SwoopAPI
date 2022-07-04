<?php

namespace App\Http\Controllers;

use App\Http\Resources\UniversityCollection;
use App\Http\Resources\UniversityResource;
use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        // return new UniversityCollection(University::all());

        return response()-> json(new UniversityCollection(University::all()), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return UniversityResource
     */
    public function store(Request $request)
    {
        $university = University::create($request-> only([
            'first_name', 'last_name', 'address', 'city', 'state'
        ]));

        return new UniversityResource($university);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\University  $university
     * @return UniversityResource
     */
    public function show(University $university)
    {
        return new UniversityResource($university);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, University $university)
    {
        $university->update($request->only([
            'first_name', 'last_name', 'address', 'city','state'
        ]));

        return new UniversityResource($university);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    {
        $university->delete();

        return response()->json(null, 204);
    }
}
