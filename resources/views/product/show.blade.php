<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file -->
</head>
<body>
    <div class="container">
        <h1>Product Details</h1>

        <!-- Display product details -->
        <div class="product-details">
            <p><strong>Product ID:</strong> {{ $product->id }}</p>
            <p><strong>Product Code:</strong> {{ $product->product_code }}</p>
            <p><strong>Product Name:</strong> {{ $product->product_name }}</p>
            <p><strong>Length:</strong> {{ $product->length }}</p>
            <p><strong>Height:</strong> {{ $product->height }}</p>
            <p><strong>Depth:</strong> {{ $product->depth }}</p>
            <p><strong>Customer Name:</strong> {{ $product->customer_name }}</p>
            <p><strong>Project Name:</strong> {{ $product->project_name }}</p>
            <p><strong>Address:</strong> {{ $product->address }}</p>
            <p><strong>Production Date:</strong> {{ $product->production_date }}</p>
            <p><strong>Delivery Date:</strong> {{ $product->delivery_date }}</p>
            <p><strong>Description:</strong> {{ $product->description }}</p>
        </div>

        <!-- Back to product list button -->
        <a href="#" class="btn btn-primary">Back to Product List</a>
    </div>
</body>
</html>
