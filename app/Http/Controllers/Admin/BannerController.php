<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use Session;
use Storage;

class BannerController extends Controller
{
    public function Index(request $request){
    	$data = Banner::orderBy('id','desc')->get();
    	return view('Admin.Banner.Index',compact('data'));
    }

    public function Create(request $request){
    	return view('Admin.Banner.Add');
    }

    public function Store(request $request){
    	$data = new Banner;
    	$data->Title = $request->Title;
    	if($request->hasfile('Image')){
    		$file = $request->file('Image');
    		$name = time().$file->getClientOriginalName();
    		$filepath = 'banners/'.$name;
    		Storage::disk('s3')->put($filepath,file_get_contents($file));
    		$data->Image = $name;
    	}
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','File Submited.');
    	return redirect()->route('Admin/Banner');
    }

    public function Return(request $request){
    	return redirect('Admin/Banner');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/Banner/Edit');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
    	$edit = Banner::where('id',$id)->first();
    	return view('Admin.Banner.Add',compact('edit'));
    }

    public function Update(request $request){
    	$data = Banner::where('id',$request->Update)->first();
    	$data->Title = $request->Title;
    	$data->Status = $request->Status;
        $filepath = 'banners/'.$data->Image;
    	if($request->hasfile('Image')){
            if(Storage::disk('s3')->exists($filepath)){
            Storage::disk('s3')->delete($filepath);
                }
    		$file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filepath = 'banners/'.$name;
            Storage::disk('s3')->put($filepath,file_get_contents($file));
            $data->Image = $name;
    	}
    	$data->save();
    	$request->session()->flash('success','File Updated.');
    	return redirect()->route('Admin/Banner');
    }

   public function Delete(request $request){
   		$data = Banner::where('id',$request->Delete)->first();
   		$filepath = 'banners/'.$data->Image;
   		if(Storage::disk('s3')->exists($filepath)){
   			Storage::disk('s3')->delete($filepath);
   			$data->delete();
   		}
   		else{
   			$data->delete();
   		}
   		$request->session()->flash('success','File Deleted.');
    	return redirect()->route('Admin/Banner');
   }
}
