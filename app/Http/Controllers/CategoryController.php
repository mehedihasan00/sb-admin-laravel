<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category() {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('pages.admin.category', compact('categories'));
    }

    public function categoryInsert(Request $request) {
        $validatedData = $request->validate([
            'categoryName' => 'required|min:3'
        ]);
        Category::insert([
            "categoryName" => $request->categoryName,
            "created_at" => Carbon::now()
        ]);
        return redirect()->back()->with("success", "Category Insertion");
    }
    public function categoryEdit($id) {
        return "nothing to edit";
    }
    public function categoryDelete($id) {
        Category::find($id)->delete();
        return Redirect()->back()->with("success", "Category Deleted Successfully");
    }
}
