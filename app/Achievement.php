<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected  $fillable =[
      'cv_id',
      'project_name',
      'date_achievement',
      'note',
      'link',
    ];
    public function cv()
    {
        return $this->belongsTo('App\Cv');
    }
}
