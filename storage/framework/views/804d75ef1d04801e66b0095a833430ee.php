
<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="card-header">Create New Order</div>
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

    <form action="<?php echo e(url('orders')); ?>" method="post">
        <?php echo csrf_field(); ?>


        <!-- Customer Selection -->
        <label for="customer_id">Customer</label><br>
        <select name="customer_id" id="customer_id" class="form-control" required>
            <option value="">Select Customer</option>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>

        <!-- Order Total -->
        <label for="total">Total</label><br>
        <input type="number" name="total" id="total" class="form-control" required><br>

        <!-- Order Status -->
        <label for="status">Status</label><br>
        <select name="status" id="status" class="form-control" required>
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
            <option value="canceled">Canceled</option>
        </select><br>

        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/orders/create.blade.php ENDPATH**/ ?>