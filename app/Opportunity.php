<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $fillable =[
        'status',
        'wanted_job',
        'details_job',
        'company_name',
        'specialization_id',
        'user_id',
        'city',
        'image',
        'phone_number',
        'email',
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function specialization()
    {
        return $this->belongsTo('App\Specialization');
    }

}
