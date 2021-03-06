<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{


    public function login(Request $request) {
        $iEmail = $request->email;
        $iPass = $request->password;

        $initial_pass = 'user';

        $concat_email = explode('@',$iEmail);
        $prefix_email = $concat_email[1];
        $prefix_nab_email = 'nab.com.au';

        // đầu tiền phải query trong database thử có cái email vs password đó không, nếu có thì trả ra cả object
        $exist_user = User::where('email',$iEmail)
            ->where('password',$iPass)
            ->first();

        if(!is_null($exist_user)) { // neu ma ton tai thi return ra object do luon 

            $exist_user->token = $exist_user->createToken('App')->accessToken;
            return response()->json($exist_user,200);

        } else { // neu khong co tai khoan thi chi co tai khoan ms va tai khoan khong hop le

            if($prefix_email === $prefix_nab_email) { // kiem tra tien to email

                if($iPass === $initial_pass) {

                    $new_user = new User;
                    $new_user -> email = $iEmail;
                    $new_user ->save();

                    $new_user -> token = $new_user->createToken('App')->accessToken;

                    return response()->json($new_user,201);
                }
                else {
                    return response()->json('Login Fail',401);
                }
            }
            else {
                return response()->json('Login Fail',401);
            }
        }
    }
    public function index(){

        $users= User::all();
        return response()->json($users, 200);
    }

    public function userCheck(Request $request) {
        return response()->json($request->user('api'));
    }
    function createNewUser(Request $request){
        $email = $request->email;
        $password = $request->password;

        $new_user = new User;
        $new_user->email = $email;
        $new_user->save();

        return $new_user;
    }

}
