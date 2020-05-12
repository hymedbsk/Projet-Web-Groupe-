<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    protected $table = 'event';
    protected $primaryKey = 'id_Activite';
    protected $dates = ['Date'];
    const CREATED_AT = 'Date_cree';
    const DELETED_AT = 'Date_supp';
    const UPDATED_AT = 'Date_maj';
    use SoftDeletes;

    protected $fillable = ['nom', 'Local', 'Date', 'Theme', 'Organisteur'];

	public function user(){
		return $this->belongsTo('App\User','User_id');
	}

        public function setUpdatedAtAttribute($value){
            // to Disable updated_at
        }


}

