@extends('layouts.Master')
@section('MainSection')
     <div class="bannerimg cover-image bg-background3" data-image-src="{{url('/')}}/public/frontend/images/banners/banner2.jpg" style="background: url('{{url('/')}}/public/frontend/images/banners/banner2.jpg') center center;">
            <div class="header-text mb-0">
               <div class="container">
                  <div class="text-center text-white ">
                     <h1 class="">Contact Us</h1>
                     <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="{{route('Index')}}">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/Breadcrumb--> 
      <section class="sptb bg-white">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="row text-white">
                     <div class="col-lg-6 col-md-12">
                        <div class="card">
                           <div class="support-service bg-primary">
                              <i class="fa fa-phone"></i> 
                              <h6>+68 872-627-9735</h6>
                              <p>Free Support!</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <div class="card">
                           <div class="support-service bg-secondary">
                              <i class="fa fa-clock-o"></i> 
                              <h6>Mon-Sat(10:00-19:00)</h6>
                              <p>Working Hours!</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <div class="card mb-lg-0">
                           <div class="support-service bg-warning">
                              <i class="fa fa-map-marker"></i> 
                              <h6>872 School Street Opa Locka, TN 37072</h6>
                              <p> New York, USA</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <div class="card mb-0">
                           <div class="support-service bg-info">
                              <i class="fa fa-envelope-o"></i> 
                              <h6>yourdomain@gmail.com</h6>
                              <p>Support us!</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Contact--> 
      <div class="sptb">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-xl-6  col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.3766594403533!2d81.63399101476737!3d21.256552985875416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dd8ff6f23929%3A0xc4ccbce450f7fd73!2sGuru+Gobind+Singh+Square%2C+Balaji+Nagar%2C+Raipur%2C+Chhattisgarh+492009!5e0!3m2!1sen!2sin!4v1563607981619!5m2!1sen!2sin" width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
               <div class="col-lg-6 col-xl-6 col-md-12">
                  <div class="card mb-0">
                     <div class="card-body">
                     	<form action="{{route('Contact/Store')}}" method="post">
                     		{{csrf_field()}}
                     		<input type="hidden" name="URL" value="{{url('/')}}/Contact">
                        <div class="form-group"> <input type="text" required name="Name" class="form-control" id="name1" placeholder="Your Name"> </div>
                        <div class="form-group"> <input type="email" required name="Email" class="form-control" id="email" placeholder="Email Address"> </div>
                        <div class="form-group"> <input type="number" required name="Mobile" class="form-control" id="email" placeholder="Mobile Number"> </div>
                        <div class="form-group"> <textarea class="form-control" name="Message" name="example-textarea-input" rows="6" placeholder="Message"></textarea> </div>
                        <div class="text-left"> <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</a> </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Contact--> <!--Footer Section--> 
@endsection