<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torfs schoenen : Dames</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Algemene stijlen */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Product grid */
        .product-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        /* Productkaart styling */
        .product {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            background-color: #fff;
            transition: transform 0.2s, box-shadow 0.2s;
            text-align: center;
        }

        .product:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .product h2 {
            font-size: 1.1em;
            color: #555;
            margin: 10px 0;
            height: 40px;
            overflow: hidden;
        }

        .product p {
            font-weight: bold;
            color: #007bff;
            margin: 5px 0;
        }

        .price {
            font-size: 1.2em;
            color: #ff5733;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Torfs schoenen : Dames</h1>
<h2>Producten gesorteerd op prijs: Hoog naar Laag</h2>

<!-- Controleer of producten aanwezig zijn -->
@if($products && count($products) > 0)
    <div class="product-container">
        @foreach($products as $product)
            <div class="product">
                <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}">
                <h2>{{ $product['name'] }}</h2>
                <p class="price">Prijs: {{ $product['price'] }}</p>
            </div>
        @endforeach
    </div>
@else
    <p>No products found.</p>
@endif

</body>
</html>
