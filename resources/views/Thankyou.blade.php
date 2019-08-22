@extends('layouts.Master')
@section('MainSection')
      <section>
         <div class="bannerimg cover-image bg-background3 sptb-2" data-image-src="{{url('/')}}/public/frontend/images/banners/banner2.jpg" style="background: url('{{url('/')}}/public/frontend/images/banners/banner2.jpg') center center;">
            <div class="header-text mb-0">
               <div class="container">
                  <div class="text-center text-white ">
                     <h1 class="">Thankyou</h1>
                     <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="{{route('Index')}}">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Thankyou</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--/Breadcrumb--> <!--section--> 
     
      <section class="sptb">
         <div class="container">
            <div class="text-justify">
               <center><h3><a href="{{route('Index')}}" class="btn btn-success">Click Back to Home</a></h3></center>
            </div>
         </div>
      </section>
      <!--/section--> <!--How to work--> 
    @endsection