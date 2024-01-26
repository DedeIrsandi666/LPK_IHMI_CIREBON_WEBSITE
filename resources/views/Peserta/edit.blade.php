@extends('layout')
@section('title', 'Halaman Ubah Data Peserta')

@section('content')
<div class="container-fluid">
                        <h1 class="mt-4">Ubah Data Peserta</h1>
                        {{-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Peserta</li>
                        </ol> --}}
                        
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-edit mr-1"></i> Data Peserta</div>
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

<form action="{{route('peserta.update', $peserta->id)}}" method ="POST" enctype="multipart/form-data">                                       
    @csrf
    @method('PUT') 
    <div class="form-row">
        
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Nama:</strong>
            <input type="text" name="nama" class="form-control" value ="{{ $peserta->nama}}"> 
         </div> 
        </div>
        
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Alamat:</strong>
            <input type="text" name="alamat" class="form-control" value ="{{ $peserta->alamat }}"> 
         </div> 
        </div>
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Email:</strong>
            <input type="text" name="email" class="form-control" value ="{{ $peserta->email }}"> 
         </div> 
        </div>
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Password:</strong>
            <input type="text" name="password" class="form-control" value ="{{ $peserta->password }}"> 
         </div> 
        </div>
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Angkatan:</strong>
            <input type="text" name="angkatan" class="form-control" value ="{{ $peserta->angkatan }}"> 
         </div> 
        </div>
            
        <div class= "col-xs-12 col-sm-12 col-md-12 text-centre mt-13">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a class="btn btn-primary" href="{{ route('peserta.index') }}">Back</a>
        </div>
        
     </div>
</form>
@endsection