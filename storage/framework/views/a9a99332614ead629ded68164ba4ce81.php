
<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="card-header">Create New Stock Movement</div>
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

    <form action="<?php echo e(url('stock_movements')); ?>" method="post">
        <?php echo csrf_field(); ?>


        <!-- Product Selection -->
        <label for="product_id">Product</label><br>
        <select name="product_id" id="product_id" class="form-control" required>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($product->id); ?>"><?php echo e($product->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>

        <!-- Type Selection -->
        <label for="type">Type</label><br>
        <select name="type" id="type" class="form-control" required>
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
        </select><br>

        <!-- Quantity Input -->
        <label for="quantity">Quantity</label><br>
        <input type="number" name="quantity" id="quantity" class="form-control" required><br>

        <!-- Reason Textarea -->
        <label for="reason">Reason</label><br>
        <textarea name="reason" id="reason" class="form-control"></textarea><br>

        <!-- Submit Button -->
        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/stock_movements/create.blade.php ENDPATH**/ ?>