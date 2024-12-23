<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReservationMaisonCollection;
use App\Models\ReservationMaison;
use Illuminate\Http\Request;

class ReservationMaisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ReservationMaison::all();
        if($data->count() != 0 ){
            return new ReservationMaisonCollection($data);
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
        //f
        $validator = Validator::make($request->all(),[
            'maison_id'  =>'int',
            'user_id' =>'int',
            'date_reservation'=>'string',
            'heure_reserver' =>'string',
            'plage_heure_debut' => 'string',
            'plage_heure_fin' => 'string'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator
             ],402);
        }
        $field = $validator->validated();
        $data = ReservationMaison::updateOrCreate([
            'maison_id'             => $field['maison_id'],
            'user_id'               => $field['user_id'],
            'date_reservation'      => $field['date_reservation'],
            'heure_reserver'        => $field['heure_reserver'],
            'plage_heure_debut'     => $field['plage_heure_debut'],
            'plage_heure_fin'       => $field['plage_heure_fin'],
        ]);
        return response()->json([
            'reservation_   maison' => $data,
            'message' =>$this->msg_success,
         ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(ReservationMaison $reservationMaison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReservationMaison $reservationMaison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReservationMaison $reservationMaison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReservationMaison $reservationMaison)
    {
        //
    }
}
