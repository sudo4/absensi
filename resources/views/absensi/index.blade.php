@extends('layouts.member.main')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Munas APJATI 2020</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">Absensi Peserta Munas</a></li>
                </ol>
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
                                    <tr class="text-center">
                                        <th>Nama</th>
                                        <th>P3MI</th>
                                        <th>Kehadiran</th>
                                        <th>Konfirmasi Pada</th>
                                        <th>Konfirmasi Oleh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($member as $a)
                                    <tr>
                                        <td><a href="{{ route('absensi.show', $a->uuid) }}" style="color: #ffffff; "><p>{{ $a->nama }}</p></a></td>
                                        <td>{{ $a->company['nama'] }}</td>
                                        <td class="text-center">
                                          @if($a->absensi == 'Masuk')                                                
                                          <p class="text-success">MASUK</p>
                                          @elseif($a->absensi == 'Keluar')
                                          <p class="text-danger">KELUAR</p>
                                          @endif
                                        </td>
                                        <td class="text-center">
                                          @if($a->absensi == NULL)              
                                          <p class="text-success"></p>
                                          @elseif($a->absensi != NULL)
                                          <p class="text-success">
                                            {{ Carbon\Carbon::parse($a->updated_at)->format("D") }}
                                           | {{ Carbon\Carbon::parse($a->updated_at)->format("d/M/Y") }} | {{ Carbon\Carbon::parse($a->updated_at)->format("H:i") }}
                                          </p>
                                          @endif
                                            
                                        </td>
                                        <td class="text-center">
                                          @if($a->absensi == NULL)                    
                                          <p class="text-success"></p>
                                          @elseif($a->absensi != NULL)
                                          <p class="text-success">{{ strtoupper($a->confirm_by) }}</p>
                                          @endif
                                            

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