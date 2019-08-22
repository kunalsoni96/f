<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Product;
use App\Certification;
use App\MasterCategory;

class IndexController extends Controller
{
    public function index(request $request){
    	$banner = Banner::where('Status',1)->limit(3)->get();
    	$cert = Certification::where('Status',1)->get();
    	$product = Product::limit(6)->orderBy('id','desc')->get();
    	$cat_count = MasterCategory::count();
    	$cat = MasterCategory::where('Status',1)->get();
    	return view('Index',compact('banner','cert','product','cat_count','cat'));
    }
}
