<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:member', ['except' => ['logout']]);
    }
    public function showLoginForm()
    {
        return view('member.login');
    }
    public function login(Request $request)
    {
//         Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

//        // Attempt to log the user in
        if (Auth::guard('member')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('member.dashboard'));
//            return view('member.index');
        }
        // if unsuccessful, then redirect back to the login with the form data
//        return redirect()->back()->withInput($request->only('email', 'remember'));
        return response()->json(Auth::guard('member'));
    }
    public function logout()
    {
        Auth::guard('member')->logout();
        return redirect('/member');
    }
}
