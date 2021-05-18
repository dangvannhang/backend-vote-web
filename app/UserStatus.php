<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    //

    public $table = 'user_status';
    public $timestamps = false;

    protected $fillable = ['id_user','id_option'];

    public function users() {
        return $this -> belongsTo('App\User'); 
    }

    public function questionare() {
        return $this -> belongsTo('App\Questionare');
    }


}
