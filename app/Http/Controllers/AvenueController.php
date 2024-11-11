<?php

namespace App\Http\Controllers;

use App\Models\Avenue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AvenueController extends Controller
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
        //
        $validator = Validator::make($request->all(),[
            'nom' =>'required|string',
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator
             ],402);
        }
        $field = $validator->validated();
        $data = Avenue::updateOrCreate([
            'nom'    =>   $field['nom']
        ]);
        return response()->json([
            'avenue' => $data,
            'message' =>$this->msg_success,
         ],$this->status_ok);
    }

    /**
     * Display the specified resource.
     */
    public function show(Avenue $avenue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Avenue $avenue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Avenue $avenue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avenue $avenue)
    {
        //
    }
}
