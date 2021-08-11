@extends('template.admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-5">
            <h1>Data Order</h1>            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="btn btn-success" href="{{route('tambahorder')}}">Tambah Order</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <div class="col-12">

        <div class="card">
          <div class="card-body table-responsive">
            <table id="datapelanggan" class="table table-bordered table-striped">
              <thead>
              <tr>
                  <th>Action</th> 
                <th>Tgl Masuk</th>
								<th>No Order</th>
								<th>Deadline</th>
                <th>Status</th>
								<th>Kategori</th>
								<th>Nama Customer</th>
								<th>Telp Customer</th>
								<th>Marketing</th>
								<th>Nama Pesanan</th>
								<th>Keterangan</th>
								<th>OP Produksi</th>
								<th>Tgl Pengambilan</th>
                </tr>
              </thead>
              <tbody>
                   
              </tbody>  
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      </div>
  </div>
    </section>
</div>
@endsection