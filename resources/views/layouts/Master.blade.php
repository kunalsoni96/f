 @include('layouts.Header')
   <body >
      <div class="horizontalMenucontainer">
        
         <!--Topbar--> 
       @include('layouts.Navbar')
         <!--Sliders Section--> 
        @yield('MainSection')
      
        @include('layouts.Footer')
       @include('layouts.Javascript')
      </div>
   </body>
</html>
