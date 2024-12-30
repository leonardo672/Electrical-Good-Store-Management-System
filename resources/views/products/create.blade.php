@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Create New Product</div>
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

    <form action="{{ url('products') }}" method="post">
        {!! csrf_field() !!}

        <!-- Product Name -->
        <label for="name">Product Name</label><br>
        <input type="text" name="name" id="name" class="form-control" required><br>

        <!-- Product Description -->
        <label for="description">Description</label><br>
        <textarea name="description" id="description" class="form-control"></textarea><br>

        <!-- Product Category -->
        <label for="category_id">Category</label><br>
        <select name="category_id" id="category_id" class="form-control" required>
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select><br>

        <!-- Product Brand -->
        <label for="brand_id">Brand</label><br>
        <select name="brand_id" id="brand_id" class="form-control">
            <option value="">Select Brand</option>
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select><br>

        <!-- Product Price -->
        <label for="price">Price</label><br>
        <input type="number" name="price" id="price" class="form-control" step="0.01" required><br>

        <!-- Product Stock -->
        <label for="stock">Stock</label><br>
        <input type="number" name="stock" id="stock" class="form-control" required><br>

        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop
