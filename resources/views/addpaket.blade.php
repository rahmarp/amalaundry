@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Paket</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
  
  <form action="{{ route('paket.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
    <div class="row">
      <div class="col-md-12">
        <div class="form-group row">
          <label for="title" class="col-form-label col-sm-3">Nama Outlet</label>
          <div class="col-sm-9">
          <select name="id_outlet" id="" style="width: 100%">
            @foreach ($outlet as $o)
            <option value="{{ $o->id }}">{{ $o->nama_outlet }}</option>
            @endforeach            
          </select>                                                  
          </div>
        </div>
  
        <div class="form-group row">
          <label for="nama_paket" class="col-form-label col-sm-3">Nama Paket</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="nama" name="nama_paket"
                  value="{{ old('nama_paket', $post->nama_paket ?? null) }}" required>                                                  
          </div>
      </div>

      <div class="form-group row">
        <label for="jenis" class="col-form-label col-sm-3">Jenis</label>
        <div class="col-sm-9">
        <select name="jenis" id="" style="width: 100%">
          <option value="Kiloan">Kiloan</option>  
          <option value="bed_cover">Bed Cover</option>  
          <option value="selimut">Selimut</option>  
          <option value="karpet">Karpet</option>  
          <option value="dll">Lain Lain</option>  
        </select>                                                       
        </div>
    </div>

        <div class="form-group row">
          <label for="harga" class="col-form-label col-sm-3">Harga</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="harga" name="harga" 
             value="{{ old('harga', $post->harga ?? null) }}" required>                                                  
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