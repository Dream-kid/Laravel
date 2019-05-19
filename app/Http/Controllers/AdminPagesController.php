<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AdminPagesController extends Controller
{
    public function index()
    {
    	return view('admin.pages.index');
    }
    public function product_create()
    {
    	return view('admin.pages.product.create');
    }

    public function product_store(Request $request)
    {
    	$product=new Product;
    	
    	

    	$product->title="1111";
    	$product->description="1111";
    	
    	$product->price=11;
    	$product->quantity=11;

    	$product->slug="1111";
    	$product->category_id=1;
    	$product->brand_id=1;
    	$product->admin_id=1;
    	$product->save();
    	return redriect()->route('admin.product.create');

    }
}
