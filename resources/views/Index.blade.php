@extends('layouts.Master')
@section('MainSection')
<style type="text/css">
  .carousel-item img{
    height: 680px;
  }

  .carousel-caption{
    margin-top: 100px;
  }

  @media(max-width: 800px){
     .carousel-item img{
    height: 600px;
  }
  }

   @media(max-width: 700px){
     .carousel-item img{
    height: 500px;
  }

  #cat_col{
    margin-top: 10px;
  }

  .carousel-caption{
    display: block;
    margin-top: 20px;
  }

  .carousel-caption h1{
    font-size: 30px;
  }
  }

   @media(max-width: 600px){
     .carousel-item img{
    height: 400px;
  }


}


   @media(max-width: 500px){
     .carousel-item img{
    height: 350px;
  }

  .carousel-caption{
    display: block;
    margin-top: 20px;
  }

  .carousel-caption h1{
    font-size: 25px;
  }


}
  @media(max-width: 400px){
     .carousel-item img{
    height: 290px;
  }

  .carousel-caption{
    display: block;
    margin-top: 0px;
  }

  .carousel-caption h1{
    font-size: 23px;
  }
  }
</style>
<section>
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  @foreach($banner as $row)
    <div class="carousel-item @if($row->id==1) active @endif">
      <img class="d-block w-100" src="https://sanviexim.s3.ap-south-1.amazonaws.com/banners/{{$row->Image}}" alt="First slide">
        <div class="carousel-caption fadeInTop">
        <h1>{{$row->Title}}</h1>
      </div>
    </div>
  @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<section class="sptb">
  <div class="container">
   <div class="section-title center-block text-center">
    <h2>Products</h2>
    <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
  </div>
  <div class="row">
  @foreach($cat as $row)
  
   <div class="@if($cat_count==2) col-lg-6 col-md-6 col-sm-6 @elseif($cat_count==3) col-lg-4 col-md-4 col-sm-4 @elseif($cat_count==4) col-lg-3 col-md-3 col-sm-3 @endif">
    <a href="{{url('Product',$row->Name)}}">
    <div class="item-card overflow-hidden" id="cat_col">
      <div class="item-card-desc"  style="width: 100%; height: 300px;">
       <div class="card text-center overflow-hidden">
        <div class="card-img"> <img src="https://sanviexim.s3.ap-south-1.amazonaws.com/categories/{{$row->Image}}" alt="img" class="cover-image"> </div>
        <div class="item-tags">
         <div class="bg-secondary tag-option"> {{$row->Name}}</div> 
       </div>
       <div class="item-card-text">
         <h4 class="mb-0"><span> </span></h4>
       </div>
     </div>
   </div>
 </div>
 </a>
</div>
@endforeach
</div>
</div>
</section>
<!--/Categories--> <!--Latest Ads--> 
<section class="sptb bg-white">
  <div class="container">
   <div class="section-title center-block text-center">
    <h2>Latest Product</h2>
    <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
  </div>
  <div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons owl-loaded owl-drag">
    <div class="owl-stage-outer">
     <div class="owl-stage" style="transform: translate3d(-3202px, 0px, 0px); transition: all 0.25s ease 0s; width: 404px;">
      <div class="owl-item cloned" style="width: 375.333px; margin-right: 25px;">
       <div class="item">
        <div class="card mb-0">
         <div class="item7-card-img">
          <a href="blog-details.html"></a> <img src="{{url('/')}}/public/frontend/images/other/about.jpg" alt="img" class="cover-image"> 
          <div class="item7-card-text"> <span class="badge badge-primary">Duplex House</span> </div>
        </div>
        <div class="card-body p-4">
          <div class="item7-card-desc d-flex mb-2">
           <a href="#" class="text-muted"><i class="fa fa-calendar-o text-muted mr-2"></i>June-03-2019</a> 

         </div>
         <a href="blog-details.html" class="text-dark">
           <h4 class="font-weight-semibold">Laxury Flat For Rent</h4>
         </a>
         <p style="margin-bottom: 40px; margin-top:20px;;">Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>

       </div>
     </div>
   </div>
 </div>

 <div class="owl-item" style="width: 375.333px; margin-right: 25px;">
   <div class="item">
    <div class="card mb-0">
     <div class="item7-card-img">
      <a href="blog-details.html"></a> <img src="{{url('/')}}/public/frontend/images/other/about.jpg" alt="img" class="cover-image"> 
      <div class="item7-card-text"> <span class="badge badge-success">3BHK Flats</span> </div>
    </div>
    <div class="card-body p-4">
      <div class="item7-card-desc d-flex mb-2">
       <a href="#" class="text-muted"><i class="fa fa-calendar-o text-muted mr-2"></i>May-19-2019</a> 
       <div class="ml-auto"> <a href="#" class="text-muted"><i class="fa fa-comment-o text-muted mr-2"></i>8 Comments</a> </div>
     </div>
     <a href="blog-details.html" class="text-dark">
       <h4 class="font-weight-semibold">Laxury Home For Sale</h4>
     </a>
     <p style="margin-bottom: 40px; margin-top:20px;">Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>

   </div>
 </div>
