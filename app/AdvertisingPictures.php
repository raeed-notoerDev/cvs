<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvertisingPictures extends Model
{
    protected $fillable = ['status', 'image', 'adv_id'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
