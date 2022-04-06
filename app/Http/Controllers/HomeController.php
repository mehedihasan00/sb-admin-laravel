<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\CompanyInfo;

class HomeController extends Controller
{
    public function dashboard() {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        $count = Admin::all();
        $count = count($count);
        return view('pages.admin.index', compact('data', 'count'));
    }

    public function edit_content() {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        $companyInfo = CompanyInfo::where('id', '=', '1')->first();

        return view('pages.admin.edit_content', compact('data', 'companyInfo'));
    }

    public function edit_slider() {
        return view('pages.admin.edit_slider');
    }
    public function product() {
        return view('pages.admin.product');
    }
    public function category() {
        return view('pages.admin.category');
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
