<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Questionare;
use App\Topic;
use App\UserStatus;

class UserStatusController extends Controller
{
    //

    public function  getStatusUser($id_user) {
        $user_status = UserStatus::where('id_user',$id_user)->get();

        return response()->json($user_status,200);
    }

    public function addUserStatus(Request $request) {

        $id_user = $request->id_user;
        $id_options = $request->id_option;

        // $user_status = new UserStatus;
        // $user_status -> id_user = $id_user;
        // $user_status -> id_option = $id_option;
        // $user_status -> save();

        // return response()->json($user_status,201);
        

        // hien tai id_options la mot array
        foreach($id_options as $id_option) {
            $user_status = new UserStatus;
            $user_status -> id_user = $id_user;
            $user_status -> id_option = $id_option;
            $user_status -> save();
        }



        // return response()->json($id_option);

        return $this->getStatusUser($id_user);
    }

}




