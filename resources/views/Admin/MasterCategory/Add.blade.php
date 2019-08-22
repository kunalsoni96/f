@extends('Admin.layouts.Master')

@section('MainSection')
     <div class="content">
<div class="content">
<div class="container-fluid">
  <div class="row">
        <div class="col-md-12">
              <form id="TypeValidation" class="form-horizontal" action="@if(isset($edit->id)) {{route('Admin/MasterCategory/Update')}} @else {{route('Admin/MasterCategory/Store')}} @endif" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
               <input type="hidden" name="Update" value="@if(isset($edit->id)) {{$edit->id}} @endif">
                <div class="card ">
                  <div class="card-header card-header-primary card-header-icon" style="margin-top: -15px;">
                  <div style="background-color: #04A55B; padding: 10px; padding-left: 16px; padding-top:16px; border-radius: 3px;" style="width: 100%;">
                    <h4>
                      @if(isset($edit->id)) Update MasterCategory @else Create MasterCategory @endif                                       
                       <a href="{{route('Admin/MasterCategory')}}" class="btn btn-success pull-right" style="margin-top: -7px; background-color: white; color:black; box-shadow:none;">Manage</a></h4>
                  </div>

                </div>
                  <div class="card-body">
                   @if(session()->has('success'))
                <div class="alert alert-success" style="background: #04A55B; font-size: 18px;">
                  {{session()->get('success')}}
                 <a href="#" class="close" data-dismiss="alert" aria-label="close" >X</a>
                </div>
                @endif
                   <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">Name :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <input type="text" required name="Name" value="@if(isset($edit->id)) {{$edit->Name}} @endif" class="form-control">
                        </div>
                      </div>
                  </div>


                  <div class="row" style="margin-bottom: 30px;">
                    <label class="col-sm-2 col-form-label">Image :</label>
                      <div class="col-sm-4">
                         <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail"  style="height: 165px;">
                          <img src="@if(isset($edit->id)) https://s3.ap-south-1.amazonaws.com/sanviexim/categories/{{$edit->Image}} @else {{url('/')}}/public/assets/img/image_placeholder.jpg @endif" alt="..." height="165px">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file" style="box-shadow: none;">
                            <span class="fileinput-new">Upload Image</span>
                            <span class="fileinput-exists">Change Image</span>
                            <input type="file" name="Image" accept="image/jpeg, image/jpg, image/png, image/gif"  @if(!isset($edit->id)) required="true"  @endif >
                          </span>
                          <p>Upload Only Image Formate </p>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                  <label class="col-sm-2 col-form-label">Status :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <select name="Status" class="form-control" required="true" style="padding-left:20px;">
                            <option value="1"  @if(isset($edit->id)) @if($edit->Status=='1') selected @endif @endif>Active</option>
                            <option value="0"  @if(isset($edit->id)) @if($edit->Status=='0') selected @endif @endif>InActive</option>
                          </select>
                      </div>
                    </div>
                  </div>
                    <div class="card-footer ml-auto mr-auto">
                    <button type="submit" style="width: 100%; box-shadow: none;" class="btn btn-large btn-rose">
                       @if(isset($edit->id)) Update @else Submit @endif                  </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
</div>
</div>

</div>
</div>

@endsection