@extends('layout')
@section('content')

<!-- Main Card to Display Brand Details -->
<div class="card">
  <div class="card-header">Brand Details</div>
  <div class="card-body">
    <div class="card-body">
        <!-- Display Brand Name -->
        <h5 class="card-title">Brand Name: {{ $brands->name }}</h5>
        
        <!-- Display Brand Description -->
        <p class="card-text">Description: {{ $brands->description }}</p>
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

@endsection
