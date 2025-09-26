@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="mb-4">Form Pendaftaran UMKM</h2>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  @if(session('error'))
  <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


  <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
      <label for="nama_umkm" class="form-label">Nama UMKM</label>
      <input type="text" class="form-control" id="nama_umkm" name="nama_umkm" required>
    </div>

    <div class="mb-3">
      <label for="nib" class="form-label">NIB (Nomor Induk Berusaha)</label>
      <input type="text" class="form-control" id="nib" name="nib" required>
    </div>

    <div class="mb-3">
      <label for="pemilik" class="form-label">Nama Pemilik</label>
      <input type="text" class="form-control" id="pemilik" name="pemilik" required>
    </div>

    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat UMKM</label>
      <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
      <label for="telepon" class="form-label">No. Telepon</label>
      <input type="text" class="form-control" id="telepon" name="telepon" required>
    </div>

    <div class="mb-3">
      <label for="foto" class="form-label">Foto UMKM (Opsional)</label>
      <input class="form-control" type="file" id="foto" name="foto">
    </div>

    <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
  </form>
</div>
@endsection
