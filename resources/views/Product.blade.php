@extends('layouts.Master')
@section('MainSection')
<style type="text/css">select.form-control:not([size]):not([multiple]){
height: 3rem;

}
</style> <!--/Map--> <!--Sliders Section--> 
<div>  <div class="cover-image sptb-1 bg-background" data-image-src="../assets/images/banners/banner1.jpg" style="background: url(&quot;../assets/images/banners/banner1.jpg&quot;) center center;">
<div class="header-text1 mb-0">
<div class="container">
<div class="row">
<div class="col-xl-9 col-lg-12 col-md-12 d-block mx-auto">
<div class="text-center text-white text-property">
<h1><span class="font-weight-bold"></span>{{$title}}</h1>
</div>
<div class="search-background bg-transparent">
<form action="{{url('Products/SearchSession')}}" method="post">
{{csrf_field()}}
<input type="hidden" name="Title" value="{{$title}}">
<div class="form row no-gutters ">
<div class="form-group col-xl-5 col-lg-5 col-md-12 select2-lg  mb-0 bg-white">
 <select class="form-control" required name="Category" style="border:none; cursor: pointer; ">
    <option value="" >Please Select Category</option>
    @foreach($procat as $row)
      <option value="{{$row->id}}"@if(isset($cat_id)) @if($cat_id==$row->id) selected @endif @endif>{{$row->Name}}</option>
      @endforeach
 </select>
</div>

 <div class="form-group col-xl-5 col-lg-5 col-md-12 select2-lg  mb-0 bg-white">
 <select class="form-control" name="SubCategory" style="border:none; cursor: pointer; ">
    <option value="" >Please Select SubCategory</option>
   @foreach($prosubcat as $row)
      <option value="{{$row->id}}" @if(isset($sub_cat_id)) @if($sub_cat_id==$row->id) selected @endif @endif>{{$row->Name}}</option>
   @endforeach
 </select>
  
</div>
<div class="col-xl-2 col-lg-3 col-md-12 mb-0"> <button type="submit" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0" style="height: 3rem;">Search Here</button> </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- /header-text --> 
</div></div>
<section class="sptb">
<div class="container">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12">
<!--Add lists--> 
<div class=" mb-lg-0">
            <div class="tab-pane active" id="tab-12">
               <div class="row">
                  <div class="col-lg-6 col-md-12 col-xl-4">
                     <div class="card overflow-hidden">
                        <div class="arrow-ribbon bg-secondary">$389</div>
                        <div class="item-card9-img">
                           <div class="item-card9-imgs"> <a href="{{url('ProductDetails')}}"></a> <img src="{{url('/')}}/public/frontend/images/products/h4.jpg" alt="img" class="cover-image"> </div>
      
                        </div>
                        <div class="card-body">
                           <div class="item-card9">
                             
                              <a href="{{url('ProductDetails')}}" class="text-dark mt-2">
                                 <h4 class="font-weight-bold mt-1">Graden House</h4>
                              </a>
                            
                              <p class="mb-0">Ut enim ad minima veniamq nostrum exerci. Ut enim ad minima veniamq nostrum exerci. Ut enim ad minima veniamq nostrum exerci. Ut enim ad minima veniamq nostrum exerci</p>
                           </div>
                        </div>
                        <div class="card-footer">
                           <div class="item-card9-footer d-flex">
                              <div class="item-card9-cost"> <a  class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 24/1/2019</span></a> </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>

                   <div class="col-lg-6 col-md-12 col-xl-4">
                     <div class="card overflow-hidden">
                        <div class="arrow-ribbon bg-secondary">$389</div>
                        <div class="item-card9-img">
                           <div class="item-card9-imgs"> <a href="{{url('ProductDetails')}}"></a> <img src="{{url('/')}}/public/frontend/images/products/h4.jpg" alt="img" class="cover-image"> </div>
                          
                        </div>
                        <div class="card-body">
                           <div class="item-card9">
                             
                              <a href="{{url('ProductDetails')}}" class="text-dark mt-2">
                                 <h4 class="font-weight-bold mt-1">Graden House</h4>
                              </a>
                            
                              <p class="mb-0">Ut enim ad minima veniamq nostrum exerci. Ut enim ad minima veniamq nostrum exerci. Ut enim ad minima veniamq nostrum exerci. Ut enim ad minima veniamq nostrum exerci</p>
                           </div>
                        </div>
                        <div class="card-footer">
                           <div class="item-card9-footer d-flex">
                              <div class="item-card9-cost"> <a  class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 24/1/2019</span></a> </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>

                   <div class="col-lg-6 col-md-12 col-xl-4">
                     <div class="card overflow-hidden">
                        <div class="arrow-ribbon bg-secondary">$389</div>
                        <div class="item-card9-img">
                           <div class="item-card9-imgs"> <a href="{{url('ProductDetails')}}"></a> <img src="{{url('/')}}/public/frontend/images/products/h4.jpg" alt="img" class="cover-image"> </div>
                        </div>
                        <div class="card-body">
                           <div class="item-card9">
                             
                              <a href="{{url('ProductDetails')}}" class="text-dark mt-2">
                                 <h4 class="font-weight-bold mt-1">Graden House</h4>
                              </a>
                            
                              <p class="mb-0">Ut enim ad minima veniamq nostrum exerci. Ut enim ad minima veniamq nostrum exerci. Ut enim ad minima veniamq nostrum exerci. Ut enim ad minima veniamq nostrum exerci</p>
                           </div>
                        </div>
                       <div class="card-footer">
                           <div class="item-card9-footer d-flex">
                              <div class="item-card9-cost"> <a  class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 24/1/2019</span></a> </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    
   </div>
</div>
<!--/Add lists--> 
</div>
<!--Right Side Content--> 

<!--/Right Side Content--> 
</div>
</div>
</section>

@endsection