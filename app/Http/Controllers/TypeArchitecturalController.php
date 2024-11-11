<?php

namespace App\Http\Controllers;

use App\Http\Resources\TypeArchitecturalCollection;
use App\Models\TypeArchitectural;
use Illuminate\Http\Request;

class TypeArchitecturalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TypeArchitectural::all();
        if($data->count() != 0 ){
            return new TypeArchitecturalCollection($data);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeArchitectural $typeArchitectural)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeArchitectural $typeArchitectural)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypeArchitectural $typeArchitectural)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeArchitectural $typeArchitectural)
    {
        //
    }
}
