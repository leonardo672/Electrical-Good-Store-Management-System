@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">Edit Order Item</div>
  <div class="card-body">
      
      <form action="{{ route('order_items.update', $orderItem->id) }}" method="POST">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $orderItem->id }}" />
        
        <div class="form-group">
            <label for="order_id">Order</label><br>
            <select name="order_id" id="order_id" class="form-control" required>
                <option value="">Select Order</option>
                @foreach ($orders as $order)
                    <option value="{{ $order->id }}" {{ $order->id == $orderItem->order_id ? 'selected' : '' }}>{{ $order->id }}</option>
                @endforeach
            </select><br>
        </div>
        
        <div class="form-group">
            <label for="product_id">Product</label><br>
            <select name="product_id" id="product_id" class="form-control" required>
                <option value="">Select Product</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" {{ $product->id == $orderItem->product_id ? 'selected' : '' }}>{{ $product->name }}</option>
                @endforeach
            </select><br>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label><br>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $orderItem->quantity }}" required min="1"><br>
        </div>

        <div class="form-group">
            <label for="price">Price</label><br>
            <input type="number" name="price" id="price" class="form-control" value="{{ $orderItem->price }}" required step="0.01" min="0"><br>
        </div>

        <input type="submit" value="Update" class="btn btn-success"><br>
      </form>
   
  </div>
</div>

@stop
