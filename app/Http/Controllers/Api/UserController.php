<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    // public function login(Request $request, User $user) {
        
    //     $email = $request -> input('email');
    //     $array_email = explode("@",$email);

    //     $prefix_email = $array_email[1];
    //     $nab_prefix = 'nab.com.au';

    //     if( ((string)$prefix_email) == ( (string)$nab_prefix ) ){
            
    //         $user_email = User::where('email',$email);

    //         // if email exist
    //         if($user_email->count()) {

    //             $user_exist=User::where('email',$email)->first();
                  
    //             // return $user_exist;

    //             return response()->json($user_exist,200);
    //         } 
    //         // else email not exists and create a new user for this email
    //         else {

    //             $new_user = new User;
    //             $new_user -> email = $email;
    //             $new_user -> save();

    //             // return response()->json($new_user,201);
    //             return $new_user;
    //         }
    //     } else {
    //         // return response()->json('false',403);
    //         return response()->json('false',401);
    //     }
        
    // }

    public function login(Request $request) {
        $iEmail = $request->email;
        $iPass = $request->password;

        $initial_pass = 'Pas@word123!';

        $concat_email = explode('@',$iEmail);
        $prefix_email = $concat_email[1];
        $prefix_nab_email = 'nab.com.au';

        // đầu tiền phải query trong database thử có cái email vs password đó không, nếu có thì trả ra cả object
        $exist_user = User::where('email',$iEmail)
            ->where('password',$iPass)
            ->first();
        if(!empty($exist_user)) { // neu ma ton tai thi return ra object do luon 
            return response()->json($exist_user,200);
        } else { // neu khong co tai khoan thi chi co tai khoan ms va tai khoan khong hop le
            if($prefix_email === $prefix_nab_email) { // kiem tra tien to email
                if($iPass === $initial_pass) {

                    $new_user = new User;
                    $new_user -> email = $iEmail;

                    $new_user ->save();

                    return response()->json($new_user,201);
                }
                else {
                    return response()->json('Enter correct password',401);
                }
            }
            else {
                return response()->json('No permission',403);
            }
        }
    }

    public function loginAdmin(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

        $admin = User::where('email',$email)
            ->where('password' , $password)
            ->where('role','admin')
            ->first();
         
        // return $admin;
        if($admin) {
            return response()->json($admin,200);
        }
        else {
            return response()->json('false',401);
        }
    }

    public function showUser() {
        $users = User::all();

        return response()->json($users,200);
    }
}
