@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">Create New Order Item</div>
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

    <form action="{{ url('order_items') }}" method="POST">
        {!! csrf_field() !!}
        
        <div class="form-group">
            <label for="order_id">Order</label><br>
            <select name="order_id" id="order_id" class="form-control" required>
                <option value="">Select Order</option>
                @foreach ($orders as $order)
                    <option value="{{ $order->id }}">{{ $order->id }}</option>
                @endforeach
            </select><br>
        </div>
        
        <div class="form-group">
            <label for="product_id">Product</label><br>
            <select name="product_id" id="product_id" class="form-control" required>
                <option value="">Select Product</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select><br>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label><br>
            <input type="number" name="quantity" id="quantity" class="form-control" required min="1"><br>
        </div>

        <div class="form-group">
            <label for="price">Price</label><br>
            <input type="number" name="price" id="price" class="form-control" required step="0.01" min="0"><br>
        </div>

        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
   
  </div>
</div>

@stop
