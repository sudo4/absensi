<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  @include('layouts.title')
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!--Data Tables -->
  <link href="/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  
  <!-- animate CSS-->
  <link href="/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="/assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="/assets/css/app-style.css" rel="stylesheet"/>
  <!-- skins CSS-->
  <link href="/assets/css/skins.css" rel="stylesheet"/>
  <script src="/assets/jquery.min.js"></script>
  <script src="/assets/instascan.min.js"></script>
</head>

<body class="bg-theme bg-theme15">

<!-- start loader -->
@include('layouts.loader')
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

   <!--Start sidebar-wrapper-->
    @include('layouts.sidebar')
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
@include('layouts.topbar')
<!--End topbar header-->

<div class="clearfix"></div>
  
  @yield('content')
<!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
  <!--Start footer-->
  @include('layouts.footer')
  <!--End footer-->
  
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
    <li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
 <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/popper.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  
  <!-- simplebar js -->
  <script src="/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="/assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="/assets/js/app-script.js"></script>

  <!--Data Tables js-->
  <script src="/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'excel', 'pdf']
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
      <script src="/asset/plugins/notifications/js/lobibox.min.js"></script>
      <script src="/asset/plugins/notifications/js/notifications.min.js"></script>
      <script src="/asset/plugins/notifications/js/notification-custom-script.js"></script>
      
</body>
</html>
