<!-- resources/views/product.blade.php -->
<style>
    /* Custom CSS for product cards */
    .product-card {
        /* ... Your existing CSS styles ... */
    }

    /* ... Your existing CSS styles ... */
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Product for Customer</div>

                <div class="card-body">
                    @if (count($product) > 0)
                        <div class="row">
                            @foreach ($product as $productItem)
                                <div class="col-md-4 mb-4">
                                    <div class="product-card">
                                        @if ($productItem->photo)
                                            <img src="{{ asset('storage/' . $productItem->photo) }}" class="card-img-top" alt="{{ $productItem->name }}">
                                        @else
                                            <div class="no-photo">
                                                No Photo
                                            </div>
                                        @endif
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $productItem->name }}</h5>
                                            <p class="card-text">${{ number_format($productItem->price, 2) }}</p>
                                            <p class="card-text">{{ $productItem->description }}</p>
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $productItem->id }}">
                                                <button type="submit" class="btn btn-primary">Add to Cart</button>
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

<!-- Add the button to view the cart -->
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="{{ route('cart.show') }}" class="btn btn-primary">View Cart</a>
        </div>
    </div>
</div>
