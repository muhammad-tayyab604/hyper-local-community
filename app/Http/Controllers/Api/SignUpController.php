<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sociallogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class SignUpController extends Controller
{
 
    public function socialsignup(Request $request)
    {
        // $sociallogin=Sociallogin::where('email',$request->email)->first();
        $sociallogin=User::where('email',$request->email)->first();
        if(!$sociallogin)
        {
            $user=new User();
            $user->name=$request->name??"user_name";
            $user->email=$request->email;
            $user->password=bcrypt("Passw0rd");
            $user->save();
     
            $user1=new Sociallogin();
            $user1->name=$request->name;
            $user1->email=$request->email;
            $user1->password=bcrypt("Passw0rd");
            $user1->save();
            
            $token = $user->createToken('my-app-token')->plainTextToken;       
            if($user){
             return response()->json([
                 'status'=>200,
                 'message'=>'User login Successfully',
                 'user'=>$user,
                 'token' => $token
             ],200);
            }
        }
        else{
            // if (!Hash::check('Passw0rd', $sociallogin->password)) {
            //     return  response()->json([
            //         'message' => ['These credentials do not match our records.']
            //     ], 404);
            // }
    
            $token = $sociallogin->createToken('my-app-token')->plainTextToken;
    
            return  response()->json([
                'message' => ['User login successfully.'],
                'user' => $sociallogin,
                'token' => $token
            ],200);
        }
     


    }


}
