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
          <h3 class="card-title">Tambah Item</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        
        <form action="{{route('insert_wo')}}" method="POST">
            {{ csrf_field()  }}
            <div class="card-body">                        
                <div class="form-group row">
                  <div class="col-sm-4">
                  <label class="col-form-label">Kategori</label>
                    <select class="form-control select2" style="width: 100%;" name="kategori">
                      @foreach ($data_kategori as $item)
                      <option value="{{ $item->id_kategori }}"> 
                          {{ $item->kategori }}
                      </option>
                  @endforeach 
                    </select>
                  </div>
                  <div class="col-sm-8">
                    <label class="col-form-label">Nama Order</label>                      
                      <input type="char" name="nama_order" class="form-control">
                  </div>                
                </div>
                <div class="form-group row">
                  <div class="col-sm-4">
                  <label class="col-form-label">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" id="txt1" onkeyup="div();">                      
                  </div>
                  <div class="col-sm-4">
                  <label class="col-form-label">Harga Satuan</label>
                    <input type="number" name="h_satuan" class="form-control" id="txt2" onkeyup="div();">                      
                  </div>
                  <div class="col-sm-4">
                  <label class="col-form-label">Total</label>
                    <input type="number" readonly="readonly" name="totalbayar" id="txt3" class="form-control">                      
                  </div>
                  <div class="col-sm-4">
                    <label class="col-form-label">Ukuran</label>
                      <input type="char" name="ukuran" class="form-control">                      
                    </div>
                  <div class="col-sm-4">
                      <label class="col-form-label">Warna</label>
                        <input type="char" name="warna" class="form-control">                      
                      </div>
                  <div class="col-sm-4">
                        <label class="col-form-label">Jenis Bahan</label>
                          <input type="char" name="jenis_bahan" class="form-control">                      
                        </div>  
                        <div class="col-sm-12">
                          <label class="col-form-label">Keterangan</label>
                            <textarea name="keterangan" type="char" name="jumlah" class="form-control">
                            </textarea>                      
                          </div> 
                </div>
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label class="col-form-label">Status</label>
                    <select class="form-control" style="width: 100%;" name="status">
                      @foreach ($status as $item)
                      <option value="{{ $item->id_status }}"> 
                          {{ $item->nama }}
                      </option>
                  @endforeach 
                    </select>                  
                  </div>
                  <div class="col-sm-4">
                  <label class="col-form-label">Operator Produksi</label>
                  <select class="form-control select2" style="width: 100%;" name="op">
                    @foreach ($data_produksi as $item)
                    <option value="{{ $item->id }}"> 
                        {{ $item->name }}
                    </option>
                @endforeach 
                  </select>
                  </div>
                </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a class="btn btn-light" href="/tambahorder">Kembali</a>     
              </div>
        </form>
  </div>
</div>
<script>
  function div() {
        var txtFirstNumberValue = document.getElementById('txt1').value;
        var txtSecondNumberValue = document.getElementById('txt2').value;
        var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
        if (!isNaN(result)) {
           document.getElementById('txt3').value = result;
        }
  }
  </script>
@endsection