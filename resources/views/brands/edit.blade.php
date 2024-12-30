@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Brand</div>
  <div class="card-body">
      
      <form action="{{ url('brands/' . $brands->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $brands->id }}" />
        
        <label for="name">Brand Name</label></br>
        <input type="text" name="name" id="name" value="{{ $brands->name }}" class="form-control" required></br>
        
        <label for="description">Description</label></br>
        <textarea name="description" id="description" class="form-control">{{ $brands->description }}</textarea></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
   
  </div>
</div>

@stop
