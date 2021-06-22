<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Selection;
use App\UserVoted;

class SelectionController extends Controller
{
    //
    public function index() {
        $selections = Selection::all();

        return response()->json($selections,200);
    }

    public function getId($id) {
        $selection = Selection::find($id);

        return response()->json($selection,200);
    }

    public function getSelectionTopic($id) {
        $selections = Selection::where('id_topic',$id)->get();

        return response()->json($selections, 200);
    }

    public function voteSelection(Request $request) {
        $id_selection = $request->id_selection;
        $id_topic = $request->id_topic;
        $id_user = $request -> id_user;

        // find and increase count vote
        $selection = Selection::find($id_selection);
        $current_vote = $selection->count_voted;
        $selection -> count_voted = $current_vote + 1; 
        $selection -> save();
        
        // save data for user_voted table
        $user_voted = new UserVoted;
        $user_voted -> id_user = $id_user;
        $user_voted -> id_selection = $id_selection;
        $user_voted -> id_topic = $id_topic;
        $user_voted -> save();

        // get all selection in this topic
        $selections = Selection::where('id_topic',$id_topic)->get();

        return response()->json($selections, 200);
    }


    public function createSelection(Request $request){
        $new_option = new Selection;
        $new_option -> id_topic = $request -> input('id_topic');
        $new_option -> title_selection = $request -> input('title_selection');
        $new_option -> image_selection = $request -> input('image_selection');
        $new_option -> descr_selection = $request -> input('descr_selection');
        $new_option -> save();

        return response()->json($new_option,201);
    }
    
}
