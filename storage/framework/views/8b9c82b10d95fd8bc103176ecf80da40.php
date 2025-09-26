

<?php $__env->startSection('title', 'Daftar UMKM'); ?>

<?php $__env->startSection('content'); ?>
<!-- Filter Kategori -->
<section class="px-4 py-8 bg-white">
  <div class="container max-w-4xl mx-auto">
    <h2 class="mb-4 text-2xl font-bold">Filter Berdasarkan Kategori</h2>
    <div class="flex flex-wrap gap-2">
      <button class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Semua</button>
      <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Makanan</button>
      <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Kerajinan</button>
      <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Pakaian</button>
      <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Lainnya</button>
    </div>
  </div>
</section>

<!-- Daftar UMKM -->
<section class="px-4 py-8">
  <div class="container grid grid-cols-1 gap-6 mx-auto sm:grid-cols-2 md:grid-cols-3">
    <!-- UMKM Card 1 -->
    <div class="p-4 bg-white rounded shadow">
      <img src="https://source.unsplash.com/featured/?localbusiness" class="object-cover w-full h-40 rounded">
      <h3 class="mt-4 text-lg font-semibold">UMKM Sari Rasa</h3>
      <p class="text-sm text-gray-600">Kategori: Makanan</p>
      <a href="#" class="inline-block mt-2 text-sm text-blue-600">Lihat Profil</a>
    </div>

    <!-- UMKM Card 2 -->
    <div class="p-4 bg-white rounded shadow">
      <img src="https://source.unsplash.com/featured/?craft" class="object-cover w-full h-40 rounded">
      <h3 class="mt-4 text-lg font-semibold">UMKM Kreatif Kita</h3>
      <p class="text-sm text-gray-600">Kategori: Kerajinan</p>
      <a href="#" class="inline-block mt-2 text-sm text-blue-600">Lihat Profil</a>
    </div>

    <!-- UMKM Card 3 -->
    <div class="p-4 bg-white rounded shadow">
      <img src="https://source.unsplash.com/featured/?fashion" class="object-cover w-full h-40 rounded">
      <h3 class="mt-4 text-lg font-semibold">UMKM Mode Desa</h3>
      <p class="text-sm text-gray-600">Kategori: Pakaian</p>
      <a href="#" class="inline-block mt-2 text-sm text-blue-600">Lihat Profil</a>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\umkmdesa\resources\views/daftar.blade.php ENDPATH**/ ?>