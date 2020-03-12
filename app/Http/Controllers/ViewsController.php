<?php

namespace App\Http\Controllers;


use App\Cv;
use App\Product;
use App\Specialization;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function job()
    {
        $specializations = Specialization::where('status', '<>', 'block')->get();
        error_log($specializations->count());
        return view('general.jobs', compact('specializations'));
    }

    public function cv()
    {
        $cvs = Cv::where('status', '<>', 'block')->get();
        error_log($cvs->count());
        return view('general.cv', compact('cvs'));
    }

    public function create_ad()
    {
        return view('general.adv.create');
    }

    public function index_adv()
    {
        return view('general.adv.index');
    }

    public function details_ad($id)
    {
        return view('general.adv.details');
    }

    public function index_advertise()
    {
        return response()->json([
            'properties' => $this->list_products(Product::where('status', 'active')->get())
        ]);
    }

    public function show_ad($id)
    {
        return response()->json([
            'properties' => $this->list_properties(Product::where('status', 'active')->where('id', $id)->first())
        ]);
    }

    function list_properties($properties)
    {
        $myArray = [];
        array_push($myArray, (object)[
            'name' => $properties->name,
            'properties' => unserialize($properties->properties),

        ]);
        return $myArray;
    }

    function list_products($properties)
    {
        $myArray = [];
        for ($i = 0; $i < $properties->count(); $i++) {
            array_push($myArray, (object)[
                'name' => $properties[$i]->name,
                'properties' => unserialize($properties[$i]->properties),
                'id' => $properties[$i]->id
            ]);
        }
        return $myArray;
    }

}
