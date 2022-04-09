<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\CompanyInfo;

class WebContentController extends Controller
{
    public function webcontent() {
        $companyInfo = CompanyInfo::first();
        
        return view('pages.admin.webcontent', compact('companyInfo'));
    }

    public function webcontentUpdate(Request $request, $id) {
        $validatedData = $request->validate([
            'companyAddress' => 'min:4',
            'facebookLink' => 'min:6',
            'linkedInLink' => 'min:6',
            'twitterLink' => 'min:6',
            'instagramLink' => 'min:6',
            'companyLogo' => 'mimes:jpeg,jpg,png,gif',
            'companyName' => 'min:6',
            'chairmanName' => 'min:6',
            'chairmanImage' => 'mimes:jpeg,jpg,png,gif',
            'chairmanMessage' => 'min:12',
            'aboutImage' => 'mimes:jpeg,jpg,png,gif',
            'aboutCompany' => 'min:12'
        ]);

        $CompanyInfo = CompanyInfo::FindOrFail($id);
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
            //$companyLogo = 'frontend/assets/img/upload/' . $companyLogoName;
            $CompanyInfo['companyLogo'] = $companyLogoName;
        }

        // aboutImage
        $aboutImage = $request->file('aboutImage');
        if($aboutImage){
            $aboutImageName = date('YmdHi').$aboutImage->getClientOriginalName();
            $aboutImage->move('frontend/assets/img/upload/', $aboutImageName);
            if(file_exists('frontend/assets/img/upload/'.$CompanyInfo->aboutImage) AND !empty($CompanyInfo->aboutImage)){
                unlink('frontend/assets/img/upload/'.$CompanyInfo->aboutImage);
            }
            $CompanyInfo['aboutImage'] = $aboutImageName;
        }

        //chairmanImage
        $chairmanImage = $request->file('chairmanImage');
        if($chairmanImage){
            $chairmanImageName = date('YmdHi').$chairmanImage->getClientOriginalName();
            $chairmanImage->move('frontend/assets/img/upload/', $chairmanImageName);
            if(file_exists('frontend/assets/img/upload/'.$CompanyInfo->chairmanImage) AND !empty($CompanyInfo->chairmanImage)){
                unlink('frontend/assets/img/upload/'.$CompanyInfo->chairmanImage);
            }
            $CompanyInfo['chairmanImage'] = $chairmanImageName;
        }


        $CompanyInfo->save();
        return Redirect()->back()->with("success", "Update successfull");
   }
}
