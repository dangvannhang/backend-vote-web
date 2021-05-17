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


        return $option;
    }


}
