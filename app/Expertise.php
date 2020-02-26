<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    protected $fillable = [
        'cv_id',
        'job_title',
        'company_name_owner',
        'date_start',
        'date_end',
        'note',
    ];

    public function cv()
    {
        return $this->belongsTo('App\Cv');
    }
}
