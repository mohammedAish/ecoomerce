<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
	 protected $table= 'likes';
	 public $timestamps = false;
    protected $fillable = [
     'user_id',  'post_id','like',
    ];

   
     public function user(){
      return $this->belongsTo('App\User');
    }
    public function post(){
      return $this->belongsTo('App\Item');
    }
}