<?php

namespace App\Http\Controllers;

use App\Http\Resources\MaisonImageCollection;
use App\Models\MaisonImage;
use Illuminate\Http\Request;

class MaisonImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = MaisonImage::all();
        if($data->count() != 0 ){
            return new MaisonImageCollection($data);
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
    public function show(MaisonImage $maisonImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaisonImage $maisonImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaisonImage $maisonImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaisonImage $maisonImage)
    {
        //
    }
}
