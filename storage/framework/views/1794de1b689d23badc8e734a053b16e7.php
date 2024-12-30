

<?php $__env->startSection('content'); ?>

<!-- Main Card to Display Order Details -->
<div class="card">
  <div class="card-header">Order Details</div>
  <div class="card-body">
   
    <div class="card-body">
        <!-- Display Order ID -->
        <h5 class="card-title">Order ID: <?php echo e($order->id); ?></h5>
        
        <!-- Display Customer Name -->
        <p class="card-text">Customer ID: <?php echo e($order->customer_id); ?></p>

        <!-- Display Order Date -->
        <p class="card-text">Order Date: <?php echo e($order->order_date); ?></p>

        <!-- Display Total Amount -->
        <p class="card-text">Total: $<?php echo e(number_format($order->total, 2)); ?></p>

        <!-- Display Order Status -->
        <p class="card-text">Status: <?php echo e(ucfirst($order->status)); ?></p>
    </div>

    <!-- Print Button aligned to the left and small size -->
    <button class="btn btn-primary btn-sm float-left" onclick="printOrderDetails()" title="Print Order Details">
        <i class="fa fa-print" aria-hidden="true"></i> Print
    </button>
  
  </div>
</div>

<!-- JavaScript Function for Print -->
<script>
function printOrderDetails() {
    const content = document.querySelector('.card').outerHTML; // Select the card content
    const originalContent = document.body.innerHTML;

    document.body.innerHTML = content; // Replace the body with the card content
    window.print(); // Trigger the print dialog
    document.body.innerHTML = originalContent; // Restore the original content
    location.reload(); // Reload the page to restore event listeners
}
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/orders/show.blade.php ENDPATH**/ ?>