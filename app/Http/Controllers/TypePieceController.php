<?php

namespace App\Http\Controllers;

use App\Http\Resources\TypePieceCollection;
use App\Models\TypePiece;
use Illuminate\Http\Request;

class TypePieceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //User
        $data = TypePiece::all();
        if($data->count() != 0 ){
            return new TypePieceCollection($data);
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
        $validator = Validator::make($request->all(),[
            'nom' =>'required|unique:TTypePieces',
            'description'=>'string'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator
             ],402);
        }
        $field = $validator->validated();
        $data = TypePiece::updateOrCreate([
            'nom'           =>   $field['nom'],
            'description'   =>   $field['description']??""
        ]);
        return response()->json([
            'type_piece' => $data,
            'message' =>$this->msg_success,
         ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(TypePiece $typePiece)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypePiece $typePiece)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypePiece $typePiece)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypePiece $typePiece)
    {
        //
    }
}
