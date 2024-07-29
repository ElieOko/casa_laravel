<?php

namespace App\Http\Controllers;

use App\Models\Commissionnaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommissionnaireController extends Controller
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
     * 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nom_famille' => 'required|string',
            'prenom' => 'required|string',
            'genre' => 'required|string',
            'telephone' => 'string',
            'date_naissance' => 'string',
            'image_profil'=> 'string'
        ]);

        if($validator->stopOnFirstFailure()->fails()) {
            // $validator
        }
        $validated = $validator->validated();
    }

    /**
     * Display the specified resource.
     */
    public function show(Commissionnaire $commissionnaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commissionnaire $commissionnaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commissionnaire $commissionnaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commissionnaire $commissionnaire)
    {
        //
    }
}
