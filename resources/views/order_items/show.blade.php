@extends('layout')

@section('content')

<!-- Order Item Details Card -->
<div class="card">
  <div class="card-header">
    <h3>Order Item Details</h3>
  </div>

  <div class="card-body">
    <h5 class="card-title">Order ID: {{ $orderItem->order->id }}</h5>
    <p class="card-text">Product: {{ $orderItem->product->name }}</p>
    <p class="card-text">Quantity: {{ $orderItem->quantity }}</p>
    <p class="card-text">Price: ${{ number_format($orderItem->price, 2) }}</p>
    <p class="card-text">Total: ${{ number_format($orderItem->quantity * $orderItem->price, 2) }}</p>

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

@endsection
