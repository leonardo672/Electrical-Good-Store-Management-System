@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Category Details</div>
  <div class="card-body">
    <div class="card-body">
        <!-- Display Category Name -->
        <h5 class="card-title">Category Name: {{ $categoriess->name }}</h5>
        
        <!-- Display Category Description -->
        <p class="card-text">Description: {{ $categoriess->description }}</p>
    </div>

    <!-- Print Button -->
    <button class="btn btn-primary mt-3" onclick="printCategoryDetails()" title="Print Category Details">
        <i class="fa fa-print" aria-hidden="true"></i> Print
    </button>
  </div>
</div>

<!-- JavaScript Function for Print -->
<script>
function printCategoryDetails() {
    const content = document.querySelector('.card').outerHTML; // Select the card content
    const originalContent = document.body.innerHTML;

    document.body.innerHTML = content; // Replace the body with the card content
    window.print(); // Trigger the print dialog
    document.body.innerHTML = originalContent; // Restore the original content
    location.reload(); // Reload the page to restore event listeners
}
</script>

@endsection
