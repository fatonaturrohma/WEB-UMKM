

<?php $__env->startSection('content'); ?>
<div class="container">
  <h2 class="mb-4">Login UMKM</h2>

  <?php if(session('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
  <?php endif; ?>

  <?php if(session('error')): ?>
    <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
  <?php endif; ?>

  <form action="<?php echo e(route('login.proses')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="mb-3">
      <label for="nib" class="form-label">NIB</label>
      <input type="text" class="form-control" id="nib" name="nib" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\umkmdesa\resources\views/login.blade.php ENDPATH**/ ?>