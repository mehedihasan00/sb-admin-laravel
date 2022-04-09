<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\CompanyInfo;

class WebContentController extends Controller
{
    public function webcontent() {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        $companyInfo = CompanyInfo::where('id', '=', '1')->first();

        return view('pages.admin.webcontent', compact('data', 'companyInfo'));
    }

    public function webcontentUpdate(Request $request, $id) {
        // $validatedData = $request->validate([
            // 'companyAddress' => 'required|min:4',
            // 'facebookLink' => 'required|min:6',
            // 'linkedInLink' => 'required|min:6',
            // 'twitterLink' => 'required|min:6',
            // 'instagramLink' => 'required|min:6',
            // 'companyLogo' => 'required|mimes:jpeg,jpg,png,gif',
            // 'companyName' => 'required|min:6',
            // 'chairmanName' => 'required',
            // 'chairmanImage' => 'mimes:jpeg,jpg,png,gif|required',
            // 'chairmanMessage' => 'required|min:12',
            // 'aboutImage' => 'mimes:jpeg,jpg,png,gif|required',
            // 'aboutCompany' => 'required|min:12'
        // ]);

        // $companyLogo = $request->file('companyLogo');
        // $aboutImage = $request->file('aboutImage');
        // $chairmanImage = $request->file('chairmanImage');

        $CompanyInfo = CompanyInfo::find($id);
        $CompanyInfo->companyAddress = $request->companyAddress;
        $CompanyInfo->facebookLink = $request->facebookLink;
        $CompanyInfo->linkedInLink = $request->linkedInLink;
        $CompanyInfo->twitterLink = $request->twitterLink;
        $CompanyInfo->instagramLink = $request->instagramLink;
        $CompanyInfo->companyName = $request->companyName;
        $CompanyInfo->chairmanName = $request->chairmanName;
        $CompanyInfo->chairmanMessage = $request->chairmanMessage;
        $CompanyInfo->aboutCompany = $request->aboutCompany;
        $CompanyInfo->updated_at = $request->updated_at;
        // CompanyLogo
        $companyLogo = $request->file('companyLogo');
        if($companyLogo){
            $companyLogoName = date('YmdHi').$companyLogo->getClientOriginalName();
            $companyLogo->move('frontend/assets/img/upload/', $companyLogoName);
            if(file_exists('frontend/assets/img/upload/'.$CompanyInfo->companyLogo) AND !empty($CompanyInfo->companyLogo)){
                unlink('frontend/assets/img/upload/'.$CompanyInfo->companyLogo);
            }
            $companyLogo = 'frontend/assets/img/upload/' . $companyLogoName;
        }
        else
        {
            $companyLogo = $CompanyInfo->companyLogo; 
        }
        $CompanyInfo->companyLogo = $companyLogo;

        // aboutImage
        $aboutImage = $request->file('aboutImage');
        if($aboutImage){
            $aboutImageName = date('YmdHi').$aboutImage->getClientOriginalName();
            $aboutImage->move('frontend/assets/img/upload/', $aboutImageName);
            if(file_exists('frontend/assets/img/upload/'.$CompanyInfo->aboutImage) AND !empty($CompanyInfo->aboutImage)){
                unlink('frontend/assets/img/upload/'.$CompanyInfo->aboutImage);
            }
            $aboutImage = 'frontend/assets/img/upload/' . $aboutImageName;
        }
        else
        {
            $aboutImage = $CompanyInfo->aboutImage; 
        }
        $CompanyInfo->aboutImage = $aboutImage;

        //chairmanImage
        $chairmanImage = $request->file('chairmanImage');
        if($chairmanImage){
            $chairmanImageName = date('YmdHi').$chairmanImage->getClientOriginalName();
            $chairmanImage->move('frontend/assets/img/upload/', $chairmanImageName);
            if(file_exists('frontend/assets/img/upload/'.$CompanyInfo->chairmanImage) AND !empty($CompanyInfo->chairmanImage)){
                unlink('frontend/assets/img/upload/'.$CompanyInfo->chairmanImage);
            }
            $chairmanImage = 'frontend/assets/img/upload/' . $chairmanImageName;
        }
        else
        {
            $chairmanImage = $CompanyInfo->chairmanImage; 
        }
        $CompanyInfo->chairmanImage = $chairmanImage;


        $CompanyInfo->save();
        return Redirect()->back()->with("success", "Update successfull");
        



    //     if(isset($companyLogo) && isset($aboutImage) && isset($chairmanImage)) {
    //         // For companyLogo Proccess
    //         $companyLogo_nameGen = hexdec(uniqid());
    //         $companyLogo_imgExt = strtolower($companyLogo->getClientOriginalExtension());
    //         $companyLogo_imgName = $companyLogo_nameGen. '.' . $companyLogo_imgExt;
    //         $companyLogo_upLocation = 'frontend/assets/img/upload/';
    //         $companyLogo_lastImg = $companyLogo_upLocation.$companyLogo_imgName;
    //         $companyLogo->move($companyLogo_upLocation, $companyLogo_imgName);
            
    //         // About Image Proccess
    //         $aboutImage_nameGen = hexdec(uniqid());
    //         $aboutImage_imgExt = strtolower($aboutImage->getClientOriginalExtension());
    //         $aboutImage_imgName = $aboutImage_nameGen. '.' . $aboutImage_imgExt;
    //         $aboutImage_upLocation = 'frontend/assets/img/upload/';
    //         $aboutImage_lastImg = $aboutImage_upLocation.$aboutImage_imgName;
    //         $aboutImage->move($aboutImage_upLocation, $aboutImage_imgName);
    
    //         // Chairman Image Proccess
    //         $chairmanImage_nameGen = hexdec(uniqid());
    //         $chairmanImage_imgExt = strtolower($chairmanImage->getClientOriginalExtension());
    //         $chairmanImage_imgName = $chairmanImage_nameGen. '.' . $chairmanImage_imgExt;
    //         $chairmanImage_upLocation = 'frontend/assets/img/upload/';
    //         $chairmanImage_lastImg = $chairmanImage_upLocation.$chairmanImage_imgName;
    //         $chairmanImage->move($chairmanImage_upLocation, $chairmanImage_imgName);

    //         CompanyInfo::find($id)->update([
    //             'companyAddress' => $request->companyAddress,
    //             'facebookLink' => $request->facebookLink,
    //             'linkedInLink' => $request->linkedInLink,
    //             'twitterLink' => $request->twitterLink,
    //             'instagramLink' => $request->instagramLink,
    //             'companyLogo' => $companyLogo_lastImg,
    //             'companyName' => $request->companyName,
    //             'chairmanName' => $request->chairmanName,
    //             'chairmanImage' => $chairmanImage_lastImg,
    //             'chairmanMessage' => $request->chairmanMessage,
    //             'aboutImage' => $aboutImage_lastImg,
    //             'aboutCompany' => $request->aboutCompany,
    //             'updated_at' => Carbon::now(),
    //         ]);
    //         return Redirect()->back()->with('success', 'web contents updated with image!');
    //     } else {
    //         CompanyInfo::find($id)->update([
    //             'companyAddress' => $request->companyAddress,
    //             'facebookLink' => $request->facebookLink,
    //             'linkedInLink' => $request->linkedInLink,
    //             'twitterLink' => $request->twitterLink,
    //             'instagramLink' => $request->instagramLink,
    //             'companyName' => $request->companyName,
    //             'chairmanName' => $request->chairmanName,
    //             'chairmanMessage' => $request->chairmanMessage,
    //             'aboutCompany' => $request->aboutCompany,
    //             'updated_at' => Carbon::now(),
    //         ]);
    //         return Redirect()->back()->with('success', 'web contents updated wthout image!');
    //     }
   }
}
