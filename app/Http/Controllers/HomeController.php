<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Detail_image;


class HomeController extends Controller
{
    public function index(){
        

        $products = product::all();
        return view('main',compact('products'));
    }

    public function show_datails($id){
         
        if (request()->ajax()) { 
        $data = Detail_image::where('product_id',$id)->get()->toArray(); 
        $product = product::where('id',$id)->first();
        
         return response()->json(['data' => $data,'main_image'=>$product->Product_image]);
        }
    }
}
