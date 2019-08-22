@include('Admin.layouts.Header')

<body class="">
  <div class="wrapper">
    <style>
.dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #ffffff;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-top:6px;
}
/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  padding-left: 8px;
  outline:none;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  color: #ffffff;
  margin-left:7px;
}

</style>

@include('Admin.layouts.Sidebar')
    <div class="main-panel">
      <!-- Navbar -->
      <style type="text/css">
   #log_out:hover{
    background-color:#665C7C; color:white;
   }
 </style>
 @include('Admin.layouts.Navbar')
  @yield('main_section')
@include('Admin.layouts.Javascript')