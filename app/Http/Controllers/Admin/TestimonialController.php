<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Testimonial;
use Session;
use Storage;

class TestimonialController extends Controller
{
    public function Index(request $request){
    	return view('Admin.Testimonial.Index',compact('data'));
    }

    public function Create(request $request){
    	return view('Admin.Testimonial.Add');
    }

    public function Store(request $request){
    	$data = new Testimonial;
    	$data->Title = $request->Title;
    	$data->Description = $request->Description;
    	if($request->filehas('Image')){
    		$file = $request->file('Image');
    		$name = time().$file->getClientOriginalName();
            $filepath = 'testimonials/'.$name
            Storage::disk('s3')->put($filepath,file_get_contents($file));
    		$data->Image = $request->Image;
    	}
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','Testimonial Submited.');
    	return redirect()->route('Admin/Testimonial');
    }

    public function Return(request $request){
    	return redirect('Admin/Testimonial');
    }

    public function SessionEdit(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/Testimonial/Add');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
    	$edit = Testimonial::where('id',$id)->first();
    	return view('Admin.Testimonial.Add');
    }

    public function Update(request $request){
    	$data = Testimonial::where('id',$request->Update)->first();
    	$data->Title = $request->Title;
    	$data->Description = $request->Description;
    	if($request->filehas('Image')){
    		$file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filepath = 'testimonials/'.$name
            Storage::disk('s3')->put($filepath,file_get_contents($file));
            $data->Image = $request->Image;
    	}
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','Testimonial Updated.');
    	return redirect()->route('Admin/Testimonial');
    }

   public function Delete(request $request){
   		$data = Testimonial::where('id',$request->Delete)->delete();
   		$filepath = 'testimonials/'.$data->Image;
   		if(Storage::disk('s3')->exists($filepath)){
   			Storage::disk('s3')->delete($filepath);
   			$data->delete();
   		}
   		else{
   			$data->delete();
   		}
   		$request->session()->flash('success','Testimonial Deleted.');
    	return redirect()->route('Admin/Testimonial');
   }
}
