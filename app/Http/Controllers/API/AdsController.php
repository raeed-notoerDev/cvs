<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function index(Request $request)
    {
        return response()->json($this->list_ads(User::find(auth('api')->user()->id)->ads));
    }

    function list_ads($ads)
    {
        $myArray = [];
        for ($i = 0; $i < $ads->count(); $i++) {
            array_push($myArray, (object)[
                'name' => $ads[$i]->name,
                'department' => Category::where('id', $ads[$i]->category_id)->first()['name'],
                'date' => $ads[$i]->created_at,
                'status' => $ads[$i]->status,
                'id' => $ads[$i]->id
            ]);
        }
        return $myArray;
    }
}
