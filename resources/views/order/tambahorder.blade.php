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
          <h3 class="card-title">Tambah Order</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        
        <form action="/masukkan" method="POST">
            {{ csrf_field()  }}
            <input type="hidden" name="wo_id[]" value="1">
            <div class="card-body">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
                <div class="col-sm-4">
                  <input type="date" name="tanggal_masuk" class="form-control" value="{{ $t_masuk }}" >
                </div>
                <label class="col-sm-2 col-form-label">Deadline</label>
                <div class="col-sm-4">
                  <input type="date" name="deadline" class="form-control">
                </div>
              </div>                  
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-4">
                    <select class="form-control" style="width: 100%;" name="id_pel">
                      @foreach ($data_pelanggan as $item)
                      <option value="{{ $item->id }}" name="id_pel"> 
                          {{ $item->nama_pel }} ({{ $item->telp }}) 
                      </option>
                  @endforeach 
                    </select>
                  </div>
                  <label class="col-sm-2 col-form-label">Tanggal Pengambilan</label>
                  <div class="col-sm-4">
                    <input type="date" name="tanggal_ambil" class="form-control">
                  </div>                   
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor WO</label>
                    <div class="col-sm-4">
                      <input type="char" readonly name="no_wo" class="form-control" value="{{ $no_wo }}" >                      
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Marketing</label>
                    <div class="col-sm-4">
                      <select class="form-control select2" style="width: 100%;" name="mk">
                        @foreach ($data_marketing as $item)
                        <option value="{{ $item->id }}"> 
                            {{ $item->name }}
                        </option>
                    @endforeach 
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <select class="form-control select2" multiple style="width: 100%;" name="details[]">
                        @foreach ($details as $detail)
                        <option value="{{ $detail->id }}"> 
                            {{ $detail->nama_order }}
                        </option>
                    @endforeach 
                      </select>
                    </div>                   
                  </div>
                  <div class="form-group row">
                    
                    <div class="col-sm-4">
                      <a class="btn btn-success" href="{{route('tambahitem')}}">Tambah Item</a>
                      <a href="/excel" class="btn btn-info">Print</a>
                    </div>                   
                  </div>
                  <div class="card">
                    <div class="card-body table-responsive">
                      <table id="datawo_detil" class="table table-bordered table-striped">
                        <thead>
                        <tr align="center">
                          <th>Action</th>
                          <th>Kategori</th>
                          <th>Nama Order</th>
                          <th>Jumlah</th>
                          <th>Harga Satuan</th>
                          <th>Total Bayar</th>
                          <th>Ukuran</th>
                          <th>Warna</th>
                          <th>Jenis Bahan</th>
                          <th>Keterangan</th>
                          <th>OP Produksi</th>
                          </tr>
                        </thead>
                        <tbody>
               
                        </tbody>  
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a class="btn btn-light" href="/order">Kembali</a>     
              </div>
        </form>
  </div>
    </section>
</div>
@endsection