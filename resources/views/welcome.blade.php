<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BC00052</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    .transparent-navbar {
      background-color: transparent !important;
      transition: background-color 0.3s ease-in-out;
    }

    .navbar-nav .nav-link {
      color: #333333;
    }

    .navbar-nav .nav-link:hover {
      color: #ffffff;
    }

    .hero-image {
      background-image: url("images/a.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero-text {
      color: #ffffff;
      text-shadow: 4px 4px 8px #000000;
    }

    .hero-button {
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top transparent-navbar">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('services') }}">Services</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('product') }}">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('help') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section with Background Image -->
  <section class="hero-image">
    <div class="container">
      <div class="hero-text">
        <h2>Welcome to ATN Shop</h2>
        <p>Discover a world of fun and imagination with our wide range of toys. Whether you're looking for educational
          toys, action figures, dolls, or puzzles, we have something for everyone. Our toys are carefully selected to
          provide entertainment and promote learning at every stage of a child's development.</p>
        <a href="{{ route('services') }}" class="btn btn-primary hero-button">Get Started</a>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer>
        &copy; BC00052-ATN Shop
    </footer>
</html>
