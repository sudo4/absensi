@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Munas APJATI 2020</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Data Pengunjung</a></li>
            <li class="breadcrumb-item active" aria-current="page">Konfirmasi Kehadiran</li>
         </ol>
       </div>

     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info"  method="post">
                    <h4 class="form-header text-uppercase">
                    Konfirmasi Kehadiran
                    </h4>
                    <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input-1" name="nama" readonly value="{{$visitor->nama}}">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="input-1" name="nik" readonly value="{{$visitor->nik}}">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="input-2" class="col-sm-2 col-form-label">No Handphone</label>
                    <div class="col-sm-10">
                        <input type="phone" class="form-control" id="input-2" name="phone" readonly value="{{$visitor->phone}}">
                    </div>
                    </div>
              </form>
              <div class="form-group">  
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <form id="personal-info" action="{{route('visitor.update', $visitor->uuid)}}" method="post">
                                @csrf
                                @method('patch')
                                <button type="submit" href="/visitor" class="btn btn-block btn-outline-warning icheck-material-primary"> 
                                    <input id="success1" type="radio" name="konfirmasi" value="tidak_hadir" checked="tidak_hadir">
                                    CANCEL
                                </button>
                            </form> 
                        </div>
                        <div class="col-sm-12">
                        <form id="personal-info" action="{{route('visitor.update', $visitor->uuid)}}" method="post">
                            @csrf
                            @method('patch')
                            <button type="submit" href="/visitor" class="btn btn-block btn-outline-primary icheck-material-primary"> 
                                <input id="success1" type="radio" name="konfirmasi" value="hadir" checked="hadir">
                                CONFIRM
                            </button>
                        </form>
                        </div>
                        @role('superadministrator')
                    <div class="col-lg-12">
         
                          <button class="btn btn-block btn-outline-info icheck-material-primary" data-toggle="modal" data-target="#smallsizemodal">QRCODE</button>
                          <!-- Modal -->
                            <div class="modal fade" id="smallsizemodal">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content text-center" style="background: white;">
                                  <div class="modal-header">
                                    <div class="modal-body">
                                      {!! QrCode::size(220)->generate(Request::url()); !!}
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                    @endrole 
                    </div> 
              </div>
              
            </div>
          </div>
        </div>
      </div><!--End Row-->

<!--start overlay-->
      <div class="overlay toggle-menu"></div>
    <!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div>
@endsection