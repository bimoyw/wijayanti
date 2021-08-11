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
          <h3 class="card-title">Tambah Pelanggan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        
        <form action="{{route('tambahwo')}}" method="POST">
            {{ csrf_field()  }}
            <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="character" name="nama_pel" class="form-control @error('nama_pel') is-invalid @enderror" value="{{ old('nama_pel') }}" placeholder="Nama Pelanggan">
                    @error('nama_pel')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>                   
                 </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor HP</label>
                    <div class="col-sm-10">
                      <input type="number" name="telp" class="form-control @error('telp') is-invalid @enderror" value="{{ old('telp') }}" placeholder="Nomor Hp">
                      @error('telp')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror 
                    </div>
                  </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">RT / RW</label>
                    <div class="col-sm-10 row">
                        <div class="col-sm-2">
                            <input type="number" name="RT" class="form-control @error('RT') is-invalid @enderror" value="{{ old('RT') }}" placeholder="RT">
                            @error('RT')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                          </div>
                          <p>/</p>
                          <div class="col-sm-2">
                            <input type="number" name="RW" class="form-control @error('RW') is-invalid @enderror" value="{{ old('RW') }}" placeholder="RW">
                            @error('RW')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                          </div>
                    </div>
                  </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kelurahan</label>
                    <div class="col-sm-10">
                      <input type="character" name="kelurahan" class="form-control @error('kelurahan') is-invalid @enderror" value="{{ old('kelurahan') }}" placeholder="Kelurahan">
                      @error('kelurahan')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>                
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                      <input type="character" name="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" value="{{ old('kecamatan') }}" placeholder="Kecamatan">
                      @error('kecamatan')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror 
                    </div>
                  </div>    
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kota</label>
                    <div class="col-sm-10">
                      <input type="character" name="kota" class="form-control @error('kota') is-invalid @enderror" value="{{ old('kota') }}" placeholder="Kota">
                      @error('kota')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror 
                    </div>
                  </div>      
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      <input type="character" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}" placeholder="Keterangan">
                      @error('keterangan')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror 
                    </div>
                  </div> 
                  <button type="submit" class="btn btn-success">Simpan</button>
            <a class="btn btn-light" href="/pelanggan">Kembali</a>     
              </div>
        </form>
  </div>
    </section>
</div>
@endsection