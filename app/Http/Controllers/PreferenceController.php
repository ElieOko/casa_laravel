<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\TypePieceController;
use App\Http\Controllers\MaisonTypeController;
use App\Http\Controllers\CritereBudgetController;

class PreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $critere_budget = (new CritereBudgetController())->index();
        $type_piece = (new TypePieceController())->index();
        $type_maison = (new MaisonTypeController)->index();
        return response()->json([
           "critere_budgets"    => $critere_budget,
           "type_pieces"        => $type_piece,
           "type_maison"        => $type_maison
        ],200);
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
            'critere_id'        =>  'required|int',
            'type_maison_id'    =>  'required|int',
            'piece.*.id'        =>  'required|int'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->errors()
             ],402);
        }
        $field = $validator->validated();
        $state = Preference::updateOrCreate([
            'user_id'           =>1,
            'critere_id'        =>$field['critere_id'],
            'type_maison_id'    =>$field['type_maison_id'],
        ]);
        
        if($state){
            return response()->json([
                'message' => $this->msg_success
             ],200);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Preference $preference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Preference $preference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Preference $preference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Preference $preference)
    {
        //
    }
}
