<!-- resources/views/products/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .category-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .category-item {
            background-color: #fff;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .category-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .category-item a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="back-btn">
            <button onclick="goBack()">Back</button>
        </div>
        <h1>Categories</h1>
        <ul class="category-list">
            <li class="category-item"><a href="{{ route('products.food_beverage') }}">Food & Beverage</a></li>
            <li class="category-item"><a href="{{ route('products.beauty_health') }}">Beauty & Health</a></li>
            <li class="category-item"><a href="{{ route('products.home_care') }}">Home Care</a></li>
            <li class="category-item"><a href="{{ route('products.baby_kid') }}">Baby & Kid</a></li>
        </ul>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
