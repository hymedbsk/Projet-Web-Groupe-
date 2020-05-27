<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

    protected $table = 'post';
    protected $primaryKey = 'Post_id';
    protected $foreign_key = 'User_id';
    protected $dates = ['Date'];
    public $timestamps = false;
    protected $fillable = ['User_id','Titre','Description'];

	public function user(){
		return $this->belongsTo('App\User','User_id');
	}
    //


        public function setCreatedAtAttribute($value){
            // to Disable updated_at
            }

}
