<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Opportunity;
use App\Role;
use App\Specialization;
use App\User;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OpportunityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
        return response()->json($this->list_opportunities(User::find(auth('api')->user()->id)->opportunities));
    }

    function list_opportunities($opportunities)
    {
        $myArray = [];
        for ($i = 0; $i < $opportunities->count(); $i++) {
            array_push($myArray, (object)[
                'job_title' => $opportunities[$i]->wanted_Job,
                'department' => Specialization::where('id', $opportunities[$i]->specialization_id)->first()['specialization_name'],
                'date' => $opportunities[$i]->created_at,
                'status' => $opportunities[$i]->status,
                'id' => $opportunities[$i]->id
            ]);
        }
        return $myArray;
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'wanted_job' => 'required',
            'details_job' => 'required',
            'phone_number' => 'required|numeric',
            'company_name' => 'required',
            'specialization_id' => 'required',
            'city' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }
//        $name = 'Avatar.png';
//        if ($request->picture) {
//            $name = time() . '.' . explode('/', explode(':', substr($request->picture, 0, strpos($request->picture, ';')))[1])[1];
//            \Image::make($request->picture)->save(public_path('img/profile/') . $name);
//        }


        Opportunity::create([
            'email' => $request['email'],
            'wanted_job' => $request['wanted_job'],
            'details_job' => $request['details_job'],
            'phone_number' => $request['phone_number'],
            'company_name' => $request['company_name'],
            'status' => 'waiting',
            'city' => $request['city'],
            'specialization_id' => $request['specialization_id'],
            'user_id' => auth('api')->user()->id,
//            'image' => $name,
        ]);

        return response()->json(['message' => 'created Successfully'], 200);

    }

    public function show($id)
    {
        $opportunity = Opportunity::find($id);
        return response()->json([
            'opportunity' => $opportunity
        ]);
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
