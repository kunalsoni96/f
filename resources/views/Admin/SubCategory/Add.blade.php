@extends('Admin.layouts.Master')

@section('MainSection')
     <div class="content">
<div class="content">
<div class="container-fluid">
  <div class="row">
        <div class="col-md-12">
              <form id="TypeValidation" class="form-horizontal" action="@if(isset($edit->id)) {{route('Admin/SubCategory/Update')}} @else {{route('Admin/SubCategory/Store')}} @endif" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
               <input type="hidden" name="Update" value="@if(isset($edit->id)) {{$edit->id}} @endif">
                <div class="card ">
                  <div class="card-header card-header-primary card-header-icon" style="margin-top: -15px;">
                  <div style="background-color: #04A55B; padding: 10px; padding-left: 16px; padding-top:16px; border-radius: 3px;" style="width: 100%;">
                    <h4>
                      @if(isset($edit->id)) Update SubCategory @else Create SubCategory @endif                                       
                       <a href="{{route('Admin/SubCategory')}}" class="btn btn-success pull-right" style="margin-top: -7px; background-color: white; color:black; box-shadow:none;">Manage</a></h4>
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
                            <option value="">Select Master Category</option>
                            @foreach($m_cat as $row)
                            <option value="{{$row->id}}"  @if(isset($edit->id)) @if($edit->MasterCategoryId==$row->id) selected @endif @endif>{{$row->Name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                  </div>

                  <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">Product Category :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <select name="MasterSubCategoryId" id="msubcat" class="form-control" required="true" style="padding-left:20px;">
                            <option value="">Select Product Category</option>
                            
                          </select>
                        </div>
                      </div>
                  </div>
                   <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">Name :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <input type="text" required name="Name" value="@if(isset($edit->id)) {{$edit->Name}} @endif" class="form-control">
                        </div>
                      </div>
                  </div>


                  <div class="row" style="margin-bottom: 30px;">
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

@section('js')
<script type="text/javascript">
  $(document).ready(function(){
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $("#mastercategory").change(function(){

      var mastercategory = $(this).val();
      $.ajax({
        type:"post",
        url:"{{url('Admin/SubCategory/Change')}}",
        data:{id:mastercategory},
        success:function(data){
          console.log(data);
          if(data!=''){
          $("#msubcat").empty().append(data);
        }
        else{
          $("#msubcat").empty().append('<option value="">Select Product Category</option>');
        }
        }
      })
    });
  });
</script>
@endsection