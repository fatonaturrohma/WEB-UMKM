

<?php $__env->startSection('title', 'Daftar UMKM'); ?>

<?php $__env->startSection('content'); ?>
<div class="container px-4 py-12 mx-auto">
  <div class="grid grid-cols-1 gap-8 md:grid-cols-2">

    
    <div class="p-6 bg-white rounded-lg shadow-lg">
      <h2 class="mb-6 text-xl font-bold text-center">Pendaftaran UMKM</h2>
      <?php if(session('success')): ?>
        <div class="mb-4 text-green-600"><?php echo e(session('success')); ?></div>
      <?php endif; ?>
      <form method="POST" action="<?php echo e(route('umkm.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
          <label class="block text-sm font-medium">NIB</label>
          <input type="text" name="nib" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium">Password</label>
          <input type="password" name="password" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium">Nama UMKM</label>
          <input type="text" name="nama_umkm" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium">Kategori</label>
          <select name="kategori" class="w-full px-3 py-2 border rounded" required>
            <option value="">Pilih Kategori</option>
            <option value="Makanan">Makanan</option>
            <option value="Kerajinan">Kerajinan</option>
            <option value="Pakaian">Pakaian</option>
            <option value="Lainnya">Lainnya</option>
          </select>
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium">Alamat</label>
          <textarea name="alamat" class="w-full px-3 py-2 border rounded" required></textarea>
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium">Kontak</label>
          <input type="text" name="kontak" class="w-full px-3 py-2 border rounded" required>
        </div>
        <button type="submit" class="w-full py-2 text-white bg-green-600 rounded hover:bg-green-700">Daftar Sekarang</button>
      </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\umkmdesa\resources\views/umkm/index.blade.php ENDPATH**/ ?>