<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Image;
use App\EnquiryForm;
use App\Video;
use App\Product;
use App\MasterCategory;
use App\MasterSubCategory;
use App\SubCategory;
use App\Certification;

class DashboardController extends Controller
{
    public function Index(request $request){
    	$banner = Banner::count();
    	$image = Image::count();
    	$enquiryform = EnquiryForm::count();
    	$video = Video::count();
    	$product = Product::count();
    	$mastercat = MasterCategory::count();
    	$mastersubcat = MasterSubCategory::count();
    	$subcat = SubCategory::count();
    	$certification = Certification::count();
    	return view('Admin.Dashboard',compact('certification','banner','image','enquiryform','video','product','mastercat','mastersubcat','subcat','certification'));
    }
}
