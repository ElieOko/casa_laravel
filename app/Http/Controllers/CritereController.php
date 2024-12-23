<?php

namespace App\Http\Controllers;

use App\Models\Critere;
use Illuminate\Http\Request;
use App\Http\Resources\CritereCollection;

class CritereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Critere::all();
        if($data->count() != 0 ){
            return new CritereCollection($data);
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
            'nom' =>'required|unique:TCriteres',
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator
             ],402);
        }
        $field = $validator->validated();
        $data = Critere::updateOrCreate([
            'nom'    =>   $field['nom']
        ]);
        return response()->json([
            'critere' => $data,
            'message' => $this->msg_success,
         ],$this->status_ok);
    }

    /**
     * Display the specified resource.
     */
    public function show(Critere $critere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Critere $critere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Critere $critere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Critere $critere)
    {
        //
    }
}
