@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Create New Order</div>
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

    <form action="{{ url('orders') }}" method="post">
        {!! csrf_field() !!}

        <!-- Customer Selection -->
        <label for="customer_id">Customer</label><br>
        <select name="customer_id" id="customer_id" class="form-control" required>
            <option value="">Select Customer</option>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select><br>

        <!-- Order Total -->
        <label for="total">Total</label><br>
        <input type="number" name="total" id="total" class="form-control" required><br>

        <!-- Order Status -->
        <label for="status">Status</label><br>
        <select name="status" id="status" class="form-control" required>
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
            <option value="canceled">Canceled</option>
        </select><br>

        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>

  </div>
</div>

@endsection
