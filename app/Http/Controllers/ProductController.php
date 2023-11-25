<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
class ProductController extends Controller
{
    public function index()  {
        $categories = Category::get();
        $brands = Brand::get();
        $products = Product::get();
        return view('home',compact('brands','categories','products'));
    }


    public function filter(Request $request)
    {
        $categories = $request->input('categories');
        $brands = $request->input('brands');
        // dd($categories,$brands);
        $discount = $request->input('discount');
        $productsQuery = Product::query();

        if ($categories) {
            $productsQuery->whereIn('product_category', $categories);
        }

        if ($brands) {
            $productsQuery->whereIn('product_brand', $brands);
        }

        if ($discount) {
            $productsQuery->whereIn('product_has_discount', $discount);
        }

        $products = $productsQuery->get();
        if($products->isEmpty()){
            return response()->json(['status' => false,'data' => [],]);
        }else{
            // return response()->json($products);
            return response()->json(['status' => true,'data' => $products,]);
        }
        
    }
}
