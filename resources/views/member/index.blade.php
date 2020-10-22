@extends('layouts.member.main')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Munas APJATI 2020</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">Data Anggota</a></li>
                </ol>
            </div>

                <div class="col-lg-3">
                    <!-- Large Size Modal -->
                         <button class="btn btn-outline-primary btn-block m-1" data-toggle="modal" data-target="#formemodal">Tambah Data Baru</button>
                         <!-- Modal -->
                           <div class="modal fade" id="formemodal">
                             <div class="modal-dialog">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <h5 class="modal-title">Tambah Data Perusahaan</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <div class="modal-body">
                                     <form action="{{route('member.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                          <label for="input-1">Nama</label>
                                          <input type="text" class="form-control" id="input-1" placeholder="Masukkan Nama" required name="nama" value="{{old('nama')}}">
                                        </div>
                                        <div class="form-group">
                                            <label>P3MI</label>
                                            <select class="form-control single-select" name="company_id" required> 
                                                <option selected value="" readonly>Masukkan Nama P3MI</option>
                                                @foreach ($company as $company)
                                                    <option required value="{{ $company->id }}">{{ $company->nama }}</option>  
                                                @endforeach   
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-1">No. handphone</label>
                                            <input type="number" class="form-control" id="input-1" placeholder="Masukkan Nomor Ponsel" required name="no_hp" value="{{old('no_hp')}}">
                                        </div>
                                        <div class="form-group">
                                          <label for="input-1">Pilih Foto</label>
                                            <input type="file" class="form-control" id="input-8" name="photo" required>
                                        </div>

                                        
                                        <br>
                                        <div class="form-group">
                                          <button type="submit" class="btn btn-primary icheck-material-primary"> 
                                            <input id="primary1" type="radio" name="kehadiran" value="tidak_hadir" checked="tidak_hadir">
                                            Simpan
                                          </button>
                                        </div>
                                   </form>
                                   
                                 </div>
                               </div>
                             </div>
                           </div>
                           
                  </div>

        </div>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered">
                                <thead>
                                    <tr></a>
                                        <th>Nama</th>
                                        <th>P3MI</th>
                                        <th>No. Handphone</th>
                                        <th>Kehadiran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($member as $a)
                                    <tr>
                                        <td>{{ $a->nama }}</td>
                                        <td>{{ $a->company['nama'] }}</td>
                                        <td>{{ $a->no_hp }}</td>
                                        <td class="text-center">
                                          @if($a->kehadiran == 'hadir')                                                
                                          <strong class="text-success">HADIR</strong>
                                          @elseif($a->kehadiran == 'tidak_hadir')
                                          <strong class="text-warning">BELUM DIKONFIRMASI</strong>
                                          @endif
                                        </td>
                                        <td class="text-center">
                                            <a type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu">
                                              @role('superadministrator')
                                              <a href="{{ route('member.edit', $a->uuid) }}" class="dropdown-item">Edit</a>
                                              @endrole
                                              <a href="{{ route('member.show', $a->uuid) }}" class="dropdown-item">Konfirmasi</a>
                                            </div>
                                            {{-- <a class="btn btn-sm btn-warning" href="{{ route('visitor.edit', $a->id) }}"> edit</a> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody> 
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->
        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
  <!--end overlay-->
    </div>
    <!-- End container-fluid-->
</div>
@endsection