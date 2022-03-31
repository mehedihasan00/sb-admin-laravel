<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class MainController extends Controller
{
    function login() {
        return view('auth.login');
    }
    function register() {
        return view('auth.register');
    }
    function save(Request $request) {
        // Validate requests
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|max: 12'
        ]);
        // Insert Register Data
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now()
        ]);
        return Redirect()->back()->with('success', 'New User Successfully has been recorded to database!');
    }
    function check(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $userInfo = Admin::where('email', '=', $request->email)->first();
        if(!$userInfo) {
            return back()->with('fail', 'we do not recognize your email address');
        } else {
            // check password
            if(Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            } else {
                return back()->with('fail', 'Password is incorrect');
            }
        }
    }

    function logout() {
        if(session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard1() {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('pages.admin.dashboard1', compact('data'));
        
    }
}
