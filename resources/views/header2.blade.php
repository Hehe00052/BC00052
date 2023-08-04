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
<body class="">
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
    </nav></body>
	</html>