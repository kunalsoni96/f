@extends('Admin.layouts.Master')

@section('MainSection')
   <div class="content">
<div class="content">
<div class="container-fluid">
  <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon" style="box-shadow: none;">
                          <i class="fa fa-phone"></i>
                        </div>
                        <p class="card-category">All Enquiry Details</p>
                        <h3 class="card-title"><span class="badge badge-secondary" style="background:#0275D8;">{{$enquiryform}}</span></h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                            <a href="{{route('Admin/EnquiryForm')}}" style="display: block; ">Click Here Full Details</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon" style="box-shadow: none;">
                          <i class="fa fa-mobile"></i>
                        </div>
                        <p class="card-category">All Master Categories</p>
                        <h3 class="card-title"><span class="badge badge-secondary" style="background:#0275D8;">{{$mastercat}}</span></h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                            <a href="{{route('Admin/MasterCategory')}}" style="display: block; ">Click Here Full Details</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon" style="box-shadow: none;">
                          <i class="fa fa-mobile"></i>
                        </div>
                        <p class="card-category">Master Sub Categories</p>
                        <h3 class="card-title"><span class="badge badge-secondary" style="background:#0275D8;">{{$mastersubcat}}</span></h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                            <a href="{{route('Admin/MasterSubCategory')}}" style="display: block; ">Click Here Full Details</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon" style="box-shadow: none;">
                          <i class="fa fa-mobile"></i>
                        </div>
                        <p class="card-category">Sub Category</p>
                        <h3 class="card-title"><span class="badge badge-secondary" style="background:#0275D8;">{{$subcat}}</span></h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                            <a href="{{route('Admin/SubCategory')}}" style="display: block; ">Click Here Full Details</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon" style="box-shadow: none;">
                          <i class="fa fa-mobile"></i>
                        </div>
                        <p class="card-category">All Videos</p>
                        <h3 class="card-title"><span class="badge badge-secondary" style="background:#0275D8;">{{$video}}</span></h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                            <a href="{{route('Admin/Video')}}" style="display: block; ">Click Here Full Details</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon" style="box-shadow: none;">
                          <i class="fa fa-mobile"></i>
                        </div>
                        <p class="card-category">All Products</p>
                        <h3 class="card-title"><span class="badge badge-secondary" style="background:#0275D8;">{{$product}}</span></h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                            <a href="{{route('Admin/Product')}}" style="display: block; ">Click Here Full Details</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon" style="box-shadow: none;">
                          <i class="fa fa-mobile"></i>
                        </div>
                        <p class="card-category">All Certifications</p>
                        <h3 class="card-title"><span class="badge badge-secondary" style="background:#0275D8;">5</span></h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                            <a href="{{route('Admin/Certification')}}" style="display: block; ">Click Here Full Details</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    
</div>
</div>

</div>
</div>
@endsection