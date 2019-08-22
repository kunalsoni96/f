<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\MasterCategory;
use App\MasterSubCategory;
use App\SubCategory;
use Session;

class ProductController extends Controller
{
    public function index(request $request, $title){
    	$mcat = MasterCategory::where('Name',$title)->first();
    	$product = Product::where('MasterCategoryId',$mcat->id)->get();
    	$cat = MasterCategory::where('Status',1)->get();

    	$procat = MasterSubCategory::where('Status',1)->get();
    	$prosubcat = SubCategory::where('Status',1)->get();
    	return view('Product',compact('title','product','cat','procat','prosubcat'));
    }

    public function details(request $request){
    	$cat = MasterCategory::where('Status',1)->get();
    	return view('ProductDetails',compact('cat'));
    }

    public function searchsession(request $request){
    	Session::put('sub_cat',$request->SubCategory);
    	Session::put('cat',$request->Category);
    	Session::put('title',$request->Title);
    	return redirect('Products/Search');
    }

    public function search(request $request){
    	$sub_cat_id = Session::get('sub_cat');
    	$cat_id = Session::get('cat');
    	$title = Session::get('title');
    	$mcat = MasterCategory::where('Name',$title)->first();
    	$product = Product::where('MasterCategoryId',$mcat->id)->get();
    	$cat = MasterCategory::where('Status',1)->get();
    	$procat = MasterSubCategory::where('Status',1)->get();
    	$prosubcat = SubCategory::where('Status',1)->get();
    	$searches = Product::where('MasterSubCategoryId',$cat_id)->where('SubCategoryId',$sub_cat_id)->orderBy('id','desc')->get();
    	return view('Product',compact('title','product','cat','procat','prosubcat','searches','cat_id','sub_cat_id','title'));

    }
}
