<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Resources\ClientCollection;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Client::all();
        if($data->count() != 0 ){
            return new ClientCollection($data);
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
        $data['error'] = null ;
        $data['sys']   = "" ;
        $validator = Validator::make($request->all(),[
            'nom_famille' => 'required|string',
            'prenom' => 'required|string',
            'genre' => 'required|string',
            'telephone' => 'string|min:8|regex:/^[0-9]+$/',
            'date_naissance' => 'date',
            'user_id' => 'int'
        ]);

        if(!$validator->stopOnFirstFailure()->fails()) {
            $validated = $validator->validated();
            $client = Client::updateOrCreate([
            'nom_famille' => $validated['nom_famille'],
            'prenom' => $validated['prenom'],
            'genre' => $validated['genre'],
            'telephone' => $validated['telephone'],
            'date_naissance' => $validated['date_naissance'],
            'user_id' => $validated['user_id']
            ]);
            $data['sys'] = $client;
            return $data;
        }

        $data['error']= $validator->errors()??"";
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
