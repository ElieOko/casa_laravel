<?php

namespace App\Http\Controllers;

use App\Http\Resources\MateriauxConstructionCollection;
use App\Models\MateriauxConstruction;
use Illuminate\Http\Request;

class MateriauxConstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = MateriauxConstruction::all();
        if($data->count() != 0 ){
            return new MateriauxConstructionCollection($data);
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
    public function show(MateriauxConstruction $materiauxConstruction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MateriauxConstruction $materiauxConstruction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MateriauxConstruction $materiauxConstruction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MateriauxConstruction $materiauxConstruction)
    {
        //
    }
}
