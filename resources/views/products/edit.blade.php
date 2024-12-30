@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Product</div>
  <div class="card-body">
      
      <form action="{{ url('products/' . $product->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $product->id }}" />
        
        <!-- Product Name -->
        <label for="name">Product Name</label></br>
        <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control" required></br>
        
        <!-- Product Description -->
        <label for="description">Description</label></br>
        <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea></br>
        
        <!-- Product Category -->
        <label for="category_id">Category</label></br>
        <select name="category_id" id="category_id" class="form-control" required>
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select></br>
        
        <!-- Product Brand -->
        <label for="brand_id">Brand</label></br>
        <select name="brand_id" id="brand_id" class="form-control">
            <option value="">Select Brand</option>
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select></br>
        
        <!-- Product Price -->
        <label for="price">Price</label></br>
        <input type="number" name="price" id="price" value="{{ $product->price }}" class="form-control" step="0.01" required></br>
        
        <!-- Product Stock -->
        <label for="stock">Stock</label></br>
        <input type="number" name="stock" id="stock" value="{{ $product->stock }}" class="form-control" required></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
   
  </div>
</div>

@stop
