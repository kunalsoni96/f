<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MasterSubCategory;
use App\MasterCategory;
use Session;
use Storage;

class MasterSubCategoryController extends Controller
{
    public function Index(request $request){
    	$data = MasterSubCategory::join('master_categories','master_categories.id','master_sub_categories.MasterCategoryId')->select('master_categories.Name as MasterCategory','master_sub_categories.*')->orderBy('master_sub_categories.id','desc')->get();
    	return view('Admin.MasterSubCategory.Index',compact('data'));
    }

    public function Create(request $request){
    	$m_cat = MasterCategory::where('Status',1)->get();
    	return view('Admin.MasterSubCategory.Add',compact('m_cat'));
    }

    public function Store(request $request){
    	$data = new MasterSubCategory;
    	$data->Name = $request->Name;
    	$data->MasterCategoryId = $request->MasterCategoryId;
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','MasterSubCategory Submited.');
    	return redirect()->route('Admin/MasterSubCategory');
    }

    public function Return(request $request){
    	return redirect('Admin/MasterSubCategory');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/MasterSubCategory/Edit');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
        $m_cat = MasterCategory::where('Status',1)->get();
    	$edit = MasterSubCategory::where('id',$id)->first();
    	return view('Admin.MasterSubCategory.Add',compact('edit','m_cat'));
    }

    public function Update(request $request){
    	$data = MasterSubCategory::where('id',$request->Update)->first();
    	$data->Name = $request->Name;
    	$data->MasterCategoryId = $request->MasterCategoryId;
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','MasterSubCategory Updated.');
    	return redirect()->route('Admin/MasterSubCategory');
    }

   public function Delete(request $request){
   		$data = MasterSubCategory::where('id',$request->Delete)->first();
   			$data->delete();
   		$request->session()->flash('success','MasterSubCategory Deleted.');
    	return redirect()->route('Admin/MasterSubCategory');
   }
}
