<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EnquiryForm;
use Session;

class EnquiryFormController extends Controller
{
     public function Index(request $request){
    	$data = EnquiryForm::orderBy('id','desc')->get();
    	return view('Admin.EnquiryForm.Index',compact('data'));
    }

    public function Create(request $request){
    	return view('Admin.EnquiryForm.Add');
    }

    public function Store(request $request){
    	$data = new EnquiryForm;
    	$data->Title = $request->Title;
    	$data->URL = $request->URL;
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','EnquiryForm Link Submited.');
    	return redirect()->route('Admin/EnquiryForm');
    }

    public function Return(request $request){
    	return redirect('Admin/EnquiryForm');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/EnquiryForm/AllDetails');
    }

    public function AllDetails(request $request){
    	$id = Session::get('id');
    	$edit = EnquiryForm::where('id',$id)->first();
    	return view('Admin.EnquiryForm.Add',compact('edit'));
    }

    public function Update(request $request){
    	$data = EnquiryForm::where('id',$request->Update)->first();
    	$data->Remark = $request->Remark;
    	$data->save();
    	$request->session()->flash('success','EnquiryForm Remark Updated.');
    	return redirect()->route('Admin/EnquiryForm');
    }

   public function Delete(request $request){
    EnquiryForm::where('id',$request->Delete)->delete();	
   		$request->session()->flash('success','EnquiryForm Link Deleted.');
    	return redirect()->route('Admin/EnquiryForm');
   }
}
