@extends('layouts.Master')
@section('MainSection')
      <section>
         <div class="bannerimg cover-image bg-background3 sptb-2" data-image-src="{{url('/')}}/public/frontend/images/banners/banner2.jpg" style="background: url('{{url('/')}}/public/frontend/images/banners/banner2.jpg') center center;">
            <div class="header-text mb-0">
               <div class="container">
                  <div class="text-center text-white ">
                     <h1 class="">About Us</h1>
                     <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="{{route('Index')}}">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
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
               <h2 class="mb-4">Why Reallist?</h2>
               <h4 class="leading-normal">Majority have suffered alteration in some form, by injected humor</h4>
               <p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to as necessary All the Lorem Ipsum generators on the Internet tend to repeat</p>
               <p class="leading-normal">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
               <p class="leading-normal mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
         </div>
      </section>
      <!--/section--> <!--How to work--> 
    
      <section>
         <div class="cover-image sptb bg-background-color" data-image-src="{{url('/')}}/public/frontend/images/banners/banner4.jpg" style="background: url(&quot;{{url('/')}}/public/frontend/images/banners/banner4.jpg&quot;) center center;">
            <div class="content-text mb-0">
               <div class="container">
                  <div class="text-center text-white ">
                     <h2 class="mb-2 display-5">Are you ready for the posting you ads on this Site?</h2>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                     <div class="mt-5"> <a href="ad-posts.html" class="btn btn-primary  btn-lg">Free Property Ad</a> </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--/post section--> <!--section--> 
     
     
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
      <!--/section--> <!-- Newsletter--> 
      <section class="sptb border-top">
         <div class="container">
            <div class="row">
               <div class="col-lg-7 col-xl-6 col-md-12">
                  <div class="sub-newsletter">
                     <h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Subscribe To Our Newsletter</h3>
                     <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                  </div>
               </div>
               <div class="col-lg-5 col-xl-6 col-md-12">
                  <div class="input-group sub-input mt-1">
                     <input type="text" class="form-control input-lg " placeholder="Enter your Email"> 
                     <div class="input-group-append "> <button type="button" class="btn btn-primary btn-lg br-tr-3  br-br-3"> Subscribe </button> </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!--/Newsletter--> <!--Footer Section--> 
      <section>
@endsection