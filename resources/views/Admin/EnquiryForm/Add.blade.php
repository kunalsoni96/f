@extends('Admin.layouts.Master')

@section('MainSection')
     <div class="content">
<div class="content">
<div class="container-fluid">
  <div class="row">
        <div class="col-md-12">
              <form action="{{route('Admin/EnquiryForm/Update')}}" method="post">
                {{csrf_field()}}
               <input type="hidden" name="Update" value="@if(isset($edit->id)) {{$edit->id}} @endif">
                <div class="card ">
                  <div class="card-header card-header-primary card-header-icon" style="margin-top: -15px;">
                  <div style="background-color: #04A55B; padding: 10px; padding-left: 16px; padding-top:16px; border-radius: 3px;" style="width: 100%;">
                    <h4>
                      @if(isset($edit->id)) Update Enquiry Details @else Create Enquiry Details @endif                                       
                       <a href="{{route('Admin/EnquiryForm')}}" class="btn btn-success pull-right" style="margin-top: -7px; background-color: white; color:black; box-shadow:none;">Manage</a></h4>
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
                    @if(isset($edit->id))
                    @if($edit->Product!='')
                      <label class="col-sm-2 col-form-label">Product :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <input type="text" required name="Product" disabled value="@if(isset($edit->id)) {{$edit->Product}} @endif" class="form-control">
                        </div>
                      </div>
                    @endif
                    @endif
                       <label class="col-sm-2 col-form-label">Name :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                           <input type="text" required name="Name" disabled value="@if(isset($edit->id)) {{$edit->Name}} @endif" class="form-control">
                        </div>
                      </div>

                      <label class="col-sm-2 col-form-label">Email :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                           <input type="email" required name="Email" disabled value="@if(isset($edit->id)) {{$edit->Email}} @endif" class="form-control">
                        </div>
                      </div>

                       <label class="col-sm-2 col-form-label">Mobile Number :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                           <input type="text" required name="Mobile" disabled value="@if(isset($edit->id)) {{$edit->Mobile}} @endif" class="form-control">
                        </div>
                      </div>

                      <label class="col-sm-2 col-form-label">Page Url :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <a href="{{$edit->URL}}" target="_blank">
                             <input type="text" required name="URL" disabled value="@if(isset($edit->id)) {{$edit->URL}} @endif" class="form-control">
                          </a>
                        </div>
                      </div>
                      @if(isset($edit->id))
                    @if($edit->Message!='')
                       <label class="col-sm-2 col-form-label">Message :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <textarea type="text" required name="Message" disabled  class="form-control" rows="10">@if(isset($edit->id)) {{$edit->Message}} @endif</textarea>
                        </div>
                      </div>
                      @endif
                    @endif

                    <label class="col-sm-2 col-form-label">Add Remark :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                           <textarea type="text" required name="Remark"  class="form-control" rows="10">@if(isset($edit->id)) {{$edit->Remark}} @endif</textarea>
                        </div>
                      </div>
                  </div>
                   <div class="card-footer ml-auto mr-auto">
                    <button type="submit" style="width: 100%; box-shadow: none;" class="btn btn-large btn-rose">
                       @if(isset($edit->id)) Submit Remark @else Submit @endif                  </button>
                  </div>
                </div>
       
            </div>
          </div>
</div>
</div>

</div>
</div>

@endsection