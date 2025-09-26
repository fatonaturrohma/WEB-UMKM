@extends('layouts.umkm')

@section('content')
  <h2>Produk Saya</h2>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <a href="{{ url('/produk-saya/tambah') }}" class="btn btn-primary">Tambah Produk</a>

  <table class="table mt-4">
    <thead>
      <tr>
        <th>Nama Produk</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($produks as $produk)
        <tr>
          <td>{{ $produk->nama_produk }}</td>
          <td>{{ $produk->deskripsi }}</td>
          <td>{{ number_format($produk->harga, 2) }}</td>
          <td>{{ $produk->stok }}</td>
          <td>
            <a href="{{ url('/produk-saya/'.$produk->id.'/edit') }}" class="btn btn-warning">Edit</a>
            <form action="{{ url('/produk-saya/'.$produk->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
