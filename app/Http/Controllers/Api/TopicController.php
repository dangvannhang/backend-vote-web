<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
    //

    public function index() {
        $topics = Topic::all();

        return response()->json($topics,200);
    }

    public function getId($id) {
        $topic = Topic::find($id);

        return response()->json($topic,200);
    }
}
