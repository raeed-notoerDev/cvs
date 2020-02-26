<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = [
        'role_name',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'users_roles', 'role_id', 'user_id');
    }

    public function permissions()
    {
        return $this->hasMany('App\Permission');
    }
}
