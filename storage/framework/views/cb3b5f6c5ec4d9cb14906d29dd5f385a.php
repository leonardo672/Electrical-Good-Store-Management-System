

<?php $__env->startSection('content'); ?>

<!-- Order Item Details Card -->
<div class="card">
  <div class="card-header">
    <h3>Order Item Details</h3>
  </div>

  <div class="card-body">
    <h5 class="card-title">Order ID: <?php echo e($orderItem->order->id); ?></h5>
    <p class="card-text">Product: <?php echo e($orderItem->product->name); ?></p>
    <p class="card-text">Quantity: <?php echo e($orderItem->quantity); ?></p>
    <p class="card-text">Price: $<?php echo e(number_format($orderItem->price, 2)); ?></p>
    <p class="card-text">Total: $<?php echo e(number_format($orderItem->quantity * $orderItem->price, 2)); ?></p>

    <!-- Print Button aligned to the left and small size -->
    <button class="btn btn-primary btn-sm float-left" onclick="printOrderItemDetails()" title="Print Order Item Details">
        <i class="fa fa-print" aria-hidden="true"></i> Print
    </button>
  </div>
</div>

<!-- JavaScript Function for Print -->
<script>
function printOrderItemDetails() {
    const content = document.querySelector('.card').outerHTML; // Select the card content
    const originalContent = document.body.innerHTML;

    document.body.innerHTML = content; // Replace the body with the card content
    window.print(); // Trigger the print dialog
    document.body.innerHTML = originalContent; // Restore the original content
    location.reload(); // Reload the page to restore event listeners
}
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/order_items/show.blade.php ENDPATH**/ ?>