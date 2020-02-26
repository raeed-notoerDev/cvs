<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'cv_id',
        'language_name',
        'level_read',
        'level_write',
        'level_conversation',
    ];

    public function cv()
    {
        return $this->belongsTo('App\Cv');
    }
}
