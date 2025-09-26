

<?php $__env->startSection('content'); ?>
<div class="container">
  <h2 class="mb-4">Form Pendaftaran UMKM</h2>

  <?php if(session('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
  <?php endif; ?>

  <?php if(session('error')): ?>
  <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
<?php endif; ?>

<?php if($errors->any()): ?>
  <div class="alert alert-danger">
    <ul class="mb-0">
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
<?php endif; ?>


  <form action="<?php echo e(route('umkm.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\umkmdesa\resources\views/pendaftaran.blade.php ENDPATH**/ ?>