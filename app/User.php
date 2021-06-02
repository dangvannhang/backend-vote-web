<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

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
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function users_status() {
        return $this->belongsTo('App\UserStatus');
    }

}
