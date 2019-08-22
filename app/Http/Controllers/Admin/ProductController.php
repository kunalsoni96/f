<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\MasterCategory;
use App\MasterSubCategory;
use App\SubCategory;
use Session;
use Storage;

class ProductController extends Controller
{
    public function Index(request $request){
    	$data = Product::join('master_categories','master_categories.id','products.MasterCategoryId')->join('master_sub_categories','master_sub_categories.id','products.MasterSubCategoryId')->join('sub_categories','sub_categories.id','products.SubCategoryId')->select('master_categories.Name as MasterCategory','master_sub_categories.Name as MasterSubCategory','sub_categories.Name as SubCategory','products.*')->orderBy('sub_categories.id','desc')->get();
    	return view('Admin.Product.Index',compact('data'));
    }

    public function Create(request $request){
    	$m_sub_cat = MasterSubCategory::where('Status',1)->get();
    	$m_cat = MasterCategory::where('Status',1)->get();
    	$sub_cat = SubCategory::where('Status',1)->get();
    	return view('Admin.Product.Add',compact('m_sub_cat','m_cat','sub_cat'));
    }

    public function Store(request $request){
    	$data = new Product;
    	$data->Title = $request->Title;
    	$data->MasterSubCategoryId = $request->MasterSubCategoryId;
    	$data->MasterCategoryId = $request->MasterCategoryId;
    	$data->SubCategoryId = $request->SubCategoryId;
        $data->Title = $request->Title;
        $data->SubTitle = $request->SubTitle;
        $data->Specification = $request->Specification;
        $data->DescriptionOne = $request->DescriptionOne;
        $data->DescriptionTwo = $request->DescriptionTwo;
    	if($request->hasfile('ImageOne')){
            $fileone = $request->file('ImageOne');
            $nameone = time().$fileone->getClientOriginalName();
            $pathone = 'products/'.$nameone;
            Storage::disk('s3')->put($pathone, file_get_contents($fileone));
            $data->ImageOne = $nameone;
        }
        if($request->hasfile('ImageTwo')){
            $filetwo = $request->file('ImageTwo');
            $nametwo = time().$filetwo->getClientOriginalName();
            $pathtwo = 'products/'.$nametwo;
            Storage::disk('s3')->put($pathtwo, file_get_contents($filetwo));
            $data->ImageTwo = $nametwo;
        }
        if($request->hasfile('ImageThree')){
            $filethree = $request->file('ImageThree');
            $namethree = time().$filethree->getClientOriginalName();
            $paththree = 'products/'.$namethree;
            Storage::disk('s3')->put($paththree, file_get_contents($filethree));
            $data->ImageThree = $namethree;
        }
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','File Submited.');
    	return redirect()->route('Admin/Product');
    }

    public function Return(request $request){
    	return redirect('Admin/Product');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/Product/Edit');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
        $m_sub_cat = MasterSubCategory::where('Status',1)->get();
        $m_cat = MasterCategory::where('Status',1)->get();
        $sub_cat = SubCategory::where('Status',1)->get();
   
        $edit = Product::join('master_categories','master_categories.id','products.MasterCategoryId')->join('master_sub_categories','master_sub_categories.id','products.MasterSubCategoryId')->join('sub_categories','sub_categories.id','products.SubCategoryId')->select('master_categories.Name as MasterCategory','master_sub_categories.Name as MasterSubCategory','sub_categories.Name as SubCategory','products.*')->orderBy('sub_categories.id','desc')->where('products.id',$id)->first();
    	return view('Admin.Product.Add',compact('edit','sub_cat','m_cat','m_sub_cat'));
    }

