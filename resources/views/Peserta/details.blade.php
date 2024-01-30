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
        </div>
    </div>



<div class="container">               
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('data_img/peserta/' . $peserta->foto) }}" style="height: 60%; ">
        </div>
        <div class="col-md-6">
            <h5><strong>Nama:</strong> {{ $peserta->nama }}</h5><br>
            <h5><strong>Alamat:</strong> {{ $peserta->alamat }}</h5><br>
            <h5><strong>Email:</strong> {{ $peserta->email }}</h5><br>
            <h5><strong>Angkatan:</strong> {{ $peserta->angkatan }}</h5><br>
        </div>
    </div>
</div>
@endsection