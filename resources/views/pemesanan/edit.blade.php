@extends('layouts.master')
@section('judul','Edit Data Pemesanan')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Pemesanan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Data Pemesanan</li>
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
        <form method="POST" action="/pemesanan/{{$pemesanan->id}}">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal Pemesanan</label>
              <input type="date" VALUE="{{$pemesanan->tgl_pemesanan}}" name="tgl_pemesanan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Biaya</label>
              <input type="text" VALUE="{{$pemesanan->biaya}}" name="biaya" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Id Pembeli</label>
            <select name="id_pembeli" value="{{$pemesanan->id_pembeli}}" class="form-control" id="">
                <option value="">-Pilih Id Pembeli-</option>
                @foreach($pembeli as $data) 
                <option value="{{$data->id}}"> {{$data->nama}} - {{$data->hp}} - {{$data->alamat}} </option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Jumlah</label>
              <input type="text" VALUE="{{$pemesanan->jumlah}}" name="jumlah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Id Barang</label>
              <input type="text" VALUE="{{$pemesanan->id_barang}}" name="id_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal Selesai</label>
              <input type="date" VALUE="{{$pemesanan->tgl_selesai}}" name="tgl_selesai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
          </form>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

  </section>
@endsection