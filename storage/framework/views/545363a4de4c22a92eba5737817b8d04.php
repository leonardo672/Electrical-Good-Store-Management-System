
<?php $__env->startSection('content'); ?>

<!-- Main Card to Display Customer Details -->
<div class="card">
  <div class="card-header">Customer Details</div>
  <div class="card-body">
    <div class="card-body">
        <!-- Display Customer Name -->
        <h5 class="card-title">Customer Name: <?php echo e($customer->name); ?></h5>
        
        <!-- Display Customer Email -->
        <p class="card-text">Email: <?php echo e($customer->email); ?></p>

        <!-- Display Customer Phone -->
        <p class="card-text">Phone: <?php echo e($customer->phone); ?></p>

        <!-- Display Customer Address -->
        <p class="card-text">Address: <?php echo e($customer->address); ?></p>
    </div>

    <!-- Print Button -->
    <button class="btn btn-primary mt-3" onclick="printCustomerDetails()" title="Print Customer Details">
        <i class="fa fa-print" aria-hidden="true"></i> Print
    </button>
  </div>
</div>

<!-- JavaScript Function for Print -->
<script>
function printCustomerDetails() {
    const content = document.querySelector('.card').outerHTML; // Select the card content
    const originalContent = document.body.innerHTML;

    document.body.innerHTML = content; // Replace the body with the card content
    window.print(); // Trigger the print dialog
    document.body.innerHTML = originalContent; // Restore the original content
    location.reload(); // Reload the page to restore event listeners
}
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/customers/show.blade.php ENDPATH**/ ?>