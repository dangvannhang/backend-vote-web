<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Questionare;
use App\Topic;
use App\UserStatus;
use Illuminate\Support\Facades\DB;


class UserStatusController extends Controller
{
    //

    public function  getStatusUser($id_user) {
        $user_status = UserStatus::where('id_user',$id_user)->get();

        return response()->json($user_status,200);
    }


    public function getAll() {
        $all_status = UserStatus::all();

        return response()->json($all_status,200);
    }

    public function checkUserStatus(Request $request) {

        $id_user = $request->id_user;
        $id_topic = $request->id_topic;

        $user_status = DB::table('user_status')
            ->where('id_user',$id_user)
            ->where('id_topic',$id_topic)
            ->first();

        // if exist $user_status
        if(!empty($user_status)) {
            // $user_status->delete();
            $user_status = DB::table('user_status')
            ->where('id_user',$id_user)
            ->where('id_topic',$id_topic)
            ->delete();
            // return response()-;
        } else {
            
            $new_user_status = new UserStatus;
            $new_user_status ->id_user = $id_user;
            $new_user_status -> id_topic = $id_topic;

            $new_user_status ->save();

            return response()->json($new_user_status,201);
        }
        

    }
    public function loginAdmin(Request $request) {

    }

}

