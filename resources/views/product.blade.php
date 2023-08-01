<style>
    /* Custom CSS for product cards */
    .product-card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product-card img {
        height: 200px; /* Fixed height for the image */
        width: auto; /* Let the width scale automatically to maintain the aspect ratio */
        border-radius: 5px;
    }

    .product-card .card-title {
        font-size: 18px;
        font-weight: bold;
        margin-top: 10px;
    }

    .product-card .card-text {
        margin-top: 5px;
    }

    .product-card .add-to-cart-btn {
        margin-top: 10px;
    }

    .no-photo {
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 16px;
        color: #777;
    }
</style>
<html>
<body>
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
                                            <button class="btn btn-primary add-to-cart-btn" onclick="addToCart({{ $product->id }})">Add to Cart</button>
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
<script src="{{ asset('js/addToCart.js') }}"></script>
</body>  
</html>

