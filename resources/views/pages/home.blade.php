@extends('layouts.app')

@section('title')
    Homepage
@endsection

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Pesanan Masuk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
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
                                                <th>Nama</th>
                                                <th>Produk</th>
                                                <th>No Handphone</th>
                                                <th>Jumlah</th>
                                                <th>Harga</th>
                                                <th>Keterangan</th>
                                                <th>Alamat Rumah</th>
                                                <th>Pembayaran</th>
                                                <th>Bukti</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection