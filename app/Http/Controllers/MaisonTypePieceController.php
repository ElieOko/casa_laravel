<?php

namespace App\Http\Controllers;

use App\Http\Resources\MaisonTypePieceCollection;
use App\Models\MaisonTypePiece;
use Illuminate\Http\Request;

class MaisonTypePieceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = MaisonTypePiece::all();
        if($data->count() != 0 ){
            return new MaisonTypePieceCollection($data);
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
    public function show(MaisonTypePiece $maisonTypePiece)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaisonTypePiece $maisonTypePiece)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaisonTypePiece $maisonTypePiece)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaisonTypePiece $maisonTypePiece)
    {
        //
    }
}
