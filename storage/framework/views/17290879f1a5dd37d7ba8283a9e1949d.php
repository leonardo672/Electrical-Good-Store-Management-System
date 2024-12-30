
<?php $__env->startSection('content'); ?>

<!-- Main Card to Display Brand Details -->
<div class="card">
  <div class="card-header">Brand Details</div>
  <div class="card-body">
    <div class="card-body">
        <!-- Display Brand Name -->
        <h5 class="card-title">Brand Name: <?php echo e($brands->name); ?></h5>
        
        <!-- Display Brand Description -->
        <p class="card-text">Description: <?php echo e($brands->description); ?></p>
    </div>

    <!-- Print Button -->
    <button class="btn btn-primary mt-3" onclick="printBrandDetails()" title="Print Brand Details">
        <i class="fa fa-print" aria-hidden="true"></i> Print
    </button>
  </div>
</div>

<!-- JavaScript Function for Print -->
<script>
function printBrandDetails() {
    const content = document.querySelector('.card').outerHTML; // Select the card content
    const originalContent = document.body.innerHTML;

    document.body.innerHTML = content; // Replace the body with the card content
    window.print(); // Trigger the print dialog
    document.body.innerHTML = originalContent; // Restore the original content
    location.reload(); // Reload the page to restore event listeners
}
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/brands/show.blade.php ENDPATH**/ ?>