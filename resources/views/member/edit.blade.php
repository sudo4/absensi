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
              <form id="personal-info" action="{{route('member.update', $member->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Personal Info
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="nama" value="{{$member->nama}}">
                  </div>
                </div>
               
                <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">P3MI</label>
                    <div class="col-sm-10">
                    <select class="form-control single-select" name="company_id" > 
                        <option selected value="" readonly>Masukkan Nama P3MI</option>
                        @foreach ($company as $company)
                            <option value="{{ $company->id }}"
                                @if ($company->id == $member->company_id)
                                    selected
                                @endif>{{ $company->nama }}</option>  
                        @endforeach   
                    </select>
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
                
                <div class="form-footer">
                    <a class="btn btn-outline-danger" href="/member"><i class="fa fa-times"></i> CANCEL</a>
                    <button type="submit" class="btn btn-outline-primary"><i class="fa fa-check-square-o"></i> SAVE</button>
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