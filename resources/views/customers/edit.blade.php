@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Customer</div>
  <div class="card-body">
      
      <form action="{{ url('customers/' . $customer->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $customer->id }}" />
        
        <label for="name">Customer Name</label></br>
        <input type="text" name="name" id="name" value="{{ $customer->name }}" class="form-control" required></br>
        
        <label for="email">Email</label></br>
        <input type="email" name="email" id="email" value="{{ $customer->email }}" class="form-control"></br>
        
        <label for="phone">Phone</label></br>
        <input type="text" name="phone" id="phone" value="{{ $customer->phone }}" class="form-control"></br>
        
        <label for="address">Address</label></br>
        <textarea name="address" id="address" class="form-control">{{ $customer->address }}</textarea></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
   
  </div>
</div>

@stop
