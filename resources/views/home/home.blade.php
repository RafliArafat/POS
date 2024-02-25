<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point of Sales App</title>
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
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .menu-item {
            background-color: #fff;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .menu-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .menu-item a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Point of Sales App</h1>
        <ul class="menu-list">
            <li class="menu-item"><a href="{{ route('products.index') }}">Daftar Produk</a></li>
            <li class="menu-item"><a href="{{ route('user.profile', ['id' => 1, 'name' => 'Rafli']) }}">Profil Pengguna</a></li>
            <li class="menu-item"><a href="{{ route('sales.index') }}">Halaman Penjualan</a></li>
        </ul>
    </div>
</body>
</html>

