@extends('layouts.umkm')

@section('content')
<h2>Profil UMKM</h2>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form method="POST" action="{{ route('profil.update') }}">
  @csrf
  <div class="mb-3">
    <label class="form-label">Nama Usaha</label>
    <input type="text" name="nama_usaha" value="{{ $umkm->nama_usaha }}" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="text" name="alamat" value="{{ $umkm->alamat }}" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Pemilik</label>
    <input type="text" name="pemilik" value="{{ $umkm->pemilik }}" class="form-control">
  </div>
  <button class="btn btn-primary">Simpan</button>
</form>
@endsection
