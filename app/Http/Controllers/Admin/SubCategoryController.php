<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubCategory;
use App\MasterCategory;
use App\MasterSubCategory;
use Session;
use Storage;

class SubCategoryController extends Controller
{
    public function Index(request $request){
    	$data = SubCategory::join('master_sub_categories','master_sub_categories.id','sub_categories.MasterSubCategoryId')->join('master_categories','master_categories.id','sub_categories.MasterCategoryId')->select('master_categories.Name as MasterCategory','master_sub_categories.Name as MasterSubCategory','sub_categories.*')->orderBy('sub_categories.id','desc')->get();
    	return view('Admin.SubCategory.Index',compact('data'));
    }

    public function Create(request $request){
    	$m_sub_cat = MasterSubCategory::where('Status',1)->get();
    	$m_cat = MasterCategory::where('Status',1)->get();
    	return view('Admin.SubCategory.Add',compact('m_cat','m_sub_cat'));
    }

    public function Store(request $request){
    	$data = new SubCategory;
    	$data->Name = $request->Name;
    	$data->MasterSubCategoryId = $request->MasterSubCategoryId;
    	$data->MasterCategoryId = $request->MasterCategoryId;
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','SubCategory Submited.');
    	return redirect()->route('Admin/SubCategory');
    }

    public function Return(request $request){
    	return redirect('Admin/SubCategory');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/SubCategory/Edit');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
        $m_sub_cat = MasterSubCategory::where('Status',1)->get();
        $m_cat = MasterCategory::where('Status',1)->get();
    	$edit = SubCategory::where('id',$id)->first();
    	return view('Admin.SubCategory.Add',compact('edit','m_cat','m_sub_cat'));
    }

    public function Update(request $request){
    	$data = SubCategory::where('id',$request->Update)->first();
    	$data->Name = $request->Name;
    	$data->MasterCategoryId = $request->MasterCategoryId;
    	$data->MasterSubCategoryId = $request->MasterSubCategoryId;
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','SubCategory Updated.');
    	return redirect()->route('Admin/SubCategory');
    }

   public function Delete(request $request){
   		$data = SubCategory::where('id',$request->Delete)->first();
   			$data->delete();
   		$request->session()->flash('success','SubCategory Deleted.');
    	return redirect()->route('Admin/SubCategory');
   }

   public function Change(request $request){
        $data = MasterSubCategory::where('MasterCategoryId',$request->id)->get();
        $d = '';
        foreach($data as $row){
       $d .= '<option value="'.$row->id.'">'.$row->Name.'</option>';
       
        }
         return $d;
      
   }
}
