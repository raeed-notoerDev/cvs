<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category_id', 'status', 'view_id','properties','user_id','price','currency','description','images'
    ];


}
