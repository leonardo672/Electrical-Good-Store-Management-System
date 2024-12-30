
<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="card-header">Create New Customer</div>
  <div class="card-body">

    <!-- Display validation errors -->
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
          <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
      </div>
    <?php endif; ?>

    <form action="<?php echo e(url('customers')); ?>" method="post">
        <?php echo csrf_field(); ?>


        <label for="name">Customer Name</label><br>
        <input type="text" name="name" id="name" class="form-control" required><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" class="form-control"><br>

        <label for="phone">Phone</label><br>
        <input type="text" name="phone" id="phone" class="form-control"><br>

        <label for="address">Address</label><br>
        <textarea name="address" id="address" class="form-control"></textarea><br>

        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/customers/create.blade.php ENDPATH**/ ?>