</div>
</div>
<div class="owl-item" style="width: 375.333px; margin-right: 25px;">
 <div class="item">
  <div class="card mb-0">
   <div class="item7-card-img">
    <a href="blog-details.html"></a> <img src="{{url('/')}}/public/frontend/images/other/about.jpg" alt="img" class="cover-image"> 
    <div class="item7-card-text"> <span class="badge badge-info">Farm House</span> </div>
  </div>
  <div class="card-body p-4">
    <div class="item7-card-desc d-flex mb-2">
     <a href="#" class="text-muted"><i class="fa fa-calendar-o text-muted mr-2"></i>July-03-2019</a> 

   </div>
   <a href="blog-details.html" class="text-dark">
     <h4 class="fs-20">Laxury Flat For Rent</h4>
   </a>
   <p style="margin-bottom: 40px; margin-top:20px;">Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>

 </div>
</div>
</div>
</div>
<div class="owl-item" style="width: 375.333px; margin-right: 25px;">
 <div class="item">
  <div class="card mb-0">
   <div class="item7-card-img">
    <a href="blog-details.html"></a> <img src="{{url('/')}}/public/frontend/images/other/about.jpg" alt="img" class="cover-image"> 
    <div class="item7-card-text"> <span class="badge badge-primary">Laxury Room</span> </div>
  </div>
  <div class="card-body p-4">
    <div class="item7-card-desc d-flex mb-2">
     <a href="#" class="text-muted"><i class="fa fa-calendar-o text-muted mr-2"></i>June-03-2019</a> 
     <div class="ml-auto"> <a href="#" class="text-muted"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a> </div>
   </div>
   <a href="blog-details.html" class="text-dark">
     <h4 class="fs-20">Deluxe Flat For Sale</h4>
   </a>
   <p style="margin-bottom: 40px; margin-top:20px;">Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>

 </div>
</div>
</div>
</div>
<div class="owl-item" style="width: 375.333px; margin-right: 25px;">
 <div class="item">
  <div class="card mb-0">
   <div class="item7-card-img">
    <a href="blog-details.html"></a> <img src="{{url('/')}}/public/frontend/images/other/about.jpg" alt="img" class="cover-image"> 
    <div class="item7-card-text"> <span class="badge badge-success">2BHK Flat</span> </div>
  </div>
  <div class="card-body p-4">
    <div class="item7-card-desc d-flex mb-2">
     <a href="#" class="text-muted"><i class="fa fa-calendar-o text-muted mr-2"></i>June-19-2019</a> 
     <div class="ml-auto"> <a href="#" class="text-muted"><i class="fa fa-comment-o text-muted mr-2"></i>8 Comments</a> </div>
   </div>
   <a href="blog-details.html" class="text-dark">
     <h4 class="fs-20">Laxury Home For Sale</h4>
   </a>
   <p style="margin-bottom: 40px; margin-top:20px;">Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>

 </div>
