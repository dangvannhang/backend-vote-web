<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function login(Request $request, User $user) {
        
        $email = $request -> input('email');
        $array_email = explode("@",$email);

        
        $prefix_email = $array_email[1];
        $nab_prefix = 'nab.com.au';

        // return $prefix_email;

        if( ((string)$prefix_email) == ( (string)$nab_prefix ) ){
            
            $user_email = User::where('email',$email);

            // if email exist
            if($user_email->count()) {

                $user_exist=User::where('email',$email)
                    ->get();
                // return $user_exist;

                return response()->json($user_exist,200);
            } 
            // else email not exists and create a new user for this email
            else {

                $new_user = new User;

                $new_user -> email = $email;
                $new_user -> save();

                // return response()->json($new_user,201);
                return $new_user;
                
            }

        } else {
            // return response()->json('false',403);
            return response()->json('false',401);
        }
        
    }



}
