<!DOCTYPE html>
<html lang="en">

@include('header2')
   
<!-- banner -->
<div class="page-heading about-heading header-text">
    <div class="">
        <div class="">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>Our Product</h4>
                    <h2>Pleasure to serve you</h2>
                </div>
            </div>
        </div>
    </div>
</div>   
<div class="wrap">
    <div class="search" style="width:400%">
        <form action="{{ route('product.search') }}" method="GET">
            <div class="search-container">
                <input type="text" class="searchTerm" name="query" style="width:90%" placeholder="What are you looking for?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- end search -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class=""></div>
                <div class="card-body">
                    @if (count($product) > 0)
                        <div class="row">
                            @foreach ($product as $productItem)
                                <div class="col-md-6 col-lg-4 mb-4">
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
                                            <p class="card-text1">${{ number_format($productItem->price, 2) }}</p>
                                            <p1 class="card-text">{{ $productItem->description }}</p1><br><br>
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $productItem->id }}">
                                                <a href="{{ route('cart.show') }}"><button type="submit" role="button" class="button-24">Add to Cart</button></a>
                                                <!-- HTML !-->
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
<br>


<!-- Footer -->
@include('footer')
<!-- End Footer -->

</body>
</html>