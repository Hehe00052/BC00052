<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Product for Customer</div>

                <div class="card-body">
                    @if (count($product) > 0)
                        <div class="row">
                            @foreach ($product as $product)
                                <div class="col-md-4 mb-4">
                                    <div class="product-card">
                                        @if ($product->photo)
                                            <img src="{{ asset('storage/' . $product->photo) }}" class="card-img-top" alt="{{ $product->name }}">
                                        @else
                                            <div class="no-photo">
                                                No Photo
                                            </div>
                                        @endif
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->name }}</h5>
                                            <p class="card-text">${{ number_format($product->price, 2) }}</p>
                                            <p class="card-text">{{ $product->description }}</p>
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No products found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function addToCart(productId) {
    // You can implement the logic to add the selected product to the shopping cart here.
    // For this example, we'll simply show an alert with the selected product's ID.
    alert('Product ID ' + productId + ' added to the cart.');
}
// addToCart.js

    function addToCart(productId) {
        document.getElementById('product_id').value = productId;
        document.getElementById('add_to_cart_form').submit();
    }

</script>


