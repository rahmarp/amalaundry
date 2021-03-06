@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Member</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
          <form action="{{ route('member.update',$member->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="nik" class="col-form-label col-sm-3">NIK</label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control" id="nik" name="nik" 
                          value="{{ $member->nik }}" required>                                                  
                  </div>
                </div>
          
                <div class="form-group row">
                  <label for="nama_member" class="col-form-label col-sm-3">Nama Member</label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control" id="nama" name="nama_member"
                          value="{{ $member->nama_member }}" required>                                                  
                  </div>
              </div>
        
              <div class="form-group row">
                <label for="alamat" class="col-form-label col-sm-3">Alamat Member</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="alamat" name="alamat_member"
                        value="{{ $member->alamat_member }}" required>                                                  
                </div>
            </div>
        
                <div class="form-group row">
                  <label for="telp" class="col-form-label col-sm-3">No Telepon</label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control" id="telp" name="telp" 
                     value="{{ $member->telp }}" required>                                                  
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