<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterCategory;
class ThankyouController extends Controller
{
    public function index(request $request){
    	$cat = MasterCategory::where('Status',1)->get();
    	return view('Thankyou',compact('cat'));
    }
}
