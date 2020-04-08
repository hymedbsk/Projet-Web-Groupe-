<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $table = 'event';
    protected $primaryKey = "id_Activite";
    protected $fillable = ['id_Activite', 'Local', 'Date', 'Theme', 'Organisteur'];

    public function users(){
       
        return $this->belongsToMany('App\User', 'userbyevent', 'id_Activite', 'id');    }
}
