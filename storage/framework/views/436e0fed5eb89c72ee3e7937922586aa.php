

<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="card-header">Create New Order Item</div>
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

    <form action="<?php echo e(url('order_items')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        
        <div class="form-group">
            <label for="order_id">Order</label><br>
            <select name="order_id" id="order_id" class="form-control" required>
                <option value="">Select Order</option>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($order->id); ?>"><?php echo e($order->id); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
        </div>
        
        <div class="form-group">
            <label for="product_id">Product</label><br>
            <select name="product_id" id="product_id" class="form-control" required>
                <option value="">Select Product</option>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($product->id); ?>"><?php echo e($product->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label><br>
            <input type="number" name="quantity" id="quantity" class="form-control" required min="1"><br>
        </div>

        <div class="form-group">
            <label for="price">Price</label><br>
            <input type="number" name="price" id="price" class="form-control" required step="0.01" min="0"><br>
        </div>

        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
   
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/order_items/create.blade.php ENDPATH**/ ?>