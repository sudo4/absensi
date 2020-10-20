

      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Qr Scanner</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Panitia</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Munas APJATI 2020</a></li>
            <li class="breadcrumb-item active" aria-current="page">Qr Scanner</li>
         </ol>
       </div>
     </div>
    <!-- End Breadcrumb-->
    
    <h6 class="text-uppercase">Qr Code Scanner</h6>
       <hr>
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body text-center">                   
                    <p> <video id="preview" class="text-center"
                        style="padding-top: 0px; width: 70vw; 
                        height: 50vw; /* 30% of width */">
                        </video>
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        window.location.href = content;
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script></p>
                </div>
            </div>
        </div>
       
    </div><!--End Row-->
