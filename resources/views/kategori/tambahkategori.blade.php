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
          <h3 class="card-title">Tambah Kategori</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('insert_kategori')}}" method="POST">
            {{ csrf_field()  }}
          <div class="card-body">
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="character" name="kategori" class="form-control @error('kategori') is-invalid @enderror" value="{{ old('kategori') }}" placeholder="Kategori">
                @error('kategori')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror  
              </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a class="btn btn-light" href="/kategori">Kembali</a>
      </div>
  </div>
    </section>
</div>
@endsection