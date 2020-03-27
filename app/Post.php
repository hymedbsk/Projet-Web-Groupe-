<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

    protected $table = 'post';
    protected $primary_key = 'Post_id';
    protected $foreign_key = 'User_id';
    protected $dates = ['Date'];

    protected $fillable = ['User_id','Titre','Description'];

	public function user(){
		return $this->belongsTo('App\User','User_id');
	}
    //
    public function setUpdatedAtAttribute($value){
        // to Disable updated_at
        }

        public function setCreatedAtAttribute($value){
            // to Disable updated_at
            }

}
