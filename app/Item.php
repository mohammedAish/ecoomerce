<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	 protected $table= 'items';
	 public $timestamps = false;
    protected $fillable = [
     'name',  'price','status', 'priceOffer', 'mainImage','quantity','like','user_name','type',
    ];

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    
    
    public function users()
{
    return $this->belongsTo('App\User');
}
}