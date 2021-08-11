@extends('template.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <div class="col-sm-12">
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Tambah Pegawai</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('insert_user')}}" method="POST">
            {{ csrf_field()  }}
          <div class="card-body">
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="character" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" placeholder="Nama Lengkap">
              @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror              
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="character" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" id="username" placeholder="Username">
                @error('username')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror  
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="character" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" id="password" placeholder="Password">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror 
              </div>
            <div class="form-group">
                <label for="phone">Telepon / HP</label>
                <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" id="phone" placeholder="Telepon / HP">
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror 
              </div>
              <div class="form-group">
                <label for="level">Jabatan</label>
                <select class="custom-select rounded-0" name="level">
                    <option value="admin">Admin</option>
                    <option value="marketing">Marketing</option>
                    <option value="kepalaproduksi">Kepala Produksi</option>
                    <option value="produksi">Produksi</option>
                    <option value="pengiriman">Pengiriman</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="custom-select rounded-0" name="jenis_kelamin">
                    <option value="Laki Laki">Laki Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a class="btn btn-light" href="/user">Kembali</a>
      </div>
  </div>
    </section>
</div>
@endsection