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

        // hien tai id_options la mot array
        foreach($id_options as $id_option) {

            $user_status = new UserStatus;
            $user_status -> id_user = $id_user;
            $user_status -> id_option = $id_option;
            $user_status -> save();


            // bat dau lay lay cai option trong questionare
            $find_option = Questionare::find($id_option);
            // hien tai h da luu duoc status roi, khi luu thi dong thoi cung update lai luon value cua so lluong vote
            $vote_option = $find_option->vote;

            $find_option->vote=$vote_option + 1;

            $find_option->save();

        }

        // return ve het tat cac cac option ma user do da vote
        // return $this->getStatusUser($id_user);
        // return response()->json(200);
        return "abc";
    }

    public function getAll() {
        $all_status = UserStatus::all();

        return response()->json($all_status,200);
    }


}

