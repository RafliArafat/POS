<!-- resources/views/sales/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point of Sales</title>
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
        .sales-info {
            text-align: center;
        }
        .sales-info p {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="back-btn">
            <button onclick="goBack()">Back</button>
        </div>
        <h1>Point of Sales</h1>
        <div class="sales-info">
            <p>Halaman Transaksi POS</p>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
