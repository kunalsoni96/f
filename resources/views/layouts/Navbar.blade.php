  <div class="header-main">
   <div class="top-bar">
      <div class="container">
         <div class="row">
            <div class="col-xl-8 col-lg-8 col-sm-4 col-7">
               <div class="top-bar-left d-flex">
                  <div class="clearfix">
                     <ul class="socials">
                        <li> <a class="social-icon text-dark" href="#"><i class="fa fa-facebook"></i></a> </li>
                        <li> <a class="social-icon text-dark" href="#"><i class="fa fa-twitter"></i></a> </li>
                        <li> <a class="social-icon text-dark" href="#"><i class="fa fa-linkedin"></i></a> </li>
                        <li> <a class="social-icon text-dark" href="#"><i class="fa fa-google-plus"></i></a> </li>
                     </ul>
                  </div>
                  <div class="clearfix">

                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   <!-- Duplex Houses Header --> 
   <div class="horizontal-header clearfix ">
      <div class="container"> <a href="#" id="horizontal-navtoggle" class="animated-arrow"><span></span></a> <span class="smllogo"><img src="{{url('/')}}/public/frontend/images/logo1.png" width="120" alt=""></span> <a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a> </div>
   </div>
   <!-- /Duplex Houses Header --> 
   <div id="sticky-wrapper" class="sticky-wrapper is-sticky" style="height: 80px;">
      <div class="horizontal-main bg-dark-transparent clearfix" style="width: 100%; position: fixed; top: 0px; z-index: inherit;">
         <div class="horizontal-mainwrapper container clearfix">
            <div class="desktoplogo"> <a href="{{route('Index')}}"><img src="{{url('/')}}/public/frontend/images/logo1.png" alt=""></a> </div>
            <div class="desktoplogo-1"> <a href="{{route('Index')}}"><img src="{{url('/')}}/public/frontend/images/logo1.png" alt=""></a> </div>
            <!--Nav--> 
            <nav class="horizontalMenu clearfix d-md-flex">
               <div class="overlapblackbg"></div>
               <ul class="horizontalMenu-list">

                  <li aria-haspopup="true"><a href="{{route('Index')}}">Home </a></li>
                  <li aria-haspopup="true">
                     <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#">About <span class="fa fa-caret-down m-0"></span></a> 
                     <ul class="sub-menu" style="margin-top:-70px;">
                        <li aria-haspopup="true"><a href="{{route('About')}}">About</a></li>
                        <li aria-haspopup="true"><a href="{{route('CompanyProfile')}}">Company Profile</a></li>
                        <li aria-haspopup="true"><a href="{{route('Team')}}">Our Team</a></li>
                     </ul>
                  </li>
                  <li aria-haspopup="true">
                     <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" >Product <span class="fa fa-caret-down m-0"></span></a> 
                     <ul class="sub-menu" style="margin-top:-70px;">
                        @foreach($cat as $row)
                        <li aria-haspopup="true"><a href="{{url('Product',$row->Name)}}">{{$row->Name}}</a></li>
                        @endforeach
                     </ul>
                  </li>
                  <li aria-haspopup="true"><a href="{{route('TrackOrder')}}">Track Order </a></li>
                  <li aria-haspopup="true">
                     <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" >Gallery <span class="fa fa-caret-down m-0"></span></a> 
                     <ul class="sub-menu" style="margin-top:-70px;">
                        <li aria-haspopup="true"><a href="{{route('Images')}}">Images</a></li>
                        <li aria-haspopup="true"><a href="{{route('Videos')}}">Videos</a></li>

                     </ul>
                  </li>
                  <li aria-haspopup="true"><a href="{{route('Contact')}}">Contact </a></li>
               </ul>

            </nav>
            <!--Nav--> 
         </div>
      </div>
   </div>
</div>