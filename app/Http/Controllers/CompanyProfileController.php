<?php

namespace App\Http\Controllers;
use App\MasterCategory;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index(request $request){
    	$cat = MasterCategory::where('Status',1)->get();
    	return view('CompanyProfile',compact('cat'));
    }
}
