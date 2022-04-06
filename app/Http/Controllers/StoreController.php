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

    public function sliderUpdate(Request $request) {
        return $request;
    }


    public function homeViewUpdate(Request $request, $id) {
        $validatedData = $request->validate([
            'companyAddress' => 'required|min:4',
            'facebookLink' => 'required|min:6',
            'linkedInLink' => 'required|min:6',
            'twitterLink' => 'required|min:6',
            'instagramLink' => 'required|min:6',
            'companyLogo' => 'required|mimes:jpeg,jpg,png,gif',
            'companyName' => 'required|min:6',
            'chairmanName' => 'required',
            'chairmanImage' => 'mimes:jpeg,jpg,png,gif|required',
            'chairmanMessage' => 'required|min:12',
            'aboutImage' => 'mimes:jpeg,jpg,png,gif|required',
            'aboutCompany' => 'required|min:12'
        ]);

        $companyLogo = $request->file('companyLogo');
        $aboutImage = $request->file('aboutImage');
        $chairmanImage = $request->file('chairmanImage');
        
        // For companyLogo Proccess
        $companyLogo_nameGen = hexdec(uniqid());
        $companyLogo_imgExt = strtolower($companyLogo->getClientOriginalExtension());
        $companyLogo_imgName = $companyLogo_nameGen. '.' . $companyLogo_imgExt;
        $companyLogo_upLocation = 'frontend/assets/img/upload/';
        $companyLogo_lastImg = $companyLogo_upLocation.$companyLogo_imgName;
        $companyLogo->move($companyLogo_upLocation, $companyLogo_imgName);
        
        // About Image Proccess
        $aboutImage_nameGen = hexdec(uniqid());
        $aboutImage_imgExt = strtolower($aboutImage->getClientOriginalExtension());
        $aboutImage_imgName = $aboutImage_nameGen. '.' . $aboutImage_imgExt;
        $aboutImage_upLocation = 'frontend/assets/img/upload/';
        $aboutImage_lastImg = $aboutImage_upLocation.$aboutImage_imgName;
        $aboutImage->move($aboutImage_upLocation, $aboutImage_imgName);

        //Chairman Image Proccess
        $chairmanImage_nameGen = hexdec(uniqid());
        $chairmanImage_imgExt = strtolower($chairmanImage->getClientOriginalExtension());
        $chairmanImage_imgName = $chairmanImage_nameGen. '.' . $chairmanImage_imgExt;
        $chairmanImage_upLocation = 'frontend/assets/img/upload/';
        $chairmanImage_lastImg = $chairmanImage_upLocation.$chairmanImage_imgName;
        $chairmanImage->move($chairmanImage_upLocation, $chairmanImage_imgName);
        
        CompanyInfo::find($id)->update([
            'companyAddress' => $request->companyAddress,
            'facebookLink' => $request->facebookLink,
            'linkedInLink' => $request->linkedInLink,
            'twitterLink' => $request->twitterLink,
            'instagramLink' => $request->instagramLink,
            'companyLogo' => $companyLogo_lastImg,
            'companyName' => $request->companyName,
            'chairmanName' => $request->chairmanName,
            'chairmanImage' => $chairmanImage_lastImg,
            'chairmanMessage' => $request->chairmanMessage,
            'aboutImage' => $aboutImage_lastImg,
            'aboutCompany' => $request->aboutCompany,
            'updated_at' => Carbon::now(),
        ]);
        return $request ;
    }
}
