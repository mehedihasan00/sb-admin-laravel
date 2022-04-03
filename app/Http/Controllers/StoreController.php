<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyInfo;
use Illuminate\Support\Carbon;


class StoreController extends Controller
{
    public function AllContent() {
        $contents = CompanyInfo::all();
        return $contents;
    }

    public function homeView(Request $request) {
    //   $validatedData = $request->validate([
    //     'logo_image' => 'mimes:jpeg,jpg,png,gif|required',
    //     'chairman_name' => 'required|min:4',
    //     'chairman_message' => 'required|min:12',
    //     'slider_image' => 'mimes:jpeg,jpg,png,gif|required',
    //   ]);
      return $request;
    }
}
