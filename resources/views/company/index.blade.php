@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Data Tables</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
                    <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
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
                                   <h5 class="modal-title">Tambah Data Perusahaan</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <div class="modal-body">
                                     <form action="{{route('company.store')}}", method="post">
                                        @csrf
                                        <div class="form-group">
                                          <label for="input-1">Nama p3mi</label>
                                          <input type="text" class="form-control" id="input-1" placeholder="Masukkan Nama" required name="nama" value="{{old('nama')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-1">sippmi</label>
                                            <input type="text" class="form-control" id="input-1" placeholder="Masukkan SIPPMI" required name="sippmi" value="{{old('sippmi')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-1">Alamat</label>
                                            <textarea type="text" class="form-control" id="input-1" rows="4" placeholder="Masukkan Alamat" required name="alamat" value="{{old('alamat')}}"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-1">Telp Kantor</label>
                                            <input type="text" class="form-control" id="input-1" placeholder="Masukkan Nomor Telepon Kantor" required name="telp_kantor" value="{{old('telp_kantor')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-1">Fax (opt)</label>
                                            <input type="text" class="form-control" id="input-1" placeholder="Masukkan Nomor Fax" name="telp_kantor2" value="{{old('telp_kantor2')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-1">Email</label>
                                            <input type="email" class="form-control" id="input-1" placeholder="Masukkan Email" required name="surel" value="{{old('surel')}}">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                         <button type="submit" class="btn btn-primary px-5"><i class="icon-check"></i> Simpan</button>
                                       </div>
                                   </form>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="modal fade" id="imagemodal">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Tambah Data Tamu Undangan</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
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
                    <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered">
                                <thead>
                                    <tr></a>
                                        <th>P3MI</th>
                                        <th>SIPPMI</th>
                                        <th>Alamat</th>
                                        <th>Telp Kantor</th>
                                        <th>Fax</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($company as $a)
                                    <tr>
                                        <td>{{ $a->nama }}</td>
                                        <td>{{ $a->sippmi }}</td>
                                        <td>{{ $a->alamat }}</td>
                                        <td>{{ $a->telp_kantor }}</td>
                                        <td>{{ $a->telp_kantor2 }}</td>
                                        <td>{{ $a->surel }}</td>
                                      
                                        <td class="text-center">
                                            <a type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </a>
                                            @role('superadministrator')
                                            <div class="dropdown-menu">
                                              
                                              <a href="{{ route('company.edit', $a->id) }}" class="dropdown-item">Edit</a>
                                              
                                            </div>
                                            @endrole
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