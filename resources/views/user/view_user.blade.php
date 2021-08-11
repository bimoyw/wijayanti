@extends('template.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">

          </div>
        </div>
      </div><!-- /.container-fluid -->
      <div class="col-sm-12">
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Edit Data Pegawai</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/update_user/{{$view_user->id}}" method="POST">
            {{ csrf_field()  }}
          <div class="card-body">
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="character" name="name" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" value="{{$view_user->name}}">
              @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror 
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="character" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{$view_user->username}}">
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror 
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="character" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror 
              </div>
            <div class="form-group">
                <label for="phone">Telepon / HP</label>
                <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Telepon / HP" value="{{$view_user->phone}}">
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror 
              </div>
              <div class="form-group">
                <label for="level">Jabatan</label>
                <select class="custom-select rounded-0" name="level" value="{{$view_user->level}}">
                    <option value="admin">Admin</option>
                    <option value="marketing">Marketing</option>
                    <option value="kepala produksi">Kepala Produksi</option>
                    <option value="produksi">Produksi</option>
                    <option value="pengiriman">Pengiriman</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="custom-select rounded-0" option value="{{$view_user->jenis_kelamin}}" name="jenis_kelamin">
                    <option value="Laki Laki">Laki Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a class="btn btn-light" href="/user">Kembali</a>
        </form>
      </div>
  </div>
    </section>
</div>
@endsection