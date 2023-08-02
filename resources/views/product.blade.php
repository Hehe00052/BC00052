<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<title>BC00052</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
<link rel="stylesheet" href="assets/css/owl.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/search.css">



<!-- Custom CSS for product cards -->
<style>
    body {
        background-color:  #fef2f2;
    }
    .card-body{
        background-color:  white;
        height: auto;
        border-radius: 5.5rem;
        width: auto;
    }
    .product-card {
        border: 2px solid #e5e5e5;
        padding: 20px;
        border-radius: 45px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .product-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-card img {
        max-width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 20px 20px 0 0;
    }

    .product-card h5 {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .product-card p {
        margin-bottom: 10px;
    }

    .product-card button {
        width: 100%;
    }
    .product-card .card-body {
        width: 100%;
        height: 100%;
        background-color: white;
    }

    /* Custom CSS to make product cards wider */
    @media (min-width: 992px) {
        .product-card {
            width: 100%;
            max-width: 350px;
            margin-right: 2px;
            margin-bottom: 20px;
            background-color: white;

        }
        .card {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            
        }
        .card-header {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
            width: auto;
            font-size: 24px;
            font-weight: 600;
        }   

    }
</style>
</head>
<body>
<header class="">
<nav class="navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand" href="index.html"><h2 style="color: black;">BC<em>00052</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item ">
                        <a class="nav-link" href="{{ route('product') }}">Product</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('help') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.show') }}">Cart</a>
                        </li>
                    </ul>
            </div>
        </div>
    </nav></header>
   
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
<!-- Page Content -->
<!-- search -->
<div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
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
<!-- Add the button to view the cart -->

<!-- Add the button to view the cart -->

<!-- Footer -->
@include('footer')
<!-- End Footer -->

</body>
</html>