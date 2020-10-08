@extends('layout')
@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Outlet</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <div class="text-right">
            <a href="{{ route('outlet.create') }}" class="btn btn-primary mr-2 mb-2" >Tambah</a>                                                
          </div>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Outlet</td>
                    <td>Alamat</td>
                    <td>Kota</td>
                    <td>No Telepon</td>
                    <td>Edit</td>
                    <td>Hapus</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($outlet as $no => $o)
                    <tr>
                        <td>{{ $no+1 }}</td>
                        <td>{{ $o->nama_outlet }}</td>
                        <td>{{ $o->alamat }}</td>
                        <td>{{ $o->kota }}</td>
                        <td>{{ $o->tlp }}</td>
                        <td>
                          <a href="{{ route('outlet.edit', $o->id) }}" class="btn btn-sm btn-primary m-2">
                            <i class="fa fa-fw" aria-hidden="true"></i></a>
                        </td>
                        <form action="{{ route('outlet.destroy', $o->id) }}" method="POST">
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