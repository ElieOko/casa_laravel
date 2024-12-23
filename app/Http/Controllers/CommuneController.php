<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use Illuminate\Http\Request;
use App\Http\Resources\CommuneCollection;
use Illuminate\Support\Facades\Validator;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Commune::all();
        if($data->count() != 0 ){
            return new CommuneCollection($data);
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
            'nom' =>'required|unique:TCommunes',
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator
             ],402);
        }
        $field = $validator->validated();
        $data = Commune::updateOrCreate([
            'nom'    =>   $field['nom'],
        ]);
        return response()->json([
            'commune' => $data,
            'message' =>$this->msg_success,
         ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Commune $commune)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commune $commune)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commune $commune)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commune $commune)
    {
        //
    }
}
