
<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="card-header">Create New Category</div>
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

    <form action="<?php echo e(url('categories1')); ?>" method="post">
        <?php echo csrf_field(); ?>

        
        <label for="name">Category Name</label><br>
        <input type="text" name="name" id="name" class="form-control" required><br>
        
        <label for="description">Description</label><br>
        <textarea name="description" id="description" class="form-control"></textarea><br>
        
        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
   
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/categories1/create.blade.php ENDPATH**/ ?>