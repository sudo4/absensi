  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="/home">
       <h5 class="logo-text">PANITIA</h5>
       <h5 class="logo-text">Munas APJATI 2020</h5>
     </a>
   </div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
       <div class="media-body text-center">
       <h6 class="side-user-name">Halo, "{{ucfirst(Auth::user()->name)}}"</h6>
      </div>
       </div>
     <div id="user-dropdown" class="collapse">
      <ul class="user-setting-menu">
            <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
            <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
      <li><a href="javaScript:void();"><i class="icon-power"></i> Logout</a></li>
      </ul>
     </div>
      </div>
               
   <ul class="sidebar-menu">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="/home" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Qr Scanner</span><i class=""></i>
        </a>
      </li>
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti ti-desktop"></i> <span>Data</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="/visitor"><i class="zmdi zmdi-dot-circle-alt"></i> Pengunjung</a></li>
          <li><a href="/member"><i class="zmdi zmdi-dot-circle-alt"></i> Delegasi</a></li>
          <li><a href="/company"><i class="zmdi zmdi-dot-circle-alt"></i> P3MI</a></li>

        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti ti-notepad"></i> <span>Absensi</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="/absensi"><i class="zmdi zmdi-dot-circle-alt"></i> Delegasi</a></li>
        </ul>
      </li>
      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>
    </ul>
 
   
   </div>