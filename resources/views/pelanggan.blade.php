@extends('template.admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-5">
            <h1>Data Pelanggan</h1>            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="btn btn-success" href="{{route('tambahpelanggan')}}">Tambah Pelanggan</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <div class="col-12">

        <div class="card">
          <div class="card-body table-responsive">
            <table id="datapelanggan" class="table table-bordered table-striped">
              <thead>
              <tr align="center">
                  <th>Action</th>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Telepon / HP</th>
                  <th>RT</th>
                  <th>RW</th>
                  <th>Kelurahan</th>
                  <th>Kecamatan</th>
                  <th>Kota</th>
                  <th>Keterangan</th> 
              </tr>
              </thead>
              <tbody>
                  @php
                      $no=1
                  @endphp
                  @foreach ($data_pelanggan as $item)
                  <tr>
                    <td align="center">
                      <a class="btn btn-success" href="/viewpelanggan/{{$item->id}}">Edit</a>  </a>
                      <a class="btn btn-danger" href="/deletepelanggan/{{$item->id}}">Hapus</a>
                  </td>
                    <td align="center" scope="item">{{$no++}}</td>
                    <td>{{ $item->nama_pel}}</td>                      
                    <td align="center">{{ $item->telp}}</td>
                    <td align="center">{{ $item->RT}}</td>
                    <td align="center">{{ $item->RW}}</td>
                    <td align="center">{{ $item->kelurahan}}</td>
                    <td align="center">{{ $item->kecamatan}}</td>
                    <td align="center">{{ $item->kota}}</td>
                    <td align="center">{{ $item->keterangan}}</td>
                  </tr> 
                  @endforeach              
              </tbody>  
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>


        {{-- <div class="card">
          <div class="card-body">
            <table id="datapelanggan" class="table table-bordered table-striped no_overflow"  width="100%" >
              <thead>
                <tr align="center">
                  <th>Action</th>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Telepon / HP</th>
                  <th>RT</th>
                  <th>RW</th>
                  <th>Kelurahan</th>
                  <th>Kecamatan</th>
                  <th>Kota</th>
                  <th>Keterangan</th>                  
                </tr>
              </thead>
                  <tbody>
                    @php
                        $no=1
                    @endphp
                    @foreach ($data_pelanggan as $item)
                    <tr>
                      <td align="center">
                        <a class="btn btn-success" href="/viewpelanggan/{{$item->id}}">Edit</a>  </a>
                        <a class="btn btn-danger" href="/deletepelanggan/{{$item->id}}">Hapus</a>
                    </td>
                      <td align="center" scope="item">{{$no++}}</td>
                      <td>{{ $item->nama_pel}}</td>                      
                      <td align="center">{{ $item->telp}}</td>
                      <td align="center">{{ $item->RT}}</td>
                      <td align="center">{{ $item->RW}}</td>
                      <td align="center">{{ $item->kelurahan}}</td>
                      <td align="center">{{ $item->kecamatan}}</td>
                      <td align="center">{{ $item->kota}}</td>
                      <td align="center">{{ $item->keterangan}}</td>
                    </tr> 
                    @endforeach              
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div> --}}

        {{-- <div class="card">
          <div class="card-header row">
            <a class="btn btn-light" style="width: 80px" href="#">Print</a>
            <div class="col-sm-3">
                <form action="{{route('user')}}" method="GET">
                <div class="input-group input-group-sm">                
                  <input type="text" name="search" class="form-control float-right" placeholder="Cari berdasar nama">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search" ></i>
                    </button>
                  </div>              
                </div>
              </form>
              </div>
              <div class="col-sm-3">
                <form action="{{route('user')}}" method="GET">
                <div class="input-group input-group-sm">                
                  <input type="text" name="search" class="form-control float-right" placeholder="Cari berdasarkan HP">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search" ></i>
                    </button>
                  </div>              
                </div>
              </form>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr align="center">
                  <th>Action</th>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Telepon / HP</th>
                  <th>RT</th>
                  <th>RW</th>
                  <th>Kelurahan</th>
                  <th>Kecamatan</th>
                  <th>Kota</th>
                  <th>Keterangan</th>                  
                </tr>
              </thead>
              <tbody>
                        
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div> --}}
        <!-- /.card -->
      </div>
  </div>
    </section>
</div>
@endsection