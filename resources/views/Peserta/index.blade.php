
@extends('layout')
@section('title', 'Halaman Daftar Peserta')

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

<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Peserta</h4>
                                {{-- <h6 class="card-subtitle">Add class <code>.table</code></h6> --}}
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">No</th>
                                                <th class="border-top-0">Foto</th>
                                                <th class="border-top-0">Nama</th>
                                                {{-- <th class="border-top-0">Alamat</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Password</th> --}}
                                                <th class="border-top-0">Angkatan</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pesertas as $peserta)
                                            
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td><img src="{{ asset('data_img/peserta/'. $peserta->foto) }}" style="width: 100px; height: 100px;"></td>
                                                <td>{{ $peserta->nama }}</td>
                                                {{-- <td>{{ $psrt->alamat }}</td>
                                                <td>{{ $psrt->email }}</td>
                                                <td>{{ $psrt->password }}</td> --}}
                                                <td>{{ $peserta->angkatan }}</td>
                                                <td>
                                                    <a href="{{ route('peserta.show',$peserta->id_peserta) }}" class="btn btn-sm btn-success mx-auto mx-md-0 text-white">Details</a>
                                            <br><br>
                                                    <form action="{{ route('peserta.destroy',$peserta->id_peserta) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger " onclick="javascript: return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus
                                                        </button>
                                                    </form>
                                                      
                                                </td>
                                            </tr>
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="my-5">
                                        {{ $pesertas->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
           @endsection