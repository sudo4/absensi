@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Munas APJATI 2020</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/qrscan">Qr Scanner</a></li>
                    <!-- <li class="breadcrumb-item"><a href="javaScript:void();">Munas APJATI 2020</a></li> -->
                    <!-- <li class="breadcrumb-item active" aria-current="page">Qr Scanner</li> -->
                </ol>
            </div>
        </div>
         
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <!-- <div class="card-header"><i class="fa fa-table"></i> Qr Scanner</div> -->
                    <div class="card-body text-center">
                        <video id="preview" class="text-center" style="padding-top: 0px; width: 70vw; height: 50vw; /* 30% of width */">
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

                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row-->
        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
  <!--end overlay-->
    </div>
    <!-- End container-fluid-->   
</div>

@endsection