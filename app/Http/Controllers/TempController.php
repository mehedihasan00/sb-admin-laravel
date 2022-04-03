<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function mainTemp() {
        return view('pages.website.home');
    }
}
