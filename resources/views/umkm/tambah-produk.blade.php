@extends('layouts.umkm')

@section('content')
  <h2>Tambah Produk</h2>

  <form method="POST" action="{{ url('/produk-saya') }}">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nama Produk</label>
      <input type="text" name="nama_produk" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Deskripsi</label>
      <textarea name="deskripsi" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Harga</label>
      <input type="number" name="harga" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Stok</label>
      <input type="number" name="stok" class="form-control" required>
    </div>
    <button class="btn btn-primary">Simpan</button>
  </form>
@endsection
