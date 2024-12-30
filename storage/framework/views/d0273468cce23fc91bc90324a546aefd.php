
<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="card-header">Edit Stock Movement</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('stock_movements/' . $stockMovement->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($stockMovement->id); ?>" />
        
        <label for="product_id">Product</label><br>
        <select name="product_id" id="product_id" class="form-control" required>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($product->id); ?>" <?php echo e($stockMovement->product_id == $product->id ? 'selected' : ''); ?>>
                    <?php echo e($product->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>

        <label for="type">Type</label><br>
        <select name="type" id="type" class="form-control" required>
            <option value="addition" <?php echo e($stockMovement->type == 'addition' ? 'selected' : ''); ?>>Addition</option>
            <option value="subtraction" <?php echo e($stockMovement->type == 'subtraction' ? 'selected' : ''); ?>>Subtraction</option>
        </select><br>

        <label for="quantity">Quantity</label><br>
        <input type="number" name="quantity" id="quantity" value="<?php echo e($stockMovement->quantity); ?>" class="form-control" required><br>

        <label for="reason">Reason</label><br>
        <textarea name="reason" id="reason" class="form-control"><?php echo e($stockMovement->reason); ?></textarea><br>

        <input type="submit" value="Update" class="btn btn-success"><br>
      </form>
   
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/stock_movements/edit.blade.php ENDPATH**/ ?>