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
        $multImages = ProductMultiple::orderBy('id', 'desc')->get();
        return view('pages.admin.product', compact('products', 'categories', 'multImages'));
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
        ]);

        $prodMultipleImage = $request->file('prodMultipleImage');
        foreach($prodMultipleImage as $prodImage) {
            $image_name = hexdec(uniqid());
            $image_ext = strtolower($prodImage->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$image_ext;
            $upload_path = 'frontend/assets/img/upload/product/mult/';
            $image_url = $upload_path.$image_full_name;
            $prodImage->move($upload_path, $image_full_name);

            // Product Id
            $productId = Product::orderBy('id', 'DESC')->first();
            ProductMultiple::insert([
                'productId' => $productId->id,
                'prodMultipleImage' => $image_url,
                'created_at' => Carbon::now(),
            ]);
        }
        return Redirect()->back()->with('success', 'product inserted!');
    }

    public function productDelete($id) {

    }
}
