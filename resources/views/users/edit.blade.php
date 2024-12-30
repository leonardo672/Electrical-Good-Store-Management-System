@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit User</div>
  <div class="card-body">
      
      <form action="{{ url('users/' . $users->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $users->id }}" />
        
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{ $users->name }}" class="form-control"></br>
        
        <label>Email</label></br>
        <input type="email" name="email" id="email" value="{{ $users->email }}" class="form-control"></br>
        
        <label>Role</label></br>
        <select name="role" id="role" class="form-control">
            <option value="admin" {{ $users->role == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="staff" {{ $users->role == 'staff' ? 'selected' : '' }}>Staff</option>
        </select></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
   
  </div>
</div>

@stop
