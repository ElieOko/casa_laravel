<?php

namespace App\Http\Controllers;

use App\Models\Devise;
use Illuminate\Http\Request;
use App\Http\Resources\DeviseCollection;
use Illuminate\Support\Facades\Validator;

class DeviseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Devise::all();
        if($data->count() != 0 ){
            return new DeviseCollection($data);
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
            'nom' =>'required|unique:TDevises',
            'taux' =>'required|integer',
            'code' => 'required|string'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator
             ],402);
        }
        $field = $validator->validated();
        $data = Devise::updateOrCreate([
            'nom'    =>   $field['nom'],
            'taux'    =>  $field['taux'],
            'code'   =>   $field['code']  
        ]);
   
        return response()->json([
            "message"=>$this->msg_success,
        ],$this->status_ok);
    }

    /**
     * Display the specified resource.
     */
    public function show(Devise $devise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Devise $devise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Devise $devise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Devise $devise)
    {
        //
    }
}
