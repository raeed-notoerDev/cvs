<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $fillable = [
        'job_title',
        'user_id',
        'specialization_id',
        'name',
        'nationality',
        'phone_number',
        'email',
        'birth_day',
        'birth_month',
        'birth_year',
        'address',
        'hobbies',
        'image',
        'country_residence',
        'note',
        'interests',
        'status',
    ];

    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function specialization()
    {
        return $this->belongsTo('App\Specialization');
    }

    public function expertises()
    {
        return $this->hasMany('App\Expertise');
    }

    public function languages()
    {
        return $this->hasMany('App\Language');
    }

    public function certificates()
    {
        return $this->hasMany('App\Certificate');
    }

    public function achievements()
    {
        return $this->hasMany('App\Achievement');
    }
}
