
<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="card-header">Edit Customer</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('customers/' . $customer->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($customer->id); ?>" />
        
        <label for="name">Customer Name</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($customer->name); ?>" class="form-control" required></br>
        
        <label for="email">Email</label></br>
        <input type="email" name="email" id="email" value="<?php echo e($customer->email); ?>" class="form-control"></br>
        
        <label for="phone">Phone</label></br>
        <input type="text" name="phone" id="phone" value="<?php echo e($customer->phone); ?>" class="form-control"></br>
        
        <label for="address">Address</label></br>
        <textarea name="address" id="address" class="form-control"><?php echo e($customer->address); ?></textarea></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
   
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/customers/edit.blade.php ENDPATH**/ ?>