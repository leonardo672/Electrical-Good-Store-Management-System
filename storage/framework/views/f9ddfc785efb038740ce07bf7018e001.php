
<?php $__env->startSection('content'); ?>

<!-- Main Card to Display Stock Movement Details -->
<div class="card">
  <div class="card-header">Stock Movement Details</div>
  <div class="card-body">
   
    <div class="card-body">
        <!-- Display Product Name -->
        <h5 class="card-title">Product: <?php echo e($stockMovement->product->name); ?></h5>
        
        <!-- Display Stock Movement Type -->
        <p class="card-text">Type: <?php echo e(ucfirst($stockMovement->type)); ?></p>

        <!-- Display Quantity -->
        <p class="card-text">Quantity: <?php echo e($stockMovement->quantity); ?></p>

        <!-- Display Reason -->
        <p class="card-text">Reason: <?php echo e($stockMovement->reason); ?></p>

        <!-- Display Created At -->
        <p class="card-text">Date: <?php echo e($stockMovement->created_at->format('d M Y, h:i A')); ?></p>
    </div>

    <!-- Print Button aligned to the left and small size -->
    <button class="btn btn-primary btn-sm float-left ml-3" onclick="printStockMovementDetails()" title="Print Stock Movement Details">
        <i class="fa fa-print" aria-hidden="true"></i> Print
    </button>

  </div>
</div>

<!-- JavaScript Function for Print -->
<script>
function printStockMovementDetails() {
    const content = document.querySelector('.card').outerHTML; // Select the card content
    const originalContent = document.body.innerHTML;

    document.body.innerHTML = content; // Replace the body with the card content
    window.print(); // Trigger the print dialog
    document.body.innerHTML = originalContent; // Restore the original content
    location.reload(); // Reload the page to restore event listeners
}
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/stock_movements/show.blade.php ENDPATH**/ ?>