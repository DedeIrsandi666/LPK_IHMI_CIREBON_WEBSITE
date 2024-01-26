@extends('layout')
@section('title', 'Halaman Tambah Peserta')

@section('content')
<div class="container-fluid">
                        <h1 class="mt-4">Tambah Peserta</h1>
                        {{-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Menu</li>
                        </ol> --}}
                        
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-edit mr-1"></i> Masukan Data Data Peserta</div>
                            <div class="card-body">
@if ($errors-> any())
<div class= "alert alert-danger">
    <strong> Whoops </strong> there were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
     </ul>
</div>
@endif
<form action="{{ route('peserta.store') }}" method ="POST" enctype="multipart/form-data">
    @csrf 

    <div class= "col-md-12">
      <div class= "form-group">
         <strong>Foto:</strong>
         <input type="file" name="foto">
      </div> 
     </div>

    <div class="form-row">
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Nama Peserta:</strong>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Peserta...">
         </div> 
        </div>
        
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Alamat:</strong>
            <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Peserta...">
         </div> 
        </div>
        
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Email:</strong>
            <input type="text" name="email" class="form-control" placeholder="Masukan Email Peserta...">
         </div> 
        </div>

        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Password:</strong>
            <input type="password" name="password" class="form-control" placeholder="Masukan Password Peserta...">
         </div> 
        </div>

        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Angkatan:</strong>
            <input type="text" name="angkatan" class="form-control" placeholder="Masukan Tahun Angkatan Peserta...">
         </div> 
        </div>

        <div class= "col-xs-12 col-sm-12 col-md-12 text-centre mt-13">
            <button type="submit" class="btn btn-success">Simpan</button>
            {{-- <a class="btn btn-primary" href="{{ route('peserta.index') }}">Kembali</a> --}}
        </div>
     </div>
</form>
@endsection