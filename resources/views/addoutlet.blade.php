@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Outlet</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
  
  <form action="{{ route('outlet.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
    <div class="row">
      <div class="col-md-12">
        <div class="form-group row">
          <label for="nama" class="col-form-label col-sm-3">Nama Outlet</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="nama" name="nama_outlet" 
                  value="{{ old('nama_outlet', $post->nama_outlet ?? null) }}" required>                                                  
          </div>
        </div>
  
        <div class="form-group row">
          <label for="alamat" class="col-form-label col-sm-3">Alamat</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="alamat" name="alamat"
                  value="{{ old('alamat', $post->alamat ?? null) }}" required>                                                  
          </div>
      </div>

      <div class="form-group row">
        <label for="kota" class="col-form-label col-sm-3">Kota</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" id="kota" name="kota"
                value="{{ old('kota', $post->kota ?? null) }}" required>                                                  
        </div>
    </div>

        <div class="form-group row">
          <label for="telp" class="col-form-label col-sm-3">No Telepon</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="telp" name="tlp" 
             value="{{ old('telp', $post->tlp ?? null) }}" required>                                                  
          </div>
        </div>
      </div>
  </div>
   
  
    <div class="modal-footer">
    <a href="{{ route('outlet.index') }}" class="btn btn-secondary">Tutup</a>
    <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>
  </form>
      </div>
    </div>
</div>
@endsection