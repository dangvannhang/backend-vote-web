<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $table = 'users';
    public $timestamps = false;
    
    protected $fillable = [
        'email'
    ];
    

    public function users_status() {
        return $this->belongsTo('App\UserStatus');
    }

}
