<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Questionare;

class QuestionareController extends Controller
{
    //
    public function index() {
        $questionares = Questionare::all();

        return response()->json($questionares,200);
    }

    public function getOption($id) {
        $questionare = Questionare::find($id);

        return response()->json($questionare,200);
    }

    public function getOptionQuestionare($id) {
        $questionare = Questionare::where('id_topic',$id)->get();

        return response()->json($questionare,200);
    }

    public function updateOption(Request $request,$id) {

        $status = $request->status;
        $option = Questionare::find($id);
        $current_vote = $option->vote;
        // test add something
        if($status == 'vote') {
            $option->vote = $current_vote + 1;
        } else if($status == 'unvote') {
            $option->vote = $current_vote - 1;
        }
        $option -> save();

        return response()->json($option);
    }

    public function getTopicOfOption($id_option) {

        $option = Questionare::find($id_option);
        $id_topic = $option->id_topic;
        
        return $id_topic;

    }

    public function createOption(Request $request){
        $new_option = new Questionare;
        $new_option -> id_topic = $request -> input('id_topic');
        $new_option -> title = $request -> input('title');
        $new_option -> image = $request -> input('image');
        $new_option -> description = $request -> input('description');
        $new_option -> save();

        return response()->json($new_option,201);
    }

    public function deleteOption($id) {
        $option = Questionare::find($id);
        $option->delete();

        return "Delete option finish";
    }
}
