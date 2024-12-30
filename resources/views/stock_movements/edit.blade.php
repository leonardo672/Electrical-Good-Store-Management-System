@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Stock Movement</div>
  <div class="card-body">
      
      <form action="{{ url('stock_movements/' . $stockMovement->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $stockMovement->id }}" />
        
        <label for="product_id">Product</label><br>
        <select name="product_id" id="product_id" class="form-control" required>
            @foreach($products as $product)
                <option value="{{ $product->id }}" {{ $stockMovement->product_id == $product->id ? 'selected' : '' }}>
                    {{ $product->name }}
                </option>
            @endforeach
        </select><br>

        <label for="type">Type</label><br>
        <select name="type" id="type" class="form-control" required>
            <option value="addition" {{ $stockMovement->type == 'addition' ? 'selected' : '' }}>Addition</option>
            <option value="subtraction" {{ $stockMovement->type == 'subtraction' ? 'selected' : '' }}>Subtraction</option>
        </select><br>

        <label for="quantity">Quantity</label><br>
        <input type="number" name="quantity" id="quantity" value="{{ $stockMovement->quantity }}" class="form-control" required><br>

        <label for="reason">Reason</label><br>
        <textarea name="reason" id="reason" class="form-control">{{ $stockMovement->reason }}</textarea><br>

        <input type="submit" value="Update" class="btn btn-success"><br>
      </form>
   
  </div>
</div>

@stop
