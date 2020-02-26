<?php

namespace App\Http\Controllers\API\admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Property;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:member');
    }

    public function index()
    {
        return response()->json(\App\Category::where('category_id', null)->where('status', 'active')->get());
    }

    public function store(Request $request)
    {
//        if ($request['properties']) {
//            return ($request['properties']);
//        }
        Category::create([
            'name' => $request['name'],
            'category_id' => $request['category_id'],
            'status' => 'active',
            'properties' => serialize([$request['properties']]),
        ]);
        return response()->json('success');
    }

    public function show($id)
    {
        return response()->json(\App\Category::where('category_id', $id)->get());
    }

    public function storeProperties(Request $request)
    {
//        if ($request['properties']) {
//            return ($request['properties']);
//        }
        Property::create([
            'name' => $request['name'],
            'status' => 'active',
            'properties' => serialize([$request['properties']]),
        ]);
        return response()->json('success');
    }

    public function indexProperties()
    {
        return response()->json([
            'properties' => $this->list_properties(Property::all())
        ]);
    }

    function list_properties($properties)
    {
        $myArray = [];
        for ($i = 0; $i < $properties->count(); $i++) {
            array_push($myArray, (object)[
                'name' => $properties[$i]->name,
                'properties' => [
                    $properties[$i]->name => [
                        ['status' => 0], ['property' => unserialize($properties[$i]->properties)[0]], ['display' => '']
                    ]
                ],
            ]);
        }
        return $myArray;
    }
}
