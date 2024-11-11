<?php

namespace App\Http\Controllers;

use App\Models\Bailleur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\BailleurCollection;

class BailleurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Bailleur::all();
        if($data->count() != 0 ){
            return new BailleurCollection($data);
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
    public function desactive()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['error'] = null ;
        $data['sys']   = "" ;
        $validator = Validator::make($request->all(),[
            'nom_famille' => 'required|string',
            'prenom' => 'required|string',
            'genre' => 'required|string',
            'telephone' => 'string',
            'date_naissance' => 'string',
            'user_id' => 'int'
        ]);

        if(!$validator->stopOnFirstFailure()->fails()) {
            $validated = $validator->validated();
            $bailleur = Bailleur::updateOrCreate([
            'nom_famille' => $validated['nom_famille'],
            'prenom' => $validated['prenom'],
            'genre' => $validated['genre'],
            'telephone' => $validated['telephone'],
            'date_naissance' => $validated['date_naissance'],
            'user_id' => $validated['user_id']
            ]);
            $data['sys'] = $bailleur;
            return $data;
        }

        $data['error']= $validator->errors()??"";
        return $data;

       
    }

    /**
     * Display the specified resource.
     */
    public function show(Bailleur $bailleur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bailleur $bailleur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bailleur $bailleur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bailleur $bailleur)
    {
        //
    }
}
