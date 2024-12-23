<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\UserTypeCollection;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = UserType::all();
        if($data->count() != 0 ){
            return new UserTypeCollection($data);
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
            'nom' =>'required|unique:TUserTypes',
            'description' => 'string'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator
             ],402);
        }
        $field = $validator->validated();
        $data = UserType::updateOrCreate([
            'nom'    =>   $field['nom'],
            'description'    =>   $field['description']??""
        ]);
        return response()->json([
            'user_type' => $data,
            'message' =>$this->msg_success,
         ],$this->status_ok);
    }

    /**
     * Display the specified resource.
     */
    public function show(UserType $userType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserType $userType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserType $userType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserType $userType)
    {
        //
    }
}
