@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">User Details</div>
  <div class="card-body">
   
        <div class="card-body">
            <h5 class="card-title">Name: {{ $users->name }}</h5> <!-- Changed $users to $user -->
            <p class="card-text">Email: {{ $users->email }}</p> <!-- Changed $users to $user -->
            <p class="card-text">Role: {{ ucfirst($users->role) }}</p> <!-- Changed $users to $user -->
        </div>
       
    </hr>
  
  </div>
</div>
@endsection
