@extends('layouts.app')

@section('title')
    Homepage
@endsection

@section('content')
<main>
    <div class="container-fluid">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
            
        @endif
        <h1 class="mt-4">Tambah Produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tambah Produk</li>
        </ol>
        <div class="card">
            <div class="card-body">
                Tambah Produk
            </div>
        </div>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Produk</label>
              <input type="text" name="name" class="form-control" placeholder="Input Produk">

              <label for="kategori">Kategori</label>
              <select class="form-control" name="kategori">
                  <option>Makanan</option>
                  <option>Kue</option>
                  <option>Peralatan</option>
                </select>

                
              <label for="image" class="col-2 col-form-label">Photo</label>
              <input class="form-control" type="file" name="image" for="image">

              <label for="example-number-input" class="col-2 col-form-label">Jumlah Produk</label>
              
              <input class="form-control" type="number" name="jumlah" value="42" id="example-number-input">
              <label for="exampleInputHarga">Harga</label>
              <input type="number" name="harga" class="form-control" id="exampleInputHargaProduk" placeholder="Input Harga Produk">
              <label for="exampleInputKeterangan">Keterangan</label>
              <input type="text" name="keterangan" class="form-control" id="exampleInputEmail" placeholder="Input Keterangan Produk">
              
            </div>
              <button type="submit" class="btn btn-primary py-2">Save</a>
          </form>
    </div>
</main>
@endsection
