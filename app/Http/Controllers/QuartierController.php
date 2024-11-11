<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuartierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'nom' =>'required|string',
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator
             ],402);
        }
        $field = $validator->validated();
        $data = Quartier::updateOrCreate([
            'nom'    =>   $field['nom']
        ]);
        return response()->json([
            'quartier' => $data,
            'message' =>'Enregistrement réussie avec succès',
         ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Quartier $quartier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quartier $quartier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quartier $quartier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quartier $quartier)
    {
        //
    }
}
