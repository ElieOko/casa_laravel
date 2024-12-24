<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserCollection;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BailleurController;
use App\Http\Controllers\CommissionnaireController;

class UserController extends Controller
{
    //
    public function login(Request $request) {

        $validator = Validator::make($request->all(),[
            'username' =>'required|string',
            'password' => 'required|string'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->error()
             ],402);
        }
        $field = $validator->validated();
        $user = User::where('username',$field['username'])->first() ;
        if(!$user){
            return response()->json([
               'message' => 'Utilisateur non valide'
            ],404);
        }
        if(!Hash::check($field['password'],$user->password)){
            return response()->json([
               'message' => 'Mot de passe incorrecte'
            ],404);
        }
        else{
            $token = $user->createToken('token')->plainTextToken;
            return response()->json([
               'message' => 'login success',
               'token' => $token,
               'user' => $user
            ],200);
        }
    }
    public function register(Request $request) {
        $data["sys"] ="User System";
        $account = "User Sytem";
        $validator = Validator::make($request->all(),[
            'username' =>'required|unique:TUsers',
            'password' => 'required|min:6',
            'email'=>'required|unique:TUsers',
            'user_type_id'=>'required|int'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->errors(),
             ],403);
        }
        $field = $validator->validated();
        $user = User::updateOrCreate([
            'username'    =>   $field['username'],
            'password'    =>   Hash::make($field['password']),
            'email'       =>   $field['email']??"",
            'user_type_id'=>   $field['user_type_id']
        ]);

        $token = $user->createToken('token')->plainTextToken;
        //bailleur
        if($field['user_type_id'] == 2){
            $request->merge(['user_id' => $user->id]);
            $data = (new BailleurController())->store($request);
            if($data['error'] != ""){
                User::destroy($user->id);
                return response()->json([
                    "message"=> $data['error']
                ],422);
            } 
            $account =  "Compte Bailleur";
        }
            //commissionnaire
        elseif ($field['user_type_id'] == 3) {
            $request->merge(['user_id' => $user->id]);
            $data = (new CommissionnaireController())->store($request);
            if($data['error'] != ""){
                User::destroy($user->id);
                return response()->json([
                    "message"=> $data['error']
                ],422);
            } 
            $account =  "Compte Commissionnaire";
        }
            //client
        elseif ($field['user_type_id'] == 4) {
            $request->merge(['user_id' => $user->id]);
            $data = (new ClientController())->store($request);
            if($data['error'] != ""){
                User::destroy($user->id);
                return response()->json([
                    "message"=> $data['error']
                    ],422);
            }
            $account =  "Compte Client";
        }
            //user_system
        else{
            if($field['user_type_id'] != 1){
                User::destroy($user->id);
                return response()->json([
                    'message' => $this->msg_account_invalid
                ],200);
            }
            else{
                return response()->json([
                    'user' => $user,
                    'token'=> $token,
                    'account' => $account
                ],200);
            }  
        }

        return response()->json([
            'message' =>'Votre compte a été créer avec succès',
            'data' => $data['sys'],
            'user' => $user,
            'token'=> $token,
            'account' => $account
        ],200);
    }

    public function index(){
        $data = User::all();
        if($data->count() != 0 ){
            return new UserCollection($data);
        }
        return response()->json([
            "message"=>"Ressource not found",
        ],400);
    }
    
    public function desactive() {
        
    }
}
