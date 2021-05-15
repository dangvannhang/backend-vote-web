<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    //
    public $timestamps = 'false';
    protected $table = 'topic';

    protected $fillable = [
        'title', 'image', 'description'
    ];

    public function questionare() {
        return $this->hasMany('App\Questionare');
    }

}
