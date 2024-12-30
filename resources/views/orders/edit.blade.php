@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Order</div>
  <div class="card-body">
      
      <form action="{{ url('orders/' . $order->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $order->id }}" />

        <!-- Customer ID -->
        <label for="customer_id">Customer</label><br>
        <select name="customer_id" id="customer_id" class="form-control" required>
            <option value="">Select Customer</option>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}" {{ $customer->id == $order->customer_id ? 'selected' : '' }}>
                    {{ $customer->name }}
                </option>
            @endforeach
        </select><br>

        <!-- Order Total -->
        <label for="total">Total</label><br>
        <input type="number" name="total" id="total" value="{{ $order->total }}" class="form-control" required><br>

        <!-- Order Status -->
        <label for="status">Status</label><br>
        <select name="status" id="status" class="form-control" required>
            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
        </select><br>

        <input type="submit" value="Update" class="btn btn-success"><br>
      </form>
   
  </div>
</div>

@endsection
