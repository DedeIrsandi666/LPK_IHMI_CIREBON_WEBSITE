
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



<div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Data Admin</h4>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">No</th>
                                                <th class="border-top-0">Nama</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Password</th> 
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->password }}</td>
                                                <td>
                                                    <a href="/user-edit/{{$user->id_user}}" class="btn btn-sm btn-success mx-auto mx-md-0 text-white">Edit</a>
                                            <br><br>
                                                    <form action="{{ route('user.destroy',$user->id_user) }}" method="POST">
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
                                        {{ $users->links() }}
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