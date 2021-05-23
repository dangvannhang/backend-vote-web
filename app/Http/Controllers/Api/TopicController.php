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
    public function createTopic(Request $request) {
        $topic_title = $request->input('title');
        $topic_image = $request->input('image');
        $topic_description = $request->input('description');

        $new_topic = new Topic;
        $new_topic -> title = $topic_title;
        $new_topic -> image = $topic_image;
        $new_topic -> description = $topic_description;
        $new_topic -> save();

        return response()->json($new_topic);
    }
    public function deleteTopic($id) {

        $topic=Topic::find($id);;

        $topic->delete();

        return "Delete finish";

    }
}
