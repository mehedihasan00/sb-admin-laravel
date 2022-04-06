<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\CompanyInfo;
use App\Models\category;

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

    public function slider() {
        return view('pages.admin.slider');
    }
    public function product() {
        return view('pages.admin.product');
    }
    public function category() {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('pages.admin.category', compact('categories'));
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
