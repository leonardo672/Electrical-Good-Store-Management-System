@extends('layout')
@section('content')

<!-- Main Card with Updated Styling -->
<div class="card shadow-lg rounded card-bg">
    <div class="card-header header-bg">
        <h2><i class="fa fa-users"></i> Users Management</h2>
    </div>

    <style>
        /* General Styles for Buttons */
        .btn {
            font-size: 16px;
            padding: 12px 25px;
            margin: 8px 5px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            border: none;
            outline: none;
            transition: all 0.3s ease-in-out;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-transform: capitalize;
        }

        /* Add New User Button */
        .btn-add-user {
            background-color: #28a745; /* Green */
            color: white;
        }

        .btn-add-user:hover {
            background-color: #218838;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* View Button */
        .btn-view {
            background-color: #007BFF; /* Blue */
            color: white;
        }

        .btn-view:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Edit Button */
        .btn-edit {
            background-color: #fd7e14; /* Orange */
            color: white;
        }

        /* Delete Button */
        .btn-delete {
            background-color: #dc3545; /* Red */
            color: white;
        }

        .btn-delete:hover {
            background-color: #c82333;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Table Styling */
        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            border-radius: 8px;
            overflow: hidden;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .table-hover tbody tr:hover {
            background-color: #4682B4; /* Medium Blue on hover */
            color: white;
        }

        .table th, .table td {
            padding: 12px;
            text-align: center;
            font-size: 1rem;
            color: #444;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #1E3A5F; /* Dark Blue header */
            color: white;
        }

        .table-responsive {
            overflow-x: auto;
        }
    </style>

    <div class="card-body">
        <!-- Button to Add New User -->
        <a href="{{ url('/users/create') }}" class="btn btn-add-user btn-lg mb-3" title="Add New User">
            <i class="fa fa-plus-circle" aria-hidden="true" style="margin-right: 5px;"></i> Add New User
        </a>
        
        <!-- User Table -->
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td class="text-uppercase">{{ $item->role }}</td>
                            <td>
                                <!-- View Button -->
                                <a href="{{ url('/users/' . $item->id) }}" title="View User">
                                    <button class="btn btn-view btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i> View
                                    </button>
                                </a>

                                <!-- Edit Button -->
                                <a href="{{ url('/users/' . $item->id . '/edit') }}" title="Edit User">
                                    <button class="btn btn-edit btn-sm">
                                        <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                    </button>
                                </a>

                                <!-- Delete Button with Confirmation -->
                                <form method="POST" action="{{ url('/users/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-delete btn-sm" title="Delete User" onclick="return confirm('Are you sure you want to delete this user?')">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
