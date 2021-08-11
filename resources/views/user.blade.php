@extends('template.admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-5">
            <h1>Daftar Pegawai</h1>            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="btn btn-success" href="{{route('create_user')}}">Tambah Pegawai</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <div class="col-12">
        <div class="card">
          <div class="card-body table-responsive">
            <table id="userdata" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Telepon / HP</th>
                      <th>Jabatan</th>
                      <th>Jenis Kelamin</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no=1
                    @endphp
                    @foreach ($data_user as $item)
                    <tr>
                      <td align="center" scope="item">{{$no++}}</td>
                      <td>{{ $item->name}}</td>
                      <td>{{ $item->username}}</td>
                      <td align="center">{{ $item->phone}}</td>
                      <td align="center">{{ $item->level}}</td>
                      <td align="center">{{ $item->jenis_kelamin}}</td>
                      <td align="center">
                          <a class="btn btn-success" href="/view_user/{{$item->id}}">Edit</a>  </a>
                          <a class="btn btn-danger" href="/delete_user/{{$item->id}}">Hapus</a>
                      </td>
                    </tr> 
                    @endforeach              
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        {{-- <div class="card">
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-head-fixed text-nowrap" id="userdata">
              <thead>
                <tr align="center">
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Telepon / HP</th>
                  <th>Jabatan</th>
                  <th>Jenis Kelamin</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @php
                      $no=1
                  @endphp
                  @foreach ($data_user as $item)
                  <tr>
                    <td align="center" scope="item">{{$no++}}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->username}}</td>
                    <td align="center">{{ $item->phone}}</td>
                    <td align="center">{{ $item->level}}</td>
                    <td align="center">{{ $item->jenis_kelamin}}</td>
                    <td align="center">
                        <a class="btn btn-success" href="/view_user/{{$item->id}}">Edit</a>  </a>
                        <a class="btn btn-danger" href="/delete_user/{{$item->id}}">Hapus</a>
                    </td>
                  </tr> 
                  @endforeach              
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
