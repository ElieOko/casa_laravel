<?php

namespace App\Http\Controllers;

use App\Http\Resources\MaisonZoneGeographiqueCollection;
use App\Models\MaisonZoneGeographique;
use Illuminate\Http\Request;

class MaisonZoneGeographiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = MaisonZoneGeographique::all();
        if($data->count() != 0 ){
            return new MaisonZoneGeographiqueCollection($data);
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
            'maison_id'     =>'int',
            'province_id'   =>'int',
            'ville_id'      =>'int',
            'commune'       => 'string',
            'avenue'        => 'string',
            'quartier'      => 'string',
            'latitude'      => 'string',
            'longitude'     => 'string'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator
             ],402);
        }
        $field = $validator->validated();
        $data = MaisonDimension::updateOrCreate([
            'maison_id'     => $field['maison_id'],
            'province_id'   => $field['province_id'],
            'ville_id'      => $field['ville_id'],
            'commune'       => $field['commune'],
            'avenue'        => $field['avenue'],
            'quartier'      => $field['quartier'],
            'latitude'      => $field['latitude'],
            'longitude'     => $field['longitude']
        ]);
        return response()->json([
            'maison_zone_geographique' => $data,
            'message' =>$this->msg_success,
         ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(MaisonZoneGeographique $maisonZoneGeographique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaisonZoneGeographique $maisonZoneGeographique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaisonZoneGeographique $maisonZoneGeographique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaisonZoneGeographique $maisonZoneGeographique)
    {
        //
    }
}
