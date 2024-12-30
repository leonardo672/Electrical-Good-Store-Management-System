@extends('layout') <!-- Assuming you are using a layout file -->

@section('content')
    <div class="container">
        <h1>Product Details</h1>

        <div class="card">
            <div class="card-header">
                <strong>Product #{{ $product->id }}</strong>
            </div>

            <div class="card-body">
                <p><strong>Name:</strong> {{ $product->name }}</p>
                <p><strong>Description:</strong> {{ $product->description ?? 'No description available' }}</p>
                <p><strong>Category:</strong> {{ $product->category->name ?? 'No category available' }}</p>
                <p><strong>Brand:</strong> {{ $product->brand->name ?? 'No brand available' }}</p>
                <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                <p><strong>Stock:</strong> {{ $product->stock }}</p>
            </div>

            <div class="card-footer">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back to List</a>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                </form>
                <!-- Print Button aligned to the left and small size -->
                <button class="btn btn-primary btn-sm float-left ml-3" onclick="printProductDetails()" title="Print Product Details">
                    <i class="fa fa-print" aria-hidden="true"></i> Print
                </button>
            </div>
        </div>
    </div>

    <!-- JavaScript Function for Print -->
    <script>
    function printProductDetails() {
        const content = document.querySelector('.card').outerHTML; // Select the card content
        const originalContent = document.body.innerHTML;

        document.body.innerHTML = content; // Replace the body with the card content
        window.print(); // Trigger the print dialog
        document.body.innerHTML = originalContent; // Restore the original content
        location.reload(); // Reload the page to restore event listeners
    }
    </script>
@endsection
