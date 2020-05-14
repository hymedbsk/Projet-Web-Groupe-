<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Event extends Controller
{
    protected $table = 'event';
    protected $primaryKey = 'id_Activite';
    protected $dates = ['Date'];
    const CREATED_AT = 'Date_cree';
    const DELETED_AT = 'Date_supp';
    const UPDATED_AT = 'Date_maj';
    use SoftDeletes;

    protected $fillable = ['nom', 'Local', 'Date', 'Theme', 'Organisateur'];

    public function users(){
       
        return $this->belongsToMany('App\User', 'userbyevent', 'id_Activite', 'id');    
    }


	// public function users(){
	// 	return $this->belongsToMany('App\User','User_id');
	// }

    public function setUpdatedAtAttribute($value){
        // to Disable updated_at
    }
}
