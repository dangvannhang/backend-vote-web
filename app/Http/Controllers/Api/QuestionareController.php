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
}
