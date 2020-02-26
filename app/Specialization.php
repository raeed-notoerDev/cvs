<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $table = 'specializations';
    protected $fillable =[
        'status',
        'specialization_name',
    ];
    public function opportunity()
    {
        return $this->hasOne('App\Opportunity');
    }
}
