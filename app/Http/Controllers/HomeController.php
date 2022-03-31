<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard() {
        return view('pages.admin.index');
    }

    public function chart() {
        return view('pages.admin.chart');
    }

}
