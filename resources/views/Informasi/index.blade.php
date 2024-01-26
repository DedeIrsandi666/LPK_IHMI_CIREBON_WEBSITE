@extends('layout')
@section('title', 'Halaman informasi')

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
    <div class="card-deck ">                
        <!-- Row -->
        <div class="row">
                @foreach ($informasis as $info)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                {{-- <center class="mt-4"> --}}
                                    <img src="{{ asset('data_img/informasi/'. $info->gambar) }}" style="width: 100px; height: 200px;">
                                    <br><br>    
                                    <h6 class="card-subtitle">{{$info->created_at}}</h6>
                                    <h4 class="card-title mt-2">{{ $info->postingan}}</h4>
                                    <br><br>
                                                                        
                                {{-- </center> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                <div class="my-5">
                    {{ $informasis->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection