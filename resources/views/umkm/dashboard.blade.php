@extends('layouts.umkm')

@section('content')
  <div class="text-center">
    <h2>Halo, {{ $umkm->nama_usaha ?? 'UMKM' }}!</h2>
    <p>Selamat datang di dashboard UMKM Anda.</p>
    <p>NIB: <strong>{{ $umkm->nib }}</strong></p>
  </div>
@endsection
