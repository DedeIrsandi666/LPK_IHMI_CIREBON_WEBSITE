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



<div class="container text-center">
    @foreach ($informasis as $info)
        <div class="card text-center">
            <div class="card-body">
                <img src="{{ asset('data_img/informasi/'. $info->gambar) }}" style="width: 50%; height: 50%;">
                <br><br>    
                    <h6 class="card-subtitle">{{$info->created_at}}</h6>
                    <h4 class="card-title mt-2">{{ $info->postingan}}</h4>
                    <br><br>
                    <form action="{{ route('informasi.destroy',$info->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger " onclick="javascript: return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus Postingan</button>
                    </form>
            </div>
        </div>
    @endforeach
    <div class="my-4">
        {{ $informasis->links() }}
    </div>
</div>
@endsection