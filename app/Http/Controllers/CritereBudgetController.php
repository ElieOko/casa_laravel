<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CritereBudget;
use App\Http\Resources\CritereBudgetCollection;

class CritereBudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = CritereBudget::all();
        if($data->count() != 0 ){
            return new CritereBudgetCollection($data);
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
            'devise_id' =>'int',
            'amountMin' =>'int',
            'amountMax'=>'int'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator
             ],402);
        }
        $field = $validator->validated();
        $data = MaisonDimension::updateOrCreate([
            'devise_id'     => $field['devise_id'],
            'amountMin'       => $field['amountMin'],
            'amountMax'      => $field['amountMax']
        ]);
        return response()->json([
            'critere_budget' => $data,
            'message' =>$this->msg_success,
         ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(CritereBudget $critereBudget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CritereBudget $critereBudget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CritereBudget $critereBudget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CritereBudget $critereBudget)
    {
        //
    }
}
