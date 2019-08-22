@extends('layouts.Master')
@section('MainSection')
      <section>
         <div class="bannerimg cover-image bg-background3 sptb-2" data-image-src="{{url('/')}}/public/frontend/images/banners/banner2.jpg" style="background: url(&quot;{{url('/')}}/public/frontend/images/banners/banner2.jpg&quot;) center center;">
            <div class="header-text mb-0">
               <div class="container">
                  <div class="text-center text-white ">
                     <h1 class="">Team</h1>
                     <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Our Team</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--/Breadcrumb--> <!--section--> 
     
      <section class="sptb bg-white">
         <div class="container">
            <div class="section-title center-block text-center">
               <h2>Our Team</h2>
               <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="row">
               <div class="col-xl-4 col-md-12">
                  <div class="card mb-xl-0">
                     <div class="card-body">
                        <div class="team-section text-center">
                           <div class="team-img"> <img src="{{url('/')}}/public/frontend/images/faces/male/1.jpg" class="img-thumbnail rounded-circle alt=" alt=""> </div>
                           <h4 class="font-weight-bold dark-grey-text mt-4">Tracey Poole</h4>
                           <h6 class="text-muted mb-3">RealEstate Agent</h6>
                           <p class="font-weight-normal dark-grey-text"> <i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                           <div class="text-warning"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-full"> </i> </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-md-12">
                  <div class="card mb-xl-0">
                     <div class="card-body">
                        <div class="team-section text-center">
                           <div class="team-img"> <img src="{{url('/')}}/public/frontend/images/faces/female/1.jpg" class="img-thumbnail rounded-circle alt=" alt=""> </div>
                           <h4 class="font-weight-bold dark-grey-text mt-4">Harry Walker</h4>
                           <h6 class="text-muted mb-3">RealEstate Builder</h6>
                           <p class="font-weight-normal dark-grey-text"> <i class="fa fa-quote-left pr-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam quis nostrum corporis suscipit laboriosam, nisi ut aliquid commodi.</p>
                           <div class="text-warning"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-md-12">
                  <div class="card mb-0">
                     <div class="card-body">
                        <div class="team-section text-center">
                           <div class="team-img"> <img src="{{url('/')}}/public/frontend/images/faces/male/2.jpg" class="img-thumbnail rounded-circle alt=" alt=""> </div>
                           <h4 class="font-weight-bold dark-grey-text mt-4">Paul White</h4>
                           <h6 class="text-muted mb-3">RealEstate Owner</h6>
                           <p class="font-weight-normal dark-grey-text"> <i class="fa fa-quote-left pr-2"></i>Laxury Home For Sale odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                           <div class="text-warning"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-o"> </i> </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
     
@endsection