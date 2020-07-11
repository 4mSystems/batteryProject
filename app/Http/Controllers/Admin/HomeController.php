<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\product;

class HomeController extends Controller
{
    
    public function home()
	{
     
        $products = product::all();
        
		return view('Home',compact('products'));
	}
}
