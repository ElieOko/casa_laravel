<?php

namespace App\Http\Controllers;

use App\Http\Resources\MaisonTypeCollection;
use App\Models\MaisonType;
use Illuminate\Http\Request;

class MaisonTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = MaisonType::all();
        if($data->count() != 0 ){
            return new MaisonTypeCollection($data);
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
            'nom' =>'required|unique:MaisonTypes',
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
            'maison_type' => $data,
            'message' =>$this->msg_success,
         ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(MaisonType $maisonType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaisonType $maisonType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaisonType $maisonType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaisonType $maisonType)
    {
        //
    }
}
