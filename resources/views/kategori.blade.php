@extends('template.admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-5">
            <h1>Kategori</h1>            
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a class="btn btn-success" href="{{route('tambahkategori')}}">Tambah Kategori</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <div class="col-7">
          <div class="card">
            <div class="card-body table-responsive">
              <table id="kategori" class="table table-bordered table-striped">
                <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                      $no=1
                  @endphp
                  @foreach ($data_kategori as $item)
                  <tr>
                    <td align="center" scope="item">{{$no++}}</td>
                    <td>{{ $item->kategori}}</td>
                    <td align="center">                  
                        <a class="btn btn-danger" href="/delete_kategori/{{$item->id}}">Hapus</a>
                    </td>
                    </td>
                  </tr> 
                  @endforeach              
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
  </div>
    </section>
</div>
@endsection