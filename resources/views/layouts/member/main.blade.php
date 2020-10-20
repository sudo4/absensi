<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  @include('layouts.title')
  <link href="/asset/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <link href="/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="/assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  <link href="/assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css">
  <link href="/assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">
  <link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
  <link href="/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css">
  <link href="/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <link href="/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <link href="/assets/css/sidebar-menu.css" rel="stylesheet"/>
  <link href="/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme15">

   <!-- start loader -->
  @include('layouts.loader')
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

   <!--Start sidebar-wrapper-->
   @include('layouts.sidebar')

   @include('layouts.topbar')
<!--End topbar header-->

<div class="clearfix"></div>
  
  
    @yield('content')
    <!-- End container-fluid-->
    
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

  <!--Bootstrap Touchspin Js-->
    <script src="/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
    <script src="/assets/plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js"></script>

    <!--Select Plugins Js-->
    <script src="/assets/plugins/select2/js/select2.min.js"></script>
    <!--Inputtags Js-->
    <script src="/assets/plugins/inputtags/js/bootstrap-tagsinput.js"></script>
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

    <!--Multi Select Js-->
    <script src="/asset/plugins/jquery-multi-select/jquery.multi-select.js"></script>
    <script src="/asset/plugins/jquery-multi-select/jquery.quicksearch.js"></script>
    <script src="/assets/plugins/dropzone/js/dropzone.js"></script>
    
    <script>
        $(document).ready(function() {
            $('.single-select').select2({
              placeholder: 'Masukkan Nama Perusahaan',
              minimumInputLength: 3,
            });
      
            $('.multiple-select').select2();

        //multiselect start

           

          });

    </script>
      <script src="assets/plugins/notifications/js/lobibox.min.js"></script>
      <script src="assets/plugins/notifications/js/notifications.min.js"></script>
      <script src="assets/plugins/notifications/js/notification-custom-script.js"></script>
</body>
</html>
