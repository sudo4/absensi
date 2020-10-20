@extends('layouts.member.main')

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
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form>
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Personal Info
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="nama" disabled value="{{$member->nama}}">
                  </div>
                </div>
               
                <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">P3MI</label>
                    <div class="col-sm-10">
                        <div class="form-control single-select" name="company_id" disabled> 
                            @foreach ($company as $company)
                                <option value="{{ $company->id }}"
                                    @if ($company->id == $member->company_id)
                                        selected
                                    @endif disabled>{{ $company->nama }}</option>  
                            @endforeach   
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">No. Handphone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-1" name="no_hp" value="{{$member->no_hp}}">
                    </div>
                  </div>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Photo Preview</label>
                  <div class="col-sm-10">
                    <img class="col-sm-3" src="{{asset($member->photo)}}" alt="">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">Pilih Foto</label>
                    <div class="col-sm-10">  
                        <input type="file" class="form-control" id="input-8" name="photo" value="{{$member->photo}}">
                    </div>
                </div>
              </form>
              <div class="btn-group">  
                <div class="form-group row">
                    <div class="col-sm-6">
                        <form id="personal-info" action="{{route('absensi.update', $member->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <button type="submit" href="/absensi" class="btn btn-outline-danger icheck-material-primary"> 
                                <input id="success1" type="radio" name="absensi" value="keluar" checked="masuk">
                                
                                
                               
                                KELUAR
                            </button>
                        </form> 
                    </div>
                    <div class="col-sm-6">
                        <form id="personal-info" action="{{route('absensi.update', $member->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <button type="submit" href="/member" class="btn btn-outline-primary icheck-material-primary"> 
                                <input id="success1" type="radio" name="absensi" value="masuk" checked="masuk">
                                MASUK
                            </button> 
                        </form>
                    </div>
                    
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