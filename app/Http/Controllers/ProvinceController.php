<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProvinceCollection;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Province::all();
        if($data->count() != 0 ){
            return new ProvinceCollection($data);
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
            'nom' =>'required|unique:TProvinces',
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator
             ],402);
        }
        $field = $validator->validated();
        $data = Province::updateOrCreate([
            'nom'    =>   $field['nom']
        ]);
        return response()->json([
            'province' => $data,
            'message' => $this->msg_success,
         ],$this->status_ok);
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Province $province)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Province $province)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $province)
    {
        //
    }
}
