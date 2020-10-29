@extends('layout')
@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">User</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <div class="text-right">
            <a href="{{ route('user.create') }}" class="btn btn-primary mr-2 mb-2" >Tambah</a>                                                
          </div>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Email</td>
                    <td>Jabatan</td>
                    <td>Outlet</td>
                    <td>Edit</td>
                    <td>Hapus</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $no => $u)
                    <tr>
                        <td>{{ $no+1 }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->role }}</td>
                        <td>{{ $u->nama_outlet }}</td>
                        <td>
                          <a href="{{ route('user.edit', $u->id) }}" class="btn btn-sm btn-primary m-2">
                            <i class="fa fa-fw" aria-hidden="true"></i></a>
                        </td>
                        <form action="{{ route('user.destroy', $u->id) }}" method="POST">
                        <td>                                   
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger m-2" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-fw" aria-hidden="true"></i></button>
                             
                        </td>
                      </form>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection