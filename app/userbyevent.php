<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userbyevent extends Model
{
    protected $table = 'userbyevent';
    protected $fillable =['id', 'id_Activite'];
}
