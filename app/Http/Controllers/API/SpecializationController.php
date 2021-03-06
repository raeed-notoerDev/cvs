<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{

    public function index()
    {
        return response()->json([
            'specializations' => Specialization::where('status', '<>', 'block')->get()
        ]);
    }

    public function store(Request $request)
    {

    }


    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
