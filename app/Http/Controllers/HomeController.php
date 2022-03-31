<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class HomeController extends Controller
{
    public function dashboard() {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('pages.admin.index', compact('data'));
    }

    public function chart() {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('pages.admin.chart', compact('data'));
    }

    public function userRegistration() {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('pages.admin.registration', compact('data'));
    }
    public function form() {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('pages.admin.form', compact('data'));
    }
    public function table() {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('pages.admin.table', compact('data'));
    }

}
