<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torfs schoenen : Dames</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .product { border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; }
        img { max-width: 100px; }
    </style>
</head>
<body>

<h1>Torfs schoenen : Dames</h1>

@if($products && count($products) > 0)
    @foreach($products as $product)
        <div class="product">
            <h2>{{ $product['name'] }}</h2>
            <p>Price: {{ $product['price'] }}</p>
            <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}">
        </div>
    @endforeach
@else
    <p>No products found.</p>
@endif

</body>
</html>
