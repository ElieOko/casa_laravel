<?php

namespace App\Http\Controllers;

use App\Http\Resources\MaisonDimensionCollection;
use App\Models\MaisonDimension;
use Illuminate\Http\Request;

class MaisonDimensionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = MaisonDimension::all();
        if($data->count() != 0 ){
            return new MaisonDimensionCollection($data);
        }
        return response()->json([
            "message"=>"Ressource not found",
        ],400);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(MaisonDimension $maisonDimension)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaisonDimension $maisonDimension)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaisonDimension $maisonDimension)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaisonDimension $maisonDimension)
    {
        //
    }
}
