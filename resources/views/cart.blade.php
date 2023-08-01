<!-- resources/views/cart.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
</head>
<body>
    <h1>Your Cart</h1>
    @if(count($productsInCart) > 0)
        <ul>
            @foreach($productsInCart as $product)
                <li>{{ $product->name }} - ${{ number_format($product->price, 2) }}</li>
            @endforeach
        </ul>
    @else
        <p>Your cart is empty.</p>
    @endif
    <a href="{{ route('product') }}">Continue Shopping</a>
</body>
</html>
