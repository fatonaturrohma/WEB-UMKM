

<?php $__env->startSection('title', 'Tentang Kami'); ?>

<?php $__env->startSection('content'); ?>
<!-- Sejarah -->
<section class="px-4 py-12 bg-white">
  <div class="container max-w-3xl mx-auto">
    <h2 class="mb-6 text-3xl font-bold text-center">Sejarah UMKM Desa</h2>
    <p class="text-lg text-justify">
      UMKM Desa berawal dari inisiatif warga lokal yang ingin meningkatkan ekonomi melalui pemanfaatan potensi desa.
      Sejak tahun 2018, UMKM mulai tumbuh dan berkembang, menciptakan lapangan kerja dan memperkenalkan produk desa ke pasar yang lebih luas.
      Website ini dibuat sebagai sarana digitalisasi untuk memperkuat pemasaran dan komunikasi UMKM ke masyarakat luas.
    </p>
  </div>
</section>

<!-- Visi dan Misi -->
<section class="px-4 py-12 bg-gray-100">
  <div class="container max-w-4xl mx-auto">
    <h2 class="mb-6 text-3xl font-bold text-center">Visi & Misi</h2>
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
      <div class="p-6 bg-white rounded shadow">
        <h3 class="mb-2 text-xl font-semibold">Visi</h3>
        <p>Mewujudkan desa mandiri dan sejahtera melalui pemberdayaan UMKM berbasis teknologi.</p>
      </div>
      <div class="p-6 bg-white rounded shadow">
        <h3 class="mb-2 text-xl font-semibold">Misi</h3>
        <ul class="space-y-2 list-disc list-inside">
          <li>Mendukung pertumbuhan UMKM melalui pelatihan dan promosi digital.</li>
          <li>Menjalin kerja sama dengan mitra strategis.</li>
          <li>Menyediakan platform pemasaran yang mudah diakses oleh pelaku UMKM.</li>
          <li>Memberikan edukasi dan dukungan kepada masyarakat desa untuk berwirausaha.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Tim Pengelola -->
<section class="px-4 py-12 bg-white">
  <div class="container max-w-4xl mx-auto">
    <h2 class="mb-6 text-3xl font-bold text-center">Tim Pengelola</h2>
    <div class="grid grid-cols-1 gap-6 text-center sm:grid-cols-2 md:grid-cols-3">
      <div class="p-4 bg-gray-100 rounded shadow">
        <img src="https://via.placeholder.com/100" alt="Ahmad Zulfikar" class="mx-auto mb-2 rounded-full">
        <h4 class="font-semibold">Ahmad Zulfikar</h4>
        <p class="text-sm">Koordinator Website</p>
      </div>
      <div class="p-4 bg-gray-100 rounded shadow">
        <img src="https://via.placeholder.com/100" alt="Siti Marlina" class="mx-auto mb-2 rounded-full">
        <h4 class="font-semibold">Siti Marlina</h4>
        <p class="text-sm">Manajer Konten</p>
      </div>
      <div class="p-4 bg-gray-100 rounded shadow">
        <img src="https://via.placeholder.com/100" alt="Dedi Santoso" class="mx-auto mb-2 rounded-full">
        <h4 class="font-semibold">Dedi Santoso</h4>
        <p class="text-sm">Teknisi IT</p>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\umkmdesa\resources\views/tentang.blade.php ENDPATH**/ ?>