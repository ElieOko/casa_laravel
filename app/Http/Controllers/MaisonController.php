<?php

namespace App\Http\Controllers;

use App\Http\Resources\MaisonCollection;
use App\Models\Maison;
use Illuminate\Http\Request;

class MaisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Maison::all();
        if($data->count() != 0 ){
            return new MaisonCollection($data);
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
    public function show(Maison $maison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maison $maison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maison $maison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maison $maison)
    {
        //
    }
}
