
<?php $__env->startSection('content'); ?>

<!-- Main Card with Updated Styling -->
<div class="card shadow-lg rounded card-bg">
    <div class="card-header header-bg">
        <h2><i class="fa fa-users"></i> Users Management</h2>
    </div>
    <style>


.card-bg {
        background: linear-gradient(135deg, rgb(14, 27, 58), rgb(23, 46, 100)); /* Gradient background with deep blues */
        color: white;  /* White text inside card */
        border: none;  /* Remove border */
        border-radius: 8px; /* Rounded corners for a modern look */
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); /* Slightly deeper shadow for a pronounced effect */
        overflow: hidden; /* Ensure child elements stay within the card */
        transition: transform 0.3s ease-in-out, background 0.3s ease-in-out; /* Smooth transitions */
    }

    .card-bg:hover {
        transform: translateY(-8px); /* Enhanced upward movement for hover */
        background: linear-gradient(135deg, rgb(36, 48, 75), rgb(12, 40, 104)); /* Darker gradient for hover effect */
    }

    /* Card header background */
    .header-bg {
        background: linear-gradient(to right, rgb(23, 46, 100), rgb(14, 27, 58)); /* Smooth horizontal gradient for header */
        color: white; /* White text for header */
        border-bottom: 3px solid rgb(23, 46, 100); /* Blue border for the header */
        padding: 20px; /* More padding for better spacing */
        text-align: center; /* Center-align header content */
    }

    /* Header text */
    .card-header h2 {
        font-family: 'Arial', sans-serif; /* Cleaner and modern font family */
        font-size: 26px; /* Slightly smaller size for compact layout */
        font-weight: bold; /* Bold header for emphasis */
        letter-spacing: 1.5px; /* Subtle letter spacing */
        margin: 0; /* Remove default margin */
        text-transform: uppercase; /* Uppercase for modern look */
    }

    /* Header icon */
    .card-header h2 i {
        margin-right: 12px; /* Spacing between icon and text */
        font-size: 28px; /* Icon size to complement header text */
        color: #FFD700; /* Gold-colored icon for contrast */
    }

    /* Hover effect on the card header */
    .card-bg:hover .card-header {
        background: linear-gradient(to right, rgb(0, 26, 88), rgb(36, 48, 75)); /* Subtle gradient change on hover */
    }

    /* Optional: Add padding and spacing for content inside the card */
    .card-content {
        padding: 15px; /* Spacing for the card's content */
        font-family: 'Verdana', sans-serif; /* Modern font for content */
        line-height: 1.6; /* Improve readability */
    }
    /* Base style reset for cleaner rendering */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Modern font */
        background-color: #f4f7fa; /* Light grey background */
        color: #333;
        line-height: 1.6;
    }

    /* Header Styling */
    .header-bg {
        background-color: #1E3A5F; /* Dark blue for header */
        color: white;
        padding: 20px 30px;
        text-align: center;
        border-radius: 10px 10px 0 0;
    }

    .header-bg h1 {
        font-size: 2.5rem; /* Large heading */
        font-weight: bold;
    }

    /* Button Styling */
    .btn {
        font-size: 16px;
        padding: 14px 28px;
        margin: 10px 5px;
        border-radius: 25px;
        font-weight: 600;
        cursor: pointer;
        border: none;
        outline: none; /* Remove outline (default browser border on focus) */
        transition: all 0.3s ease-in-out;
        display: inline-block; /* Remove space between buttons */
    }

    /* Primary Blue button (Modern Blue) */
    .btn-primary {
        background-color: #007BFF; /* Vibrant blue */
        color: white;
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Darker blue on hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transform: translateY(-4px); /* Lift effect */
    }

    /* Secondary Green button (Fresh Green) */
    .btn-secondary {
        background-color: #28a745; /* Fresh green */
        color: white;
    }

    .btn-secondary:hover {
        background-color: #218838; /* Darker green on hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transform: translateY(-4px);
    }

    /* Tertiary Orange button (Bright Orange) */
    .btn-tertiary {
        background-color: #fd7e14; /* Bright orange */
        color: white;
    }

    .btn-tertiary:hover {
        background-color: #e36209; /* Darker orange on hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transform: translateY(-4px);
    }

    /* Danger Red button (Alert Red) */
    .btn-danger {
        background-color: #dc3545; /* Red */
        color: white;
    }

    .btn-danger:hover {
        background-color: #c82333; /* Darker red on hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transform: translateY(-4px);
    }

    /* Card Background and Content */
    .card {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin: 20px;
        padding: 20px;
        transition: all 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px); /* Lift effect */
    }

    .card .card-title {
        font-size: 1.8rem;
        font-weight: bold;
        color: #1E3A5F; /* Dark blue for title */
        margin-bottom: 10px;
    }

    .card .card-text {
        font-size: 1rem;
        color: #666;
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

    .table th,
    .table td {
        padding: 16px;
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

    /* Input Fields and Forms */
    input,
    select,
    textarea {
        font-size: 1rem;
        padding: 12px;
        margin: 10px 0;
        border-radius: 8px;
        border: 1px solid #ddd;
        width: 100%;
        background-color: #f7f9fc;
        transition: all 0.3s ease;
    }

    input:focus,
    select:focus,
    textarea:focus {
        outline: none;
        border-color: #4682B4; /* Focus state for blue accent */
        box-shadow: 0 0 6px rgba(70, 130, 180, 0.5); /* Blue glow effect */
    }

    /* Form labels */
    label {
        font-size: 1.1rem;
        font-weight: 500;
        color: #333;
    }

    /* Modern Tooltip */
    .tooltip {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        background-color: #1E3A5F; /* Dark Blue */
        color: white;
        text-align: center;
        border-radius: 5px;
        padding: 8px;
        position: absolute;
        z-index: 1;
        bottom: 125%; /* Position the tooltip above the text */
        left: 50%;
        margin-left: -60px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }

    /* Responsive Design for smaller screens */
    @media screen and (max-width: 768px) {
        .header-bg h1 {
            font-size: 2rem; /* Adjust header size */
        }

        .btn {
            font-size: 14px;
            padding: 12px 20px;
        }

        .card {
            margin: 15px;
        }

        .table th, .table td {
            font-size: 0.9rem;
            padding: 10px;
        }
    }

    /* Footer */
    footer {
        background-color: #1E3A5F; /* Dark Blue */
        color: white;
        padding: 20px;
        text-align: center;
        font-size: 1rem;
    }

    footer a {
        color: #87CEEB; /* Sky Blue */
        text-decoration: none;
    }

    footer a:hover {
        text-decoration: underline;
    }
</style>



<div class="card-body">
    <!-- Button to Add New Category -->
    <a href="<?php echo e(url('/categories1/create')); ?>" class="btn btn-saddle-brown btn-lg mb-3" title="Add New Category">
        <i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Category
    </a>
    <br/>
    
    <!-- Category Table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categories1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->description); ?></td>
                        <td>
                            <!-- View Button -->
                            <a href="<?php echo e(url('/categories1/' . $item->id)); ?>" title="View Category">
                                <button class="btn btn-info btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                </button>
                            </a>

                            <!-- Edit Button -->
                            <a href="<?php echo e(url('/categories1/' . $item->id . '/edit')); ?>" title="Edit Category">
                                <button class="btn btn-saddle-brown btn-sm">
                                    <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                </button>
                            </a>

                            <!-- Delete Button with Confirmation -->
                            <form method="POST" action="<?php echo e(url('/categories1/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <button type="submit" class="btn btn-chocolate btn-sm" title="Delete Category" onclick="return confirm('Are you sure you want to delete this category?')">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\Projects\Hasanin\Electrical_Goods_Store-app\resources\views/categories1/index.blade.php ENDPATH**/ ?>