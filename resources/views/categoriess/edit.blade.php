@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Category</div>
  <div class="card-body">
      
      <form action="{{ url('categoriess/' . $categoriess->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $categoriess->id }}" />
        
        <label for="name">Category Name</label></br>
        <input type="text" name="name" id="name" value="{{ $categoriess->name }}" class="form-control" required></br>
        
        <label for="description">Description</label></br>
        <textarea name="description" id="description" class="form-control">{{ $categoriess->description }}</textarea></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
   
  </div>
</div>

@stop
