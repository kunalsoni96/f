<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\MasterCategory;


class ImageController extends Controller
{
    public function index(request $request){
    	$cat = MasterCategory::where('Status',1)->get();
    	$image  = Image::where('Status',1)->orderBy('id','desc')->get();
    	return view('Image',compact('image','cat'));
    }
}
