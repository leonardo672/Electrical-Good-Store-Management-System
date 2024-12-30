@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Create New Stock Movement</div>
  <div class="card-body">

    <!-- Display validation errors -->
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif

    <form action="{{ url('stock_movements') }}" method="post">
        {!! csrf_field() !!}

        <!-- Product Selection -->
        <label for="product_id">Product</label><br>
        <select name="product_id" id="product_id" class="form-control" required>
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select><br>

        <!-- Type Selection -->
        <label for="type">Type</label><br>
        <select name="type" id="type" class="form-control" required>
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
        </select><br>

        <!-- Quantity Input -->
        <label for="quantity">Quantity</label><br>
        <input type="number" name="quantity" id="quantity" class="form-control" required><br>

        <!-- Reason Textarea -->
        <label for="reason">Reason</label><br>
        <textarea name="reason" id="reason" class="form-control"></textarea><br>

        <!-- Submit Button -->
        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop
