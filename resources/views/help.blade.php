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
</head>
<body>
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html"><h2>BC<em>00052</em></h2></a>
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
                        <li class="nav-item ">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item ">
                        <a class="nav-link" href="{{ route('product') }}">Product</a>
                        </li>
                        <li class="nav-item active">
                        <a style="color: white"class="nav-link" href="{{ route('help') }}">Contact Us</a>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>
</header>
<body>
    
    <div class="page-heading contact-heading header-text">
    <div class="container">
    <div class="content">
        <div class="container">
            <h1 style="color:white">Contact Us</h1>
            <form action="/needhelp" method="POST">
                @csrf
                <div class="mb-3" style="color: white;text-align:left">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3" style="text-align:left">
                    <label for="email" class="form-label" style="color: white">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3" style="text-align:left">
                    <label for="message" class="form-label" style="color: white;text-align:left">Message</label>
                    <textarea class="form-control" id="message" name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="font-color: white, background-color: red">Send Message</button>
            </form>
            @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
            @endif
        </div>
    </div>
</div>
</div>
    <footer>
        <div class="container">
        Hotline: 0916198548
        </div>
    </footer>

    
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>

<script>
    $(window).on('load', function() {
        $('#mdb-preloader').delay(1000).fadeOut(500);
    });
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
