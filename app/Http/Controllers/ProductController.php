<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductMultiple;


class ProductController extends Controller
{   
    public function product() {
        $products = Product::orderBy('id', 'desc')->get();
        $categories = Category::select('categoryName')->get();
        return view('pages.admin.product', compact('products', 'categories'));
    }
    public function productInsert(Request $request) {

        $productCover = $request->file('productCover');
        $productCover_nameGen = hexdec(uniqid());
        $productCover_imgExt = strtolower($productCover->getClientOriginalExtension());
        $productCover_imgName = $productCover_nameGen. '.' . $productCover_imgExt;
        $productCover_upLocation = 'frontend/assets/img/upload/product/';
        $productCover_lastImg = $productCover_upLocation.$productCover_imgName;
        $productCover->move($productCover_upLocation, $productCover_imgName);

        Product::insert([
            'productName' => $request->productName,
            'categoryType' => $request->categoryType,
            'prductShortDesc' => $request->prductShortDesc,
            'productDesc' => $request->productDesc,
            'productCover' => $productCover_lastImg,
            'created_at' => Carbon::now(),
            // do modification |>
            //'prodMultipleImage' => $prodMultipleImage,
        ]);

        $image = array();
        if($prodMultipleImage = $request->file('prodMultipleImage')){
            foreach($prodMultipleImage as $prodImage){
                //$image_name = md5(rand(1000,10000));
                $image_name = hexdec(uniqid());
                $ext = strtolower($prodImage->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $uploade_path = 'frontend/assets/img/upload/product/mult/';
                $image_url = $uploade_path.$image_full_name;
                $prodImage->move($uploade_path,$image_full_name);
                $image[] = $image_url;
            }
            ProductMultiple::insert([
                
                'prodMultipleImage' => implode('|', $image),
                'created_at' => Carbon::now(),
            ]);
        }
        
        return Redirect()->back()->with('success', 'product inserted!');
    }

    public function productDelete($id) {

    }
}
