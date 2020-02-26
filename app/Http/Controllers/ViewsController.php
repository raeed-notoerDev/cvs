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

    public function index_advertise()
    {
        return response()->json([
            'properties' => $this->list_properties(Product::where('status', 'active')->get())
        ]);
    }

    function list_properties($properties)
    {
        $myArray = [];
        for ($i = 0; $i < $properties->count(); $i++) {
            array_push($myArray, (object)[
                'name' => $properties[$i]->name,
                'properties' => unserialize($properties[$i]->properties),
            ]);
        }
        return $myArray;
    }

}
