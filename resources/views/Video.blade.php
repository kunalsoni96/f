@extends('layouts.Master')
@section('MainSection')
    <section>
         <div class="bannerimg cover-image bg-background3 sptb-2" data-image-src="{{url('/')}}/public/frontend/images/banners/banner2.jpg" style="background: url('{{url('/')}}/public/frontend/images/banners/banner2.jpg') center center;">
            <div class="header-text mb-0">
               <div class="container">
                  <div class="text-center text-white ">
                     <h1 class="">Videos</h1>
                     <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="{{route('Index')}}">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Videos</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </section>
       
         <section class="sptb">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12">
                     <!--Add lists--> 
                     <div class=" mb-lg-0">
                                 <div class="tab-pane active" id="tab-12">
                                    <div class="row">
                                    @foreach($data as $row)
                                       <div class="col-lg-6 col-md-12 col-xl-4">
                                          <div class="card overflow-hidden">
                                            <iframe width="100%" height="280" src="{{$row->URL}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                       </div>
                                    </div>
                                    @endforeach
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