<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserInfoController extends Controller
{
    public function AllUser()
    {
        $userInfo  = UserInfo::all()->sortByDesc("id");
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('user.index', compact('userInfo', 'data'));
    }
    public function AddUser(Request $request)
    {
        UserInfo::insert([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'class' => $request->class,
            'student_id' => $request->student_id,
            'email' => $request->email,
            'district' => $request->district,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->back()->with('success', 'User inserted!');
    }
    public function Edit($id) {
        $userInfo = UserInfo::find($id);
        $users = UserInfo::all();
        return view('user.edit', compact('userInfo', 'users'));
    }
    public function Update(Request $request, $id) {
        $update = UserInfo::find($id)->update([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'class' => $request->class,
            'student_id' => $request->student_id,
            'email' => $request->email,
            'district' => $request->district,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'updated_at' => Carbon::now()
        ]);
        return Redirect()->route('all.user');
    }
    public function Delete($id) {
        $delete = UserInfo::find($id)->delete();
        return Redirect()->back();
    }
}
