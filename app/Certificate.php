<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable =[
        'cv_id',
        'scientific_specialization',
        'university_name',
        'country',
        'date_end',
        'note',
    ];
    public function cv()
    {
        return $this->belongsTo('App\Cv');
    }
}
