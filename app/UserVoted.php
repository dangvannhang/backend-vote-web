<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVoted extends Model
{
    //

    public $table = 'user_voted';
    public $timestamps = false;

    protected $fillable = ['id_user','id_selection','id_topic'];

    // public function users() {
    //     return $this -> belongsTo('App\User'); 
    // }

    // public function topic() {
    //     return $this -> belongsTo('App\Topic');
    // }


}
