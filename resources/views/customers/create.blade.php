@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Create New Customer</div>
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

    <form action="{{ url('customers') }}" method="post">
        {!! csrf_field() !!}

        <label for="name">Customer Name</label><br>
        <input type="text" name="name" id="name" class="form-control" required><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" class="form-control"><br>

        <label for="phone">Phone</label><br>
        <input type="text" name="phone" id="phone" class="form-control"><br>

        <label for="address">Address</label><br>
        <textarea name="address" id="address" class="form-control"></textarea><br>

        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop
