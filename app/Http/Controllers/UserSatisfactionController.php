<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserSatisfactionCollection;
use App\Models\UserSatisfaction;
use Illuminate\Http\Request;

class UserSatisfactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = UserSatisfaction::all();
        if($data->count() != 0 ){
            return new UserSatisfactionCollection($data);
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
    public function show(UserSatisfaction $userSatisfaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserSatisfaction $userSatisfaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserSatisfaction $userSatisfaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserSatisfaction $userSatisfaction)
    {
        //
    }
}
