
<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="card-header">Create New Product</div>
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

    <form action="<?php echo e(url('products')); ?>" method="post">
        <?php echo csrf_field(); ?>


        <!-- Product Name -->
        <label for="name">Product Name</label><br>
        <input type="text" name="name" id="name" class="form-control" required><br>

        <!-- Product Description -->
        <label for="description">Description</label><br>
        <textarea name="description" id="description" class="form-control"></textarea><br>

        <!-- Product Category -->
        <label for="category_id">Category</label><br>
        <select name="category_id" id="category_id" class="form-control" required>
            <option value="">Select Category</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>

        <!-- Product Brand -->
        <label for="brand_id">Brand</label><br>
        <select name="brand_id" id="brand_id" class="form-control">
            <option value="">Select Brand</option>
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>

        <!-- Product Price -->
        <label for="price">Price</label><br>
        <input type="number" name="price" id="price" class="form-control" step="0.01" required><br>

        <!-- Product Stock -->
        <label for="stock">Stock</label><br>
        <input type="number" name="stock" id="stock" class="form-control" required><br>

        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/products/create.blade.php ENDPATH**/ ?>