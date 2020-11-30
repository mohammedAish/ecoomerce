<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	 protected $table= 'images';
	 public $timestamps = false;
    protected $fillable = [
     'url',  'imageable_type','imageable_id',
    ];

     public function imageable()
    {
        return $this->morphTo();
    }
}