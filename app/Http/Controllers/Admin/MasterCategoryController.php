<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MasterCategory;
use Session;
use Storage;

class MasterCategoryController extends Controller
{
    public function Index(request $request){
    	$data = MasterCategory::orderBy('id','desc')->get();
    	return view('Admin.MasterCategory.Index',compact('data'));
    }

    public function Create(request $request){
    	return view('Admin.MasterCategory.Add');
    }

    public function Store(request $request){
    	$data = new MasterCategory;
    	$data->Name = $request->Name;
    	$data->Status = $request->Status;
        if($request->hasfile('Image')){
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filepath = 'categories/'.$name;
            Storage::disk('s3')->put($filepath,file_get_contents($file));
            $data->Image = $name;
        }
    	$data->save();
    	$request->session()->flash('success','MasterCategory Submited.');
    	return redirect()->route('Admin/MasterCategory');
    }

    public function Return(request $request){
    	return redirect('Admin/MasterCategory');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/MasterCategory/Edit');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
    	$edit = MasterCategory::where('id',$id)->first();
    	return view('Admin.MasterCategory.Add',compact('edit'));
    }

    public function Update(request $request){
    	$data = MasterCategory::where('id',$request->Update)->first();
    	$data->Name = $request->Name;
    	$data->Status = $request->Status;
        $filepath = 'categories/'.$data->Image;
        if($request->hasfile('Image')){
            if(Storage::disk('s3')->exists($filepath)){
            Storage::disk('s3')->delete($filepath);
                }
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filepath = 'categories/'.$name;
            Storage::disk('s3')->put($filepath,file_get_contents($file));
            $data->Image = $name;
        }
    	$data->save();
    	$request->session()->flash('success','MasterCategory Updated.');
    	return redirect()->route('Admin/MasterCategory');
    }

   public function Delete(request $request){
   		$data = MasterCategory::where('id',$request->Delete)->first();
        $filepath = 'categories/'.$data->Image;
        if(Storage::disk('s3')->exists($filepath)){
            Storage::disk('s3')->delete($filepath);
   			$data->delete();
        }
        else{
            $data->delete();
        }
   		$request->session()->flash('success','MasterCategory Deleted.');
    	return redirect()->route('Admin/MasterCategory');
   }
}
