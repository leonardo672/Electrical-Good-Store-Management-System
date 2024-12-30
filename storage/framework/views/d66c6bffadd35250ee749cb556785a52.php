
<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="card-header">Edit Brand</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('brands/' . $brands->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($brands->id); ?>" />
        
        <label for="name">Brand Name</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($brands->name); ?>" class="form-control" required></br>
        
        <label for="description">Description</label></br>
        <textarea name="description" id="description" class="form-control"><?php echo e($brands->description); ?></textarea></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
   
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/brands/edit.blade.php ENDPATH**/ ?>