@extends('layouts.Master')
@section('MainSection')
      <section>
         <div class="bannerimg cover-image bg-background3 sptb-2" data-image-src="{{url('/')}}/public/frontend/images/banners/banner2.jpg" style="background: url('{{url('/')}}/public/frontend/images/banners/banner2.jpg') center center;">
            <div class="header-text mb-0">
               <div class="container">
                  <div class="text-center text-white ">
                     <h1 class="">Product Details</h1>
                     <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="{{route('Index')}}">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Product Details</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--/Breadcrumb--> <!--section--> 
       <section class="sptb">
            <div class="container">
               <div class="row">
                  <div class="col-xl-7 col-lg-7 col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="item7-card-img">
                              <img src="{{url('/')}}/public/frontend/images/products/h4.jpg" alt="img" class="w-100"> 
                              <div class="item7-card-text"> <span class="badge badge-info fs-20">2BHK House</span> </div>
                           </div>
                           <div class="item7-card-desc d-flex mb-2 mt-3">
                              <a href="#" class="text-muted"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2019</a> 
                           </div>
                           <a href="#" class="text-dark">
                              <h2 class="font-weight-semibold">Home For Sale</h2>
                           </a>
                           <p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem Laxury Home For Sale odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dol et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deser mollitian animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero temporin cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimusomnis voluptas assumenda est, omnis dolor repellendus. </p>
                           <p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem Laxury Home For Sale odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dol et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deser mollitian animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero temporin cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimusomnis voluptas assumenda est, omnis dolor repellendus. </p>
                        </div>
                     </div>
                   
                  </div>
                  <!--Rightside Content--> 
                  <div class="col-xl-5 col-lg-5 col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <h3 class="card-title">Now Enquire</h3>
                        </div>
                        <div class="card-body">
                           <form action="{{route('Contact/Store')}}" method="post">
                              {{csrf_field()}}
                           <div class="form-group"> 
                              <select name="Product" required class="form-control">
                                 <option value="">Select Product</option>
                                 <option value="Agarbatti">Agarbatti</option>
                                 <option value="Rice">Rice</option>
                              </select>
                            </div>
                            <input type="hidden" name="URL" value="{{url('/')}}/ProductDetails">
                           <div class="form-group"> <input name="Name" required type="text" class="form-control" id="name1" placeholder="Your Name"> </div>
                           <div class="form-group"> <input type="email" required name="Email" class="form-control" id="name1" placeholder="Your Email Address"> </div>
                           <div class="form-group"> <input type="number" required class="form-control" name="Mobile" id="email" placeholder="Your Mobile Number"> </div>
                           <div class="form-group"> <textarea class="form-control" required name="Message" rows="6" placeholder="Write Your Message"></textarea> </div>
                           <button type="submit" class="btn btn-primary" style="width: 100%;">Submit</button> 
                           </form>
                        </div>
                     </div>
                 
                     </div>
                  </div>
                  <!--/Rightside Content--> 
               </div>
            </div>
         </section>
@endsection