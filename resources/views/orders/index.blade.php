@extends('layout')
@section('content')

<!-- Main Card with Updated Styling -->
<div class="card shadow-lg rounded card-bg">
    <div class="card-header header-bg">
        <h2><i class="fa fa-list-alt"></i> Orders Management</h2>
    </div>

    <div class="card-body">
        <!-- Button to Add New Order -->
        <a href="{{ url('/orders/create') }}" class="btn btn-add-user mb-3" title="Add New Order">
            <i class="fa fa-plus-circle" aria-hidden="true" style="margin-right: 5px;"></i> Add New Order
        </a>
        <br/>
        
        <!-- Orders Table -->
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->customer->name }}</td> <!-- Assuming you have a relationship with Customer -->
                            <td>{{ $order->total }}</td>
                            <td>{{ ucfirst($order->status) }}</td>
                            <td>
                                <!-- View Button -->
                                <a href="{{ url('/orders/' . $order->id) }}" title="View Order">
                                    <button class="btn btn-view btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i> View
                                    </button>
                                </a>

                                <!-- Edit Button -->
                                <a href="{{ url('/orders/' . $order->id . '/edit') }}" title="Edit Order">
                                    <button class="btn btn-edit btn-sm">
                                        <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                    </button>
                                </a>

                                <!-- Delete Button -->
                                <form method="POST" action="{{ url('/orders/' . $order->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-delete btn-sm" title="Delete Order" onclick="return confirm('Are you sure you want to delete this order?')">
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

<!-- CSS Styling -->
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

    /* Add New Order Button */
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

    .btn-edit:hover {
        background-color: #e8650f;
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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

@endsection
