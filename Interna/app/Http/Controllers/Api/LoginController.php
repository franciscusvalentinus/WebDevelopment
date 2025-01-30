<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login (Request $request){
        $user = User::where('email', $request->email)->first();
        if(! $user->tokens() == null){
            $user->tokens()->delete();
        }
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response([
                'status' => 404,
                'message' => "Not Found!!!"
            ]);
        }
        return response([
            'access_token'=>$user->createToken('token')->plainTextToken,
            'status'=>'200',
            'message'=>'Success'
        ]);
    }

    public function logout (){
        auth()->logout();
        return response([
            'message'    => "Success"
        ], 200);
    }
}
