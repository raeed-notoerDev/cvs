<?php

namespace App\Http\Controllers\API\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:member');
    }
    public function category()
    {
        return view('member.admin.category.create');
    }
    public function property()
    {
        return view('member.admin.category.prop');
    }
}
