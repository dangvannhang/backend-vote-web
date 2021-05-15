<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionare extends Model
{
    //
    public $timestamps = false;
    protected $table ='questionare';

    protected $fillable = [
        'id_topic', 'title', 'description', 'image', 'vote'
    ];


    public function topic() {
        return $this->belongsTo('App\Topic');
    }

    public function user_status() {
        return $this->belongsTo('App\UserStatus');
    }

}
