<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>

    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>