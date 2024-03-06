<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .add-product-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 400px;
        }

        .add-product-header {
            background-color: #007bff;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            padding: 20px;
            text-align: center;
        }

        .add-product-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: calc(100% - 22px);
        }

        .form-group input:focus {
            outline: none;
            border-color: #007bff;
        }

        .btn-add-product {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            padding: 10px 20px;
            transition: background-color 0.3s;
            width: 100%;
        }

        .btn-add-product:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="add-product-container">
        <div class="add-product-header">Add Product</div>
        <div class="add-product-body">
            <form action="{{ route('add') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="product-name">Product Name</label>
                    <input type="text" id="product-name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" name="category">
                </div>
                <button type="submit" class="btn-add-product" href="">Add Product</button>
            </form>
        </div>
    </div>
</body>
</html>
