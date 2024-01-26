@extends('layout')
@section('title', 'Details Peserta')

@section('content')

<div class="card mb-4">
                        <div class="card-body">
                <div class="table-responsive">
                @if ($massage = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $massage }}</p>
                    </div>
                @endif



<div class="container">
    <div class="card-deck">                
                <!-- Row -->
                <div class="row">
                    
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
                                <img src="{{ url('/data_img/peserta/'.$peserta->foto) }}" class="rounded-circle" style="width: 200px; height: 200px;" />                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    {{-- <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('data_img/peserta/' . $peserta->gambar) }}" style="width: 200px; height: 200px;">
                        </div>
                        <div class="col-md-6">
                            <p><strong>Nama:</strong> {{ $peserta->nama }}</p>
                            <p><strong>Alamat:</strong> {{ $peserta->alamat }}</p>
                            <p><strong>Email:</strong> {{ $peserta->email }}</p>
                            <p><strong>Angkatan:</strong> {{ $peserta->angkatan }}</p>
                            <!-- Tambahkan field tambahan sesuai kebutuhan -->
                        </div>
                    </div> --}}
                    <!-- Column -->
        
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Nama Lengkap</label>
                                        <div class="col-md-12">
                                            <label for="">{{$peserta->nama}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <label for="">{{$peserta->alamat}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <label for="">{{$peserta->email}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Password</label>
                                        <div class="col-md-12">
                                            <label for="">{{$peserta->password}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Angkatan</label>
                                        <div class="col-md-12">
                                            <label for="">{{$peserta->angkatan}}</label>
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            
                                            {{-- <a href="{{ route('peserta.edit',$peserta->id_peserta) }}" class="btn btn-success mx-auto mx-md-0 text-white">Edit Profil Peserta</a> --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
           @endsection