<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnquiryForm;
use App\MasterCategory;

class ContactController extends Controller
{
    public function index(request $request){
        $cat = MasterCategory::where('Status',1)->get();
    	return view('Contact',compact('cat'));
    }

    public function redirect(){
    	return redirect('/');
    }

    public function store(request $request){
    	$data = new EnquiryForm;
    	$data->Name = $request->Name;
    	$data->Email = $request->Email;
    	$data->Mobile = $request->Mobile;
    	$data->URL = $request->URL;
    	$data->Message = $request->Message;
    	$data->Product = $request->Product;
    	$data->save();
    	return redirect()->route('Thankyou');
    }
}
