<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Certification;
use Session;
use Storage;

class CertificationController extends Controller
{
    public function Index(request $request){
    	$data = Certification::orderBy('id','desc')->get();
    	return view('Admin.Certification.Index',compact('data'));
    }

    public function Create(request $request){
    	return view('Admin.Certification.Add');
    }

    public function Store(request $request){
    	$data = new Certification;
    	$data->Title = $request->Title;
    	if($request->hasfile('Image')){
    		$file = $request->file('Image');
    		$name = time().$file->getClientOriginalName();
    		$filepath = 'certifications/'.$name;
    		Storage::disk('s3')->put($filepath,file_get_contents($file));
    		$data->Image = $name;
    	}
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','File Submited.');
    	return redirect()->route('Admin/Certification');
    }

    public function Return(request $request){
    	return redirect('Admin/Certification');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/Certification/Edit');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
    	$edit = Certification::where('id',$id)->first();
    	return view('Admin.Certification.Add',compact('edit'));
    }

    public function Update(request $request){
    	$data = Certification::where('id',$request->Update)->first();
    	$data->Title = $request->Title;
    	$data->Status = $request->Status;
    	if($request->hasfile('Image')){
    		 if(Storage::disk('s3')->exists($filepath)){
            Storage::disk('s3')->delete($filepath);
                }
    		$file = $request->file('Image');
    		$name = time().$file->getClientOriginalName();
    		$filepath = 'certifications/'.$name;
    		Storage::disk('s3')->put($filepath,file_get_contents($file));
    		$data->Image = $name;
    	}
    	$data->save();
    	$request->session()->flash('success','File Updated.');
    	return redirect()->route('Admin/Certification');
    }

   public function Delete(request $request){
   		$data = Certification::where('id',$request->Delete)->first();
   		$filepath = 'certifications/'.$data->Image;
   		if(Storage::disk('s3')->exists($filepath)){
   			Storage::disk('s3')->delete($filepath);
   			$data->delete();
   		}
   		else{
   			$data->delete();
   		}
   		$request->session()->flash('success','File Deleted.');
    	return redirect()->route('Admin/Certification');
   }
}
