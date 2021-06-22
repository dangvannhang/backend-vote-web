<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    //
    public $timestamps = false;
    protected $table = 'topics';

    protected $fillable = [
        'title_topic', 'image_topic', 'descr_topic'
    ];

    // public function questionare() {
    //     return $this->hasMany('App\Questionare');
    // }

}
