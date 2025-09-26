@extends('layouts.umkm')

@section('content')
  <h2>Edit Produk</h2>

  <form method="POST" action="{{ url('/produk-saya/'.$produk->id) }}">
    @csrf
    @method('POST')
    <div class="mb-3">
      <label class="form-label">Nama Produk</label>
      <input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Deskripsi</label>
      <textarea name="deskripsi" class="form-control" required>{{ $produk->deskripsi }}</textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Harga</label>
      <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Stok</label>
      <input type="number" name="stok" class="form-control" value="{{ $produk->stok }}" required>
    </div>
    <button class="btn btn-primary">Simpan</button>
  </form>
@endsection