    public function Update(request $request){
    	$data = Product::where('id',$request->Update)->first();
    	$data->Title = $request->Title;
        $data->MasterSubCategoryId = $request->MasterSubCategoryId;
        $data->MasterCategoryId = $request->MasterCategoryId;
        $data->SubCategoryId = $request->SubCategoryId;
        $data->Title = $request->Title;
        $data->SubTitle = $request->SubTitle;
        $data->Specification = $request->Specification;
        $data->DescriptionOne = $request->DescriptionOne;
        $data->DescriptionTwo = $request->DescriptionTwo;

        $img_delete_one = 'products/'.$data->ImageOne;
        $img_delete_two = 'products/'.$data->ImageTwo;
        $img_delete_three = 'products/'.$data->ImageThree;
        if($request->hasfile('ImageOne')){
            if(Storage::disk('s3')->exists($img_delete_one)){
                Storage::disk('s3')->delete($img_delete_one);
            }
            $fileone = $request->file('ImageOne');
            $nameone = time().$fileone->getClientOriginalName();
            $pathone = 'products/'.$nameone;
            Storage::disk('s3')->put($pathone, file_get_contents($fileone));
            $data->ImageOne = $nameone;
        }
        if($request->hasfile('ImageTwo')){
            if(Storage::disk('s3')->exists($img_delete_two)){
                Storage::disk('s3')->delete($img_delete_two);
            }
            $filetwo = $request->file('ImageTwo');
            $nametwo = time().$filetwo->getClientOriginalName();
            $pathtwo = 'products/'.$nametwo;
            Storage::disk('s3')->put($pathtwo, file_get_contents($filetwo));
            $data->ImageTwo = $nametwo;
        }
        if($request->hasfile('ImageThree')){
            if(Storage::disk('s3')->exists($img_delete_three)){
                Storage::disk('s3')->delete($img_delete_three);
            }
            $filethree = $request->file('ImageThree');
            $namethree = time().$filethree->getClientOriginalName();
            $paththree = 'products/'.$namethree;
            Storage::disk('s3')->put($paththree, file_get_contents($filethree));
            $data->ImageThree = $namethree;
        }

        $data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','File Updated.');
    	return redirect()->route('Admin/Product');
    }

   public function Delete(request $request){
   		$data = Product::where('id',$request->Delete)->first();
   		$filepathone = 'products/'.$data->ImageOne;
   		$filepathtwo = 'products/'.$data->ImageTwo;
        $filepaththree = 'products/'.$data->ImageThree;
        if(Storage::disk('s3')->exists($filepathone) && Storage::disk('s3')->exists($filepathtwo) && Storage::disk('s3')->exists($filepaththree)){
            Storage::disk('s3')->delete($filepathone);
            Storage::disk('s3')->delete($filepathtwo);
            Storage::disk('s3')->delete($filepaththree);
            $data->delete();
        }
        elseif(Storage::disk('s3')->exists($filepathone) && Storage::disk('s3')->exists($filepathtwo)){
            Storage::disk('s3')->delete($filepathone);
            Storage::disk('s3')->delete($filepathtwo);
            $data->delete();
        }

        elseif(Storage::disk('s3')->exists($filepathone) && Storage::disk('s3')->exists($filepaththree)){
            Storage::disk('s3')->delete($filepathone);
            Storage::disk('s3')->delete($filepaththree);
            $data->delete();
        }

        elseif(Storage::disk('s3')->exists($filepathtwo) && Storage::disk('s3')->exists($filepaththree)){
            Storage::disk('s3')->delete($filepaththree);
            Storage::disk('s3')->delete($filepathtwo);
            $data->delete();
        }

        elseif(Storage::disk('s3')->exists($filepathone)){
            Storage::disk('s3')->delete($filepathtone);
            $data->delete();
        }

        elseif(Storage::disk('s3')->exists($filepathtwo)){
            Storage::disk('s3')->delete($filepathttwo);
            $data->delete();
        }

        elseif(Storage::disk('s3')->exists($filepaththree)){
            Storage::disk('s3')->delete($filepaththree);
            $data->delete();
        }
   		else{
   			$data->delete();
   		}


   		$request->session()->flash('success','File Deleted.');
    	return redirect()->route('Admin/Product');
   }

   public function MasterCategoryChange(request $request){
        $data = MasterSubCategory::where('MasterCategoryId',$request->id)->get();
        $d = '<option value="">Select Master SubCategory</option>';
        foreach($data as $row){
            $d .= '<option value="'.$row->id.'">'.$row->Name.'</option>';
        }

        return $d;
   }

   public function MasterCategorySubChange(request $request){
        $data = SubCategory::where('MasterCategoryId',$request->mid)->where('MasterSubCategoryId',$request->id)->get();
        $d = '<option value="">Select SubCategory</option>';
        foreach($data as $row){
            $d .= '<option value="'.$row->id.'">'.$row->Name.'</option>';
        }

        return $d;
   }
}
