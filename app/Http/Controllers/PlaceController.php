<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $places = Place::all();
        return response()->json([
            'status' => 'success',
            'places' => $places,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $place = Place::create(["name" => $request->name, "address" => $request->address]);
        return response()
            ->json($place);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $place = Place::find($id);
        return response()
            ->json($place);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        //
    }
}
