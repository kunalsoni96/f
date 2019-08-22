@extends('Admin.layouts.Master')

@section('MainSection')
<div class="content">
  <div class="content">
  <div class="container-fluid">
  <div class="row">
        <div class="col-md-12">
              <form id="TypeValidation" class="form-horizontal" action="@if(isset($edit->id)) {{route('Admin/Product/Update')}} @else {{route('Admin/Product/Store')}} @endif" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
               <input type="hidden" name="Update" value="@if(isset($edit->id)) {{$edit->id}} @endif">
                <div class="card ">
                  <div class="card-header card-header-primary card-header-icon" style="margin-top: -15px;">
                  <div style="background-color: #04A55B; padding: 10px; padding-left: 16px; padding-top:16px; border-radius: 3px;" style="width: 100%;">
                    <h4>
                      @if(isset($edit->id)) Update Product @else Create Product @endif                                       
                       <a href="{{route('Admin/Product')}}" class="btn btn-success pull-right" style="margin-top: -7px; background-color: white; color:black; box-shadow:none;">Manage</a></h4>
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
                      <label class="col-sm-2 col-form-label">Master Category :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <select name="MasterCategoryId" id="mastercategory" class="form-control" required="true" style="padding-left:20px;">
                            <option value="">Select MasterCategory</option>
                            @foreach($m_cat as $row)
                            <option value="{{$row->id}}"  @if(isset($edit->id)) @if($edit->MasterCategoryId==$row->id) selected @endif @endif>{{$row->Name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                  </div>

                  <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">Master SubCategory :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <select name="MasterSubCategoryId" id="mastersubcategory" class="form-control" required="true" style="padding-left:20px;">
                            <option value="">Select Master SubCategory</option>
                            @if(isset($edit->id)) <option value="{{$edit->MasterSubCategoryId}}" selected>{{$edit->MasterSubCategory}}</option> @endif
                           </select>
                        </div>
                      </div>
                  </div>

                  <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label"> Sub Category :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <select name="SubCategoryId" id="subcategory" class="form-control" required="true" style="padding-left:20px;">
                            <option value="">Select SubCategory</option>
                            @if(isset($edit->id)) <option value="{{$edit->SubCategoryId}}" selected>{{$edit->SubCategory}}</option> @endif
                          </select>
                        </div>
                      </div>
                  </div>
                   <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">Title :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <input type="text" required name="Title" value="@if(isset($edit->id)) {{$edit->Title}} @endif" class="form-control">
                        </div>
                      </div>
                  </div>

                  <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">SubTitle :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <input type="text" required name="SubTitle" value="@if(isset($edit->id)) {{$edit->SubTitle}} @endif" class="form-control">
                        </div>
                      </div>
                  </div>

                  <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label"> First Description:</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <textarea required name="DescriptionOne" class="form-control" rows="5">@if(isset($edit->id)){{$edit->DescriptionOne}}@endif</textarea>
                        </div>
                      </div>
                  </div>

                  <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label"> Second Description:</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <textarea required name="DescriptionTwo" class="form-control" rows="5">@if(isset($edit->id)){{$edit->DescriptionTwo}}@endif</textarea>
                        </div>
                      </div>
                  </div>

                  <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label"> Specification:</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <textarea id="full-featured" name="Specification" class="form-control" rows="5">@if(isset($edit->id)){{$edit->Specification}}@endif</textarea>
                        </div>
                      </div>
                  </div>

                   <div class="row" style="margin-bottom: 30px;">
                     <label class="col-sm-2 col-form-label">First Image:</label>
                    <div class="col-md-4 col-sm-4">
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail"  style="height: 165px;">
                          <img src="@if(isset($edit->id)) https://s3.ap-south-1.amazonaws.com/sanviexim/products/{{$edit->ImageOne}} @else {{url('/')}}/public/assets/img/Image_placeholder.jpg @endif" alt="..." height="165px" >
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file" style="box-shadow: none;">
                            <span class="fileinput-new">Upload Image</span>
                            <span class="fileinput-exists">Change Image</span>
                            <input type="file" name="ImageOne" accept="image/jpeg, image/jpg, image/png, image/gif"  @if(!isset($edit->id)) required @endif>
                          </span>
                          <p>Upload Only Image Formate </p>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>

                     <label class="col-sm-2 col-form-label">Second Image:</label>
                    <div class="col-md-4 col-sm-4">
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail"  style="height: 165px;">
                          <img src="@if(isset($edit->id)) https://s3.ap-south-1.amazonaws.com/sanviexim/products/{{$edit->ImageTwo}} @else {{url('/')}}/public/assets/img/Image_placeholder.jpg @endif" alt="..." height="165px">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file" style="box-shadow: none;">
                            <span class="fileinput-new">Upload Image</span>
                            <span class="fileinput-exists">Change Image</span>
                            <input type="file" name="ImageTwo" accept="image/jpeg, image/jpg, image/png, image/gif">
                          </span>
                          <p>Upload Only Image Formate </p>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>

                     <label class="col-sm-2 col-form-label">Third Image:</label>
                    <div class="col-md-4 col-sm-4">
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail"  style="height: 165px;">
                          <img src="@if(isset($edit->id)) https://s3.ap-south-1.amazonaws.com/sanviexim/products/{{$edit->ImageThree}} @else {{url('/')}}/public/assets/img/Image_placeholder.jpg @endif" alt="..." height="165px">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file" style="box-shadow: none;">
                            <span class="fileinput-new">Upload Image</span>
                            <span class="fileinput-exists">Change Image</span>
                            <input type="file" name="ImageThree" accept="image/jpeg, image/jpg, image/png, image/gif">
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
                       @if(isset($edit->id)) Update @else Submit @endif                  
                     </button>
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

@section('js')
  <script type="text/javascript">
      $(document).ready(function(){
        $.ajaxSetup({
          headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
          }
        });
        $("#mastercategory").change(function(e){
          e.preventDefault();
          var mastercategory = $("#mastercategory").val();
          $.ajax({
            type:"post",
            url:"{{url('Admin/MasterCategory/Product/MCChange')}}",
            data:{id:mastercategory},
            success:function(data){
              if(data!=''){
              $("#mastersubcategory").empty().append(data);
              $("#subcategory").empty().append('<option value="">Select Product SubCategory</option>');
              }
              else{
                $("#mastersubcategory").empty().append('<option value="">Select Product Category</option>');
                $("#subcategory").empty().append('<option value="">Select Product SubCategory</option>');
              }
            }
          });
        })
      })



  </script>

  <script type="text/javascript">
     $(document).ready(function(){
         $("#mastersubcategory").on('change',function(e){
          e.preventDefault();
          var mastersubcategory = $("#mastersubcategory").val();
          var mastercategory = $("#mastercategory").val();
          $.ajax({
            type:"post",
            url:"{{url('Admin/MasterCategory/Product/MSCChange')}}",
            data:{id:mastersubcategory, mid:mastercategory},
            success:function(data){
               if(data!=''){
                $("#subcategory").empty().append(data);
              }
              else{
                $("#subcategory").empty().append('<option value="">Select Product SubCategory</option>');
              }
            }
          });
        })
      })
  </script>
@endsection