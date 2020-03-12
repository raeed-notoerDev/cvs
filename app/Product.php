<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category_id', 'status', 'view_id', 'properties', 'user_id', 'price', 'currency', 'description'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function images()
    {
        return $this->hasMany('App\AdvertisingPictures');
    }


}
