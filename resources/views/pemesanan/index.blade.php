@extends('layouts.master')
@section('judul','Data Pemesanan')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Pemesanan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pemesanan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <a href="/pemesanan/form" class="btn btn-primary">Tambah Data</a>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal Pemesanan</th>
                <th scope="col">Biaya</th>
                <th scope="col">Id Pembeli</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Id Barang</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pemesanan as $item)
                <tr>
                    <th scope="row">{{$nomor++}}</th>
                    <td>{{$item->tgl_pemesanan}}</td>
                    <td>{{$item->biaya}}</td>
                    <td>{{$item->id_pembeli}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>{{$item->id_barang}}</td>
                    <td>{{$item->tgl_selesai}}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">edit</a>
                        <a href="#" class="btn btn-sm btn-danger">hapus</a>
                    </td>
                  </tr>
                @endforeach
              
              
            </tbody>
          </table>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

  </section>
@endsection