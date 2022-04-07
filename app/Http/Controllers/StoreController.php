<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyInfo;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Support\Carbon;


class StoreController extends Controller
{
    public function AllContent() {
        $contents = CompanyInfo::all();
        return $contents;
    }
}
