@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Paket</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
  
  <form action="{{ route('paket.update', $paket->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  
    <div class="row">
      <div class="col-md-12">
        <div class="form-group row">
          <label for="title" class="col-form-label col-sm-3">Nama Outlet</label>
          <div class="col-sm-9">
          <select name="id_outlet" id="" style="width: 100%">
            @foreach ($outlet as $o)
            <option value="{{ $o->id }}" {{ $paket->id_outlet == $o->id ? 'selected' : '' }}>{{ $o->nama_outlet }}</option>
            @endforeach            
          </select>                                                  
          </div>
        </div>
  
        <div class="form-group row">
          <label for="nama_paket" class="col-form-label col-sm-3">Nama Paket</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="nama" name="nama_paket"
                  value="{{ $paket->nama_paket }}" required>                                                  
          </div>
      </div>

      <div class="form-group row">
        <label for="jenis" class="col-form-label col-sm-3">Jenis</label>
        <div class="col-sm-9">
        <select name="jenis" id="" style="width: 100%">
          <option value="Kiloan" {{ $paket->jenis == "Kiloan" ? 'selected' : '' }}>Kiloan</option>  
          <option value="Bed Cover" {{ $paket->jenis == "Bed Cover" ? 'selected' : '' }}>Bed Cover</option>  
          <option value="Selimut" {{ $paket->jenis == "Selimut"? 'selected' : '' }}>Selimut</option>  
          <option value="Karpet" {{ $paket->jenis == "Karpet" ? 'selected' : '' }}>Karpet</option>  
          <option value="dll" {{ $paket->jenis == "dll" ? 'selected' : '' }}>Lain Lain</option>  
        </select>                                                       
        </div>
    </div>

        <div class="form-group row">
          <label for="harga" class="col-form-label col-sm-3">Harga</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="harga" name="harga" 
             value="{{  $paket->harga }}" required>                                                  
          </div>
        </div>
      </div>
  </div>
   
  
    <div class="modal-footer">
    <a href="{{ route('member.index') }}" class="btn btn-secondary">Tutup</a>
    <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>
  </form>
      </div>
    </div>
  </div>
@endsection