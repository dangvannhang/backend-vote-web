<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Selection;
use App\Topic;
use App\UserVoted;
use Illuminate\Support\Facades\DB;


class UserVotedController extends Controller
{
    // get all infor of user about vote
    public function  getInforUserVoted($id_user) {
        $user_status = UserVoted::where('id_user',$id_user)->get();

        return response()->json($user_status,200);
    }


    // get all item in user_voted table
    public function getAll() {
        $all_status = UserVoted::all();

        return response()->json($all_status,200);
    }
}

