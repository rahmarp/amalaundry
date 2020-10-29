@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">User</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
  
  <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  
    <div class="row">
      <div class="col-md-12">
        <div class="form-group row">
          <label for="title" class="col-form-label col-sm-3">Nama Outlet</label>
          <div class="col-sm-9">
          <select name="id_outlet" id="" style="width: 100%">
            @foreach ($outlet as $o)
            <option value="{{ $o->id }}" {{ $user->id_outlet == $o->id ? 'selected' : '' }}>{{ $o->nama_outlet }}</option>
            @endforeach            
          </select>                                                  
          </div>
        </div>
  
        <div class="form-group row">
          <label for="nama" class="col-form-label col-sm-3">Nama User</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="nama" name="name"
                  value="{{ $user->name }}" required>                                                  
          </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-form-label col-sm-3">Email</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="email" name="email"
                    value="{{ $user->email }}" required>                                                  
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-form-label col-sm-3">Password</label>
            <div class="col-sm-9">
            <input type="hidden" class="form-control" id="password" name="password" 
               value="{{ $user->password }}" required>                                                  
            </div>
          </div>
  

      <div class="form-group row">
        <label for="role" class="col-form-label col-sm-3">Role</label>
        <div class="col-sm-9">
        <select name="role" id="role" style="width: 100%">
          @if((Auth::user()->id_outlet) == "superadmin")
          <option value="superadmin" {{ $user->role == "superadmin" ? 'selected' : '' }}>Superadmin</option>  
          @endif
          <option value="admin" {{ $user->role == "admin" ? 'selected' : '' }}>Admin</option>  
          <option value="owner" {{ $user->role == "owner" ? 'selected' : '' }}>Owner</option>  
          <option value="kasir" {{ $user->role == "kasir" ? 'selected' : '' }}>Kasir</option>  
        </select>                                                       
        </div>
    </div>
      </div>
  </div>
   
  
    <div class="modal-footer">
    <a href="{{ route('user.index') }}" class="btn btn-secondary">Tutup</a>
    <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>
  </form>
      </div>
    </div>
  </div>
@endsection