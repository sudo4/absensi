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
            <li class="breadcrumb-item active" aria-current="page">Ubah Data Pengunjung</li>
         </ol>
       </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" action="{{route('visitor.update', $visitor->uuid)}}" method="post">
                @csrf
                @method('patch')
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Personal Info
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="nama" required value="{{$visitor->nama}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">NIK</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="input-1" name="nik" required value="{{$visitor->nik}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-2" class="col-sm-2 col-form-label">No Handphone</label>
                  <div class="col-sm-10">
                    <input type="phone" class="form-control" id="input-2" name="phone" required value="{{$visitor->phone}}">
                  </div>
                </div>
                <div class="form-footer">
                    <button type="cancel" class="btn btn-block btn-outline-danger icheck-material-primary">CANCEL</button>
                    <button type="submit" class="btn btn-block btn-outline-success icheck-material-primary">                     
                      <input type="radio" name="konfirmasi" value="tidak_hadir" check="tidak_hadir">
                      SAVE
                    </button>
                </div>
              </form>
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