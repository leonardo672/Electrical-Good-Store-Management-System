
<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="card-header">Edit Order</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('orders/' . $order->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($order->id); ?>" />

        <!-- Customer ID -->
        <label for="customer_id">Customer</label><br>
        <select name="customer_id" id="customer_id" class="form-control" required>
            <option value="">Select Customer</option>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($customer->id); ?>" <?php echo e($customer->id == $order->customer_id ? 'selected' : ''); ?>>
                    <?php echo e($customer->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>

        <!-- Order Total -->
        <label for="total">Total</label><br>
        <input type="number" name="total" id="total" value="<?php echo e($order->total); ?>" class="form-control" required><br>

        <!-- Order Status -->
        <label for="status">Status</label><br>
        <select name="status" id="status" class="form-control" required>
            <option value="pending" <?php echo e($order->status == 'pending' ? 'selected' : ''); ?>>Pending</option>
            <option value="completed" <?php echo e($order->status == 'completed' ? 'selected' : ''); ?>>Completed</option>
            <option value="canceled" <?php echo e($order->status == 'canceled' ? 'selected' : ''); ?>>Canceled</option>
        </select><br>

        <input type="submit" value="Update" class="btn btn-success"><br>
      </form>
   
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/orders/edit.blade.php ENDPATH**/ ?>