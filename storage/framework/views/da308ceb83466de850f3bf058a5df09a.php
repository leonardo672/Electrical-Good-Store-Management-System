
<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="card-header">User Details</div>
  <div class="card-body">
   
        <div class="card-body">
            <h5 class="card-title">Name: <?php echo e($users->name); ?></h5> <!-- Changed $users to $user -->
            <p class="card-text">Email: <?php echo e($users->email); ?></p> <!-- Changed $users to $user -->
            <p class="card-text">Role: <?php echo e(ucfirst($users->role)); ?></p> <!-- Changed $users to $user -->
        </div>
       
    </hr>
  
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/users/show.blade.php ENDPATH**/ ?>