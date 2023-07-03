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
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
        .product-item {
        display: block;
        }
        .product-item[style*="display: none"] {
          display: none;
        }
</style>
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
        <a class="navbar-brand" href="index.html">
          <h2>BC<em>00052</em></h2>
        </a>
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
              <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('product') }}">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('help') }}">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Our</h4>
              <h2>Product</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li>
                  <div class="search-container">
                      <input type="text" id="search-input" placeholder="Search products...">
                      <button type="button" onclick="searchProducts()">Search</button>
                  </div>
                  <script>
                    function searchProducts() {
                    var input = document.getElementById("search-input");
                    var filter = input.value.toLowerCase();
                    var items = document.getElementsByClassName("product-item");

                    for (var i = 0; i < items.length; i++) {
                      var name = items[i].getElementsByTagName("h4")[0];
                      var txtValue = name.textContent || name.innerText;
                      if (txtValue.toLowerCase().indexOf(filter) > -1) {
                        items[i].style.display = "";
                      } else {
                        items[i].style.display = "none";
                      }
                    }
                  }
                  </script>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Grizzly Gears</h4></a>
                          <h6>$13.5</h6>
                          <p>Rotate the trees to guide the characters through the forest… but beware of the bear! An original puzzle game, with a twist! You are not out of the woods until you have solved all 80 challenges.</p>
                          <ul class="stars">
                            <li><a href="guide.html" class="button"><u> Guide </u> </a></i></li>

                            <li><span><a href="#" class="filled-button">Buy Now</a></li>

                          </ul>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Robot Factory</h4></a>
                          <h6>$15.3</h6>
                          <p>Oh no! Robot parts got scrambled down at the factory. Can you assemble these robots correctly, I promise it will be easy OwO? Help me if you can! If you can't, help me !!!!!!</p>
                          <ul class="stars">
                            <li><a href="#" class="button"><u> Guide </u> </a></i></li>

                          </ul>
                          <span><a href="#" class="filled-button">Buy Now</a></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_03.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Goal</h4></a>
                          <h6>$11.2</h6>
                          <p>Place the pieces so you can pass the ball from player to player on your team… and shoot the winning goal! Includes 48 goal-scoring challenges, from amateur to professional.</p>
                          <ul class="stars">
                            <li><a href="#" class="button"><u> Guide </u> </a></i></li>

                          </ul>
                          <span><a href="#" class="filled-button">Buy Now</a></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_04.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Horse Academy</h4></a>
                          <h6>$24.6</h6>
                          <p>Create a path from start to finish so you can canter over the jumps in the right sequence! Are you on course to solve the 80 challenges? Get on your horse for some puzzling fun!</p>
                          <ul class="stars">
                            <li><a href="#" class="button"><u> Guide </u> </a></i></li>

                          </ul>
                          <span><a href="#" class="filled-button">Buy Now</a></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_05.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Treasure Island</h4></a>
                          <h6>$23.9</h6>
                          <p>Use logic and deduction but watch out! On this island the pieces shift! Find the right combinations to place the pieces and locate the ancient temple. Now let's go bae <3 </p>
                          <ul class="stars">
                            <li><a href="#" class="button"><u> Guide </u> </a></i></li>

                          </ul>
                          <span><a href="#" class="filled-button">Buy Now</a></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_06.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>IQ Stixx</h4></a>
                          <h6>$22.1</h6>
                          <p>5 horizontal pieces need to fit on top of 5 vertical ones. Can you criss-cross the sticks in this travel friendly puzzle game with 120 sticky challenges? Don't worry, I will give you an instruction!</p>
                          <ul class="stars">
                            <li><a href="#" class="button"><u> Guide </u> </a></i></li>

                          </ul>
                          <span><a href="#" class="filled-button">Buy Now</a></span>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12">
            <ul class="pages">
              <li class="active"><a href="#">1</a></li>
              <li class=""><a href="#">2</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li> 
            </ul>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Hotline: 0916198548
            
            </div>
          </div>
        </div>
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


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
