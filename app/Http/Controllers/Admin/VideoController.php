<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use Session;
use Storage;

class VideoController extends Controller
{
    public function Index(request $request){
    	$data = Video::orderBy('id','desc')->get();
    	return view('Admin.Video.Index',compact('data'));
    }

    public function Create(request $request){
    	return view('Admin.Video.Add');
    }

    public function Store(request $request){
    	$data = new Video;
    	$data->Title = $request->Title;
    	$data->URL = $request->URL;
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','Video Link Submited.');
    	return redirect()->route('Admin/Video');
    }

    public function Return(request $request){
    	return redirect('Admin/Video');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/Video/Edit');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
    	$edit = Video::where('id',$id)->first();
    	return view('Admin.Video.Add',compact('edit'));
    }

    public function Update(request $request){
    	$data = Video::where('id',$request->Update)->first();
    	$data->Title = $request->Title;
    	$data->Status = $request->Status;
    	$data->URL = $request->URL;
    	$data->save();
    	$request->session()->flash('success','Video Link Updated.');
    	return redirect()->route('Admin/Video');
    }

   public function Delete(request $request){
    Video::where('id',$request->Delete)->delete();	
   		$request->session()->flash('success','Video Link Deleted.');
    	return redirect()->route('Admin/Video');
   }
}
