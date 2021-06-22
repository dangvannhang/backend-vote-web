<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
    //
    public $timestamps = false;
    protected $table ='selections';

    protected $fillable = [
        'id_topic', 'title_selection', 'descr_selection', 'image_selection', 'count_voted'
    ];


    // public function topic() {
    //     return $this->belongsTo('App\Topic');
    // }

    // public function user_status() {
    //     return $this->belongsTo('App\UserStatus');
    // }

}
