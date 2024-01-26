@extends('layout')
@section('title', 'Details Peserta')

@section('content')

<div class="card mb-4">
            {{-- <div class="card-header"><i class="fas fa-table mr-1"></i>Aneka Minuman Kopi</div> --}}

            <div class="card-body">
                <div class="table-responsive">
                @if ($massage = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $massage }}</p>
                    </div>
                @endif

    

             {{-- <p>jika ingin memesan minuman yang ada di menu bisa isi form di bawah ini lalu klik Tombol Keranjang Hijau</p><br> --}}

             <div class="container">
    <div class="card-deck">                
                <!-- Row -->
                <div class="row">
                    @foreach ($pesertas as $psrt)
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
                                <center class="mt-4"> <img src="{{ url('/data_img/user/'.$psrt->foto) }}" class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2">{{$psrt->name}}</h4>
                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    {{-- <div class="row justify-content-center">
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <i class="icon-people" aria-hidden="true"></i>
                                                <span class="font-normal">254</span>
                                            </a></div>
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <i class="icon-picture" aria-hidden="true"></i>
                                                <span class="font-normal">54</span>
                                            </a>
                                        </div>
                                    </div> --}}
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Nama Lengkap</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="{{$psrt->name}}"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <label for="">{{$psrt->alamat}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <label for="">{{$psrt->email}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Password</label>
                                        <div class="col-md-12">
                                            <label for="">{{$psrt->password}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Angkatan</label>
                                        <div class="col-md-12">
                                            <label for="">{{$psrt->angkatan}}</label>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="form-group">
                                        <label class="col-md-12 mb-0">Nomor Telepon</label>
                                        <div class="col-md-12">
                                            <label for="">{{$psrt->password}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Message</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control ps-0 form-control-line"></textarea>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="form-group">
                                        <label class="col-sm-12">Select Country</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select class="form-select shadow-none border-0 ps-0 form-control-line">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <a href="{{ route('peserta.edit',$psrt->id) }}" class="btn btn-success mx-auto mx-md-0 text-white">Edit Profil Peserta</a>
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