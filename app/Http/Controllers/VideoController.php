<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\MasterCategory;

class VideoController extends Controller
{
    public function index(request $request){
    	$cat = MasterCategory::where('Status',1)->get();
    	$data = Video::where('Status',1)->orderBy('id','desc')->get();
    	return view('Video',compact('data','cat'));
    }
}
