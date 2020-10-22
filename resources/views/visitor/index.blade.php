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
                </ol>
            </div>
                @role('superadministrator')
                <div class="col-lg-3">
                    <!-- Large Size Modal -->
                         <button class="btn btn-outline-primary btn-block m-1" data-toggle="modal" data-target="#formemodal">Tambah Data Baru</button>
                         <!-- Modal -->
                           <div class="modal fade" id="formemodal">
                             <div class="modal-dialog">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <h5 class="modal-title">Tambah Data Tamu Undangan</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <div class="modal-body">
                                     <form action="{{route('visitor.store')}}", method="post">
                                        @csrf
                                        <div class="form-group">
                                          <label for="input-1">Nama</label>
                                          <input type="text" class="form-control" id="input-1" placeholder="Masukkan Nama" required name="nama" value="{{old('nama')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-1">NIK</label>
                                            <input type="number" class="form-control" id="input-1" placeholder="Masukkan NIK" required name="nik" value="{{old('nik')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-1">No Handphone</label>
                                            <input type="number" class="form-control" id="input-1" placeholder="Masukkan No Handphone" required name="phone" value="{{old('phone')}}">
                                        </div>
                                        <h4 class="form-header text-uppercase">
                                        </h4>
                                        <br>
                                        <div class="form-group">
                                         <button type="submit" class="btn btn-primary icheck-material-primary"> 
                                          <input id="primary1" type="radio" name="konfirmasi" value="tidak_hadir" checked="tidak_hadir">
                                          Simpan</button>
                                       </div>
                                   </form>
                                 </div>
                               </div>
                             </div>
                           </div>
                  </div>
                  @endrole

        </div>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nama</th>
                                        <th>Nik</th>
                                        <th>No Handphone</th>
                                        <th>Konfirmasi Kehadiran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($visitor as $a)
                                    <tr>
                                        <td>{{ $a->nama }}</td>
                                        <td>{{ $a->nik }}</td>
                                        <td>{{ $a->phone }}</td>
                                        <td class="text-center">
                                          @if($a->konfirmasi == 'hadir')                                                
                                          <strong class="text-success">HADIR</strong>
                                          @elseif($a->konfirmasi == 'tidak_hadir')
                                          <strong class="text-warning">BELUM DIKONFIRMASI</strong>
                                          @endif
                                        </td>
                                        <td class="text-center">
                                            <a type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu">
                                              @role('superadministrator')
                                              <a href="{{ route('visitor.edit', $a->uuid) }}" class="dropdown-item">Edit</a>
                                              @endrole
                                              <a href="{{ route('visitor.show', $a->uuid) }}" class="dropdown-item">Konfirmasi</a>
                                              <div class="dropdown-divider"></div>
                                              
                                            </div>
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