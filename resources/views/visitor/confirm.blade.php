@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Form Validation</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
         </ol>
       </div>
       <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" action="{{route('visitor.confirmed', $visitor->id)}}" method="post">
                @csrf
                @method('patch')
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Personal Info
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
                <div class="form-footer">
                    <button type="cancel" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <label class="btn btn-success" id="customradio">
                        <input type="radio" name="kehadiran" value="status">
                        {{ old('kehadiran') == 'hadir' ? 'checked' : '' }}
                        <label for="customradio">HADIR</label>
                    </label>
                   
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