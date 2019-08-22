<div class="sidebar" data-color="rose" data-background-color="black">

      <div class="logo">

        <a href="{{route('Admin/Dashboard')}}" class="simple-text logo-normal">
        <center> <img src="{{url('/')}}/public/frontend/img/logo.png" style="width: 180px;">  </center>
        </a>
      </div>
      <div class="sidebar-wrapper">
    
        <ul class="nav">
          <li class="nav-item active" >
            <a style="box-shadow: none;" class="nav-link" href="{{route('Admin/Dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples4">
              <i class="fa fa-asterisk"></i>
              <p> Master Category
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples4">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/MasterCategory')}}">
                    <span class="sidebar-mini"> MC </span>
                    <span class="sidebar-normal">Manage</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/MasterCategory/Add')}}">
                    <span class="sidebar-mini"> MC </span>
                    <span class="sidebar-normal"> Add </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples5">
              <i class="fa fa-list"></i>
              <p> Product Category
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples5">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/MasterSubCategory')}}">
                    <span class="sidebar-mini"> PC </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/MasterSubCategory/Add')}}">
                    <span class="sidebar-mini"> PC </span>
                    <span class="sidebar-normal"> Add </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples6">
              <i class="fa fa-list"></i>
              <p> Product Sub Category
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples6">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/SubCategory')}}">
                    <span class="sidebar-mini"> PSC </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/SubCategory/Add')}}">
                    <span class="sidebar-mini"> PSC </span>
                    <span class="sidebar-normal"> Add  </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples10">
              <i class="fa fa-product-hunt"></i>
              <p>  Product
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples10">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Product')}}">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Product/Add')}}">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Add </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples1">
              <i class="fa fa-picture-o"></i>
              <p> Banner
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples1">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Banner')}}">
                    <span class="sidebar-mini"> B </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Banner/Add')}}">
                    <span class="sidebar-mini"> B </span>
                    <span class="sidebar-normal"> Add </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>


           <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples2">
              <i class="fa fa-file-o"></i>
              <p> Images
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples2">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Image')}}">
                    <span class="sidebar-mini"> I </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Image/Add')}}">
                    <span class="sidebar-mini"> I </span>
                    <span class="sidebar-normal"> Add </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>


           <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples3">
              <i class="fa fa-video-camera"></i>
              <p> Videos
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples3">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Video')}}">
                    <span class="sidebar-mini"> V </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Video/Add')}}">
                    <span class="sidebar-mini"> V </span>
                    <span class="sidebar-normal"> Add  </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

           <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples9">
              <i class="fa fa-file"></i>
              <p> Certifications
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples9">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Certification')}}">
                    <span class="sidebar-mini"> C </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Certification/Add')}}">
                    <span class="sidebar-mini"> C </span>
                    <span class="sidebar-normal"> Add  </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

           <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples7">
              <i class="fa fa-phone"></i>
              <p> Enquiry Details
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples7">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/EnquiryForm')}}">
                    <span class="sidebar-mini"> ED </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          
         <form action="{{route('logout')}}" method="post">
            {{csrf_field()}}            <li class="nav-item">
              <a class="nav-link">
              <i class="fa fa-power-off"></i>
                <p>
                  <input type="submit" style="cursor: pointer;color:white;background-color:transparent;border:none;outline:none;margin-left:-7px;" value="Log out">
                </p>
              </a>
            </li>
          </form>
           <br><br><br><br>
<br><br>
<br><br>


        </ul>
      </div>
    </div>