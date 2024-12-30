
<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="card-header">Edit User</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('users/' . $users->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($users->id); ?>" />
        
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($users->name); ?>" class="form-control"></br>
        
        <label>Email</label></br>
        <input type="email" name="email" id="email" value="<?php echo e($users->email); ?>" class="form-control"></br>
        
        <label>Role</label></br>
        <select name="role" id="role" class="form-control">
            <option value="admin" <?php echo e($users->role == 'admin' ? 'selected' : ''); ?>>Admin</option>
            <option value="staff" <?php echo e($users->role == 'staff' ? 'selected' : ''); ?>>Staff</option>
        </select></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
   
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/users/edit.blade.php ENDPATH**/ ?>