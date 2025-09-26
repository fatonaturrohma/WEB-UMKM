@extends('layouts.app')

@section('content')
  <!-- Bagian Selamat Datang -->
  <div class="mt-5 text-center">
    <h1>Selamat Datang di Website UMKM Desa</h1>
    <p>Temukan UMKM unggulan dan produk-produk lokal terbaik!</p>
  </div>

  <!-- SEJARAH, VISI, MISI SEJAJAR -->
  <section class="mt-5">
    <div class="container">
      <div class="text-center row">
        <!-- SEJARAH UMKM DESA -->
        <div class="col-md-4">
          <div class="section-title">
            <h2>Sejarah UMKM Desa</h2>
          </div>
          <p>UMKM Desa dimulai sebagai inisiatif untuk membantu pelaku usaha mikro, kecil, dan menengah di desa agar dapat mengembangkan produk mereka dan memperkenalkan hasil karya mereka ke pasar yang lebih luas. Sejak tahun 2020, program ini telah berhasil membantu ribuan UMKM untuk mendapatkan akses ke platform digital dan meningkatkan taraf hidup mereka.</p>
        </div>

        <!-- VISI UMKM DESA -->
        <div class="col-md-4">
          <div class="section-title">
            <h2>Visi</h2>
          </div>
          <p>Menjadi platform terdepan yang mendukung perkembangan UMKM di desa, memberdayakan pelaku usaha untuk berinovasi, dan menciptakan peluang pasar yang lebih luas bagi produk-produk lokal Indonesia.</p>
        </div>

        <!-- MISI UMKM DESA -->
        <div class="col-md-4">
          <div class="section-title">
            <h2>Misi</h2>
          </div>
          <ul>
            <li>Meningkatkan kapasitas dan kualitas produk UMKM di desa melalui pelatihan dan akses ke teknologi digital.</li>
            <li>Menghubungkan pelaku UMKM dengan pasar yang lebih luas baik nasional maupun internasional.</li>
            <li>Memberikan dukungan dan fasilitas untuk pengembangan usaha berbasis komunitas dan keberlanjutan.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

@endsection
