<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    //eigencode
    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     //type toegevoegd
    protected $fillable = [
        'name', 'email', 'password', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this -> hasMany('App\bericht');
    }

    //nieuwefucntie voor admin
    public function isAdmin()
{
    return $this->type === self::ADMIN_TYPE;
}

public function bericht(){
    return $this->belongsTo('App\bericht', 'user_id');
}

   

}
