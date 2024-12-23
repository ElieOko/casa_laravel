<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaisonCritere;
use App\Http\Resources\MaisonCritereCollection;

class MaisonCritereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = MaisonCritere::all();
        if($data->count() != 0 ){
            return new MaisonCritereCollection($data);
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
        $validator = Validator::make($request->all(),[
            'maison_id'  =>'int',
            'critere_id' =>'int',
            'note'       =>'string'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator
             ],402);
        }
        $field = $validator->validated();
        $data = MaisonCritere::updateOrCreate([
            'maison_id'     => $field['maison_id'],
            'critere_id'    => $field['critere_id'],
            'note'          => $field['note']??''
        ]);
        return response()->json([
            'maison_critere' => $data,
            'message' =>$this->msg_success,
         ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(MaisonCritere $maisonCritere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaisonCritere $maisonCritere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaisonCritere $maisonCritere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaisonCritere $maisonCritere)
    {
        //
    }
}
