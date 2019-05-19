<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class pagescontroller extends Controller
{
    public function index()
    {
      return view('Pages.index');
    }
     public function contact()
    {
      return view('Pages.contact');
    }
     public function details()
    {
      return view('Pages.product.details');
    }

    public function products()
    {
    	$products = product::orderBy('id','desc')->get();
      return view('Pages.product.products')->with('products',$products);
    }
}
