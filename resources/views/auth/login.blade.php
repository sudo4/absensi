<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  @include('layouts.title')
  <!--favicon-->
  <link rel="icon" href="/assets/images/logo-icon.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
    <div class="card card-authentication1 mx-auto my-5">
        <br>
        <div class="card-body">
         <div class="card-content p-2">
            <div class="text-center">
                <img src="/assets/images/logo-icon.png" class="logo-icon" style="width: 120px;" alt="logo icon">
            </div>
          <div class="card-title text-uppercase text-center py-3">Panitia Musyawarah Nasional APJATI 2020-2024</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group">
              <label for="exampleInputUsername" class="sr-only">{{ __('E-Mail Address') }}</label>
               <div class="position-relative has-icon-right">
                  <input id="email" type="email" class="form-control @error('email') input-shadow is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Enter Username">
                  <div class="form-control-position">
                      <i class="icon-user"></i>
                  </div>
                  @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                  @enderror
               </div>
              </div>
              <br>
              <div class="form-group">
              <label for="exampleInputPassword" class="sr-only">{{ __('Password') }}</label>
               <div class="position-relative has-icon-right">
                  <input type="password" id="exampleInputPassword" class="form-control  @error('password') is-invalid @enderror input-shadow" placeholder="Enter Password" name="password" required>
                  <div class="form-control-position">
                      <i class="icon-lock"></i>
                  </div>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                      </span>
                  @enderror
               </div>
              </div>
              <br>

            <div class="form-row">
             <div class="form-group col-6">
               <div class="icheck-material-primary">
                <input type="checkbox" id="user-checkbox" {{ old('remember') ? 'checked' : '' }} />
                <label for="user-checkbox">{{ __('Remember Me') }}</label>
              </div>
             </div>
            </div>
            <br>
             <button type="submit" class="btn btn-outline-primary btn-block">{{ __('Login') }}</button>
            
             
             </form>
           </div>
          </div>
         </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    
    
    
    </div><!--wrapper-->
    
  <!-- Bootstrap core JavaScript-->
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/popper.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
    
  <!-- sidebar-menu js -->
  <script src="/assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="/assets/js/app-script.js"></script>
  
</body>
</html>
