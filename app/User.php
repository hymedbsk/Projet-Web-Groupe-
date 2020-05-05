<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = "users";
    public $primaryKey = "id";
const CREATED_AT ="cree_le";
const DELETED_AT = 'supprimer_le';
const UPDATED_AT = 'mis_a_jour_le';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'matricule','nom', 'prenom', 'email', 'password', 'Type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setUpdatedAtAttribute($value)
{
    // to Disable updated_at
}

public function posts(){


    return $this->hasMany('App\Post');
    }

}
