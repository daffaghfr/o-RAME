@extends('layouts.app')

@section('title')
    Homepage
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Profile</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
        <div class="card">
            <div class="card-body">
                Update Your Profile
            </div>
        </div>
        <form action="{{ route('profile.redirect', 'profile.index') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="nama" class="form-control" placeholder="Input Nama Anda" value="{{ auth()->user()->name }}">

              <label for="date">Date</label>
                <input class="form-control" type="date" placeholder="Tangga Lahir">

                <label for="Jenis_Kelamin">Gender</label>
                <select class="form-control" name="Jenis_Kelamin">
                    <option>{{ auth()->user()->Jenis_Kelamin }}</option>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                  </select>
                  <label for="exampleInputEmail">Email</label>
                  <input name="email" type="Email" class="form-control" id="exampleInputEmail" placeholder="Input Email Anda" value="{{ auth()->user()->email }}">
                  <label for="exampleInputNomorHP">No Handphone</label>
                <input type="tel" class="form-control" name="No_handphone" id="exampleInputNomorHP" placeholder="Input Nomor HP Anda" value="{{ auth()->user()->No_handphone }}">
                <label for="exampleInputAlamat">Alamat</label>
                <input type="text" name="Alamat" class="form-control" id="exampleInputNomorHP" placeholder="Input Alamat Rumah Anda" value="{{ auth()->user()->Alamat }}">
            </div>
              <button type="submit" class="btn btn-primary py-2">Save</a>
          </form>
    </div>
</main>
@endsection