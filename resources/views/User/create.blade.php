@extends('layout')
@section('title', 'Halaman Tambah Admin')

@section('content')
<div class="container-fluid">
                        <h1 class="mt-4">Tambah Admin</h1>
                                              
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-edit mr-1"></i> Isi Data Data Admin</div>
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

<form action="{{route('user.store')}}" method ="POST" enctype="multipart/form-data">
    @csrf 
    <div class="form-row">
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Nama Admin:</strong>
            <input type="text" name="name" class="form-control" placeholder="Tuliskan Nama Admin...">
         </div> 
        </div>
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Email:</strong>
            <input type="text" name="email" class="form-control" placeholder="Tuliskan Email Admin...">
         </div> 
        </div>

        <div class= "col-md-10">
         <div class= "form-group">
         <div class="card-body">
            <p class="card-text">klik tombol di bawah untuk masuk ke website</p>
            <a href="https://bcrypt-generator.com/" target="_blank" class="btn btn-success">https://bcrypt-generator.com/</a><br>
         </div>
         </div> 
        </div>

        <div class= "col-md-10">
         <div class= "form-group">
             <img src="{{asset('assets3/img/bycript2.png')}}" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">Masukan password anda di kolom diatas lalu klik tombol <strong>Encrypt</strong></p>
         </div>
         </div> 
        </div>

        <div class= "col-md-10">
         <div class= "form-group">
             <img src="{{asset('assets3/img/encript.png')}}" class="card-img-top" alt="..." >
         <div class="card-body">
           <p class="card-text">lalu <strong>Copy</strong> kode yang ada di kolom berwarna hijau di inputan di bawah ini</p>
         </div>
         </div> 
        </div>

        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Password:</strong>
            <input type="text" name="password" class="form-control" placeholder="Tuliskan Password Admin...">
         </div> 
        </div>
             
        <div class= "col-xs-12 col-sm-12 col-md-12 text-centre mt-13">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
     </div>
</form>
@endsection