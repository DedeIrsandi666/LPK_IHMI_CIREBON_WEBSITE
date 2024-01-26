@extends('layout')
@section('title', 'Halaman Unggah Informasi')

@section('content')
<div class="container-fluid">
                        <h1 class="mt-4">Unggah Informasi</h1>
                        
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-edit mr-1"></i> Isi Informasi Yang Akan di Unggah</div>
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
<form action="{{ route('informasi.store') }}" method ="POST" enctype="multipart/form-data">
    @csrf 
    <div class="form-row">
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Isi Informasi:</strong>
            <textarea width="450px"type="text" name="postingan" style="height: 384px" class="form-control" placeholder="Tuliskan Informasi..."></textarea>
         </div> 
        </div>
        
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>gambar:</strong>
            <input type="file" name="gambar">
         </div> 
        </div>

        
            
        <div class= "col-xs-12 col-sm-12 col-md-12 text-centre mt-13">
            <button type="submit" class="btn btn-success">Simpan</button>
            {{-- <a class="btn btn-primary" href="{{ route('informasi.index') }}">Back</a> --}}
        </div>
     </div>
</form>
@endsection