<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function slider() {
        $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('pages.admin.slider', compact('sliders'));
    }
    public function sliderInsert(Request $request) {

        $sliderImage = $request->file('sliderImage');
        $sliderImage_nameGen = hexdec(uniqid());
        $sliderImage_imgExt = strtolower($sliderImage->getClientOriginalExtension());
        $sliderImage_imgName = $sliderImage_nameGen. '.' . $sliderImage_imgExt;
        $sliderImage_upLocation = 'frontend/assets/img/upload/slider/';
        $sliderImage_lastImg = $sliderImage_upLocation.$sliderImage_imgName;
        $sliderImage->move($sliderImage_upLocation, $sliderImage_imgName);

        Slider::insert([
            'sliderTitle' => $request->sliderTitle,
            'sliderImage' => $sliderImage_lastImg,
            'sliderStatus' => $request->sliderStatus,
            'created_at' => Carbon::now()
        ]);
        
        return Redirect()->back()->with('success', 'Slider inserted!');
    }
}
