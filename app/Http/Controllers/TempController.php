<?php

namespace App\Http\Controllers;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class TempController extends Controller
{
    public function mainTemp() {
        $firstContents = CompanyInfo::all();
        return view('pages.website.home', compact('firstContents'));
    }
}
