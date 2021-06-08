@extends('layouts.app')

@section('title')
    Homepage
@endsection

@section ('content')
<main>
     <div class="container-fluid">
        <h1 class="mt-4">Produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Produk</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a href="{{ route('product.create') }}" class="btn btn-primary stretched-link">Tambah Produk</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Kategori</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                                <th>Image</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->kategori }}</td>
                                <td>{{ $product->jumlah }}</td>
                                <td>{{ $product->harga }}</td>
                                <td>{{ $product->keterangan }}</td>
                                <td><img src="{{ Storage::url($product->image) }}" style="width: 100px;" alt=""></td>
                                <td><a href="{{ route('product.edit', $product->id) }}" type="button" class="btn btn-warning">Update</a>
                                    <form method="POST" action="{{ route('product.destroy', $product->id )}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                    DELETE</button>
                                    </form>
                                    </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection    