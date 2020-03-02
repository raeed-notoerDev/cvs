<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function show($id)
    {
        return response()->json([
            'properties' => unserialize(Category::where('id', $id)->first()['properties'])
        ]);
    }

    public function store(Request $request)
    {
//        return ($request['properties'](array));
//        $this->list_properties((array)$request['properties']);
//        return ((array)$request['properties']);
        $product = Product::create([
            'name' => $request['name'],
            'status' => 'active',
            'properties' => serialize($request['properties']),
            'category_id' => $request['category_id'],
            'user_id' => auth()->user()->id
        ]);
//        if ($product)
//            return response()->json([
//                'data' => 'success'
//            ]);
//        else
//            return response()->json([
//                'data' => 'field'
//            ]);
        return $product;
    }


}
