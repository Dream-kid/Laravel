<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class pagescontroller extends Controller
{

     public function contact()
    {
      return view('Pages.contact');
    }
     public function details()
    {
      return view('Pages.product.details');
    }
     public function about()
    {
      return view('Pages.product.about');
    }
     public function insert()
    {
      return view('Pages.product.insert');
    }
     public function insertthem()
    {
      return view('Pages.product.insertthem');
    }
     public function update_name()
    {
      return view('Pages.product.update_name');
    }
     public function update_email()
    {
      return view('Pages.product.update_email');
    }
     public function update()
    {
      return view('Pages.product.update');
    }
     public function delete()
    {
      return view('Pages.product.delete');
    }
     public function deletethem()
    {
      return view('Pages.product.deletethem');
    }
    public function leaderboard()
    {
      return view('Pages.product.leaderboard');
    }
    public function products()
    {
    	$products = product::orderBy('user_id','asc')->get();
      return view('Pages.product.products')->with('products',$products);
    }
}