</div>
</div>
</div>


</div>
</div>
<div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
<div class="owl-dots disabled"></div>
</div>
</div>
</section>
<!--Latest Ads--> <!--Featured Ads--> 

<section>
  <div class="about-1 cover-image sptb bg-background-color" data-image-src="{{url('/')}}/public/frontend/images/banners/banner5.jpg" style="background: url({{url('/')}}/public/frontend/images/banners/banner5.jpg) center center;">
   <div class="content-text mb-0 text-white info">
    <div class="container">
     <div class="row text-center">
      <div class="col-lg-3 col-md-6">
       <div class="counter-status md-mb-0">
        <div class="counter-icon"> <i class="icon icon-people"></i> </div>
        <h5>Total Agents</h5>
        <h2 class="counter mb-0 font-weight-bold">893</h2>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
     <div class="counter-status status-1 md-mb-0">
      <div class="counter-icon text-warning"> <i class="icon icon-rocket"></i> </div>
      <h5>Total Sales</h5>
      <h2 class="counter mb-0 font-weight-bold">1765</h2>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
   <div class="counter-status status md-mb-0">
    <div class="counter-icon text-primary"> <i class="icon icon-docs"></i> </div>
    <h5>Total Projects</h5>
    <h2 class="counter mb-0 font-weight-bold">846</h2>
  </div>
</div>
<div class="col-lg-3 col-md-6">
 <div class="counter-status status">
  <div class="counter-icon text-success"> <i class="icon icon-emotsmile"></i> </div>
  <h5>Happy Customers</h5>
  <h2 class="counter font-weight-bold mb-0">7253</h2>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--/Statistics--> <!--Property--> 
<section class="sptb bg-white">
  <div class="container">
   <div class="section-title center-block text-center">
    <h2>Welcome To SanviExim</h2>
    <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
  </div>
  <div class="row">
    <div class="col-12 col-md-12 col-lg-12 col-xl-6">
      <h3> Lorem Ipsum is simply dummy text of the pri</h3><br> 
      <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>  <br>   It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        <br>  <br>   It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  when an unknown printer took a galley of type and scrambled it to make a type specimen book.
      </p>
    </div>
    <div class="col-lg-12 col-md-12 col-xl-6 col-sm-12">
     <div class="item-card overflow-hidden">
      <div class="item-card-desc">
       <div class="card overflow-hidden mb-0">
        <div class="card-img"> <img src="{{url('/')}}/public/frontend/images/other/about.jpg" style="height: auto;" alt="img" class="cover-image"> </div>
        <div class="item-tags">
         <div class="bg-primary tag-option"><i class="fa fa fa-heart-o mr-1"></i> 567 </div>
       </div>
       <div class="item-card-text">
         <h4 class="mb-0">64,825<span><i class="fa fa-map-marker text-primary mr-1"></i>WASHINGTON</span></h4>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</div>
</section>
<!--Blogs--> <!--Download --> 

<section class="sptb ">
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
<section class="sptb bg-white">
  <div class="container">
   <div class="section-title center-block text-center">
    <h2>Certifications</h2>
    <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
  </div>
  <div id="small-categories" class="owl-carousel owl-carousel-icons2 owl-loaded owl-drag">
    <div class="owl-stage-outer">
     <div class="owl-stage" style="transform: translate3d(-2527px, 0px, 0px); transition: all 0s ease 0s; width: 8303px;">
    @foreach($cert as $row)
      <div class="owl-item cloned" style="width: 336px; margin-right: 25px;">
       <div class="item">
        <div class="card mb-0">
         <div class="item-card ">
          <div class="item-card-desc">
           <a href="#"></a> 
           <div class="item-card-img"> <img src="https://sanviexim.s3.ap-south-1.amazonaws.com/certifications/{{$row->Image}}" style="height: 200px;" alt="img" class="br-tr-7 br-tl-7"> </div>
           <div class="item-card-text">

           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 @endforeach
</div>
</div>
<div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
<div class="owl-dots disabled"></div>
</div>
</div>
</section>
@endsection