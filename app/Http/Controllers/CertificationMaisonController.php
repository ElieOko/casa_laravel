<?php

namespace App\Http\Controllers;

use App\Http\Resources\CertificationMaisonCollection;
use App\Models\CertificationMaison;
use Illuminate\Http\Request;

class CertificationMaisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = CertificationMaison::all();
        if($data->count() != 0 ){
            return new CertificationMaisonCollection($data);
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
            'maison_id' =>'required|unique:TCertificationMaisons',
            'certified' =>'boolean'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator
             ],402);
        }
        $field = $validator->validated();
        $data = CertificationMaison::updateOrCreate([
            'maison_id' => $field['maison_id'],
            'certified' => $field['certified']
        ]);
        return response()->json([
            'maison_certified' => $data,
            'message' =>$this->msg_success,
         ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(CertificationMaison $certificationMaison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CertificationMaison $certificationMaison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CertificationMaison $certificationMaison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CertificationMaison $certificationMaison)
    {
        //
    }
}
