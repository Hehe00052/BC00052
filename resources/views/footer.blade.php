<!DOCTYPE html>
<html lang="en">
<head>
  <title>Footer Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
  line-height: 1.5;
  font-family: 'Poppins', sans-serif;
}
*{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
.container{
  max-width: 1170px;
  margin:auto;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
ul{
  list-style: none;
}
.footer{
  background-color: white;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}
.footer-col h4::before{
  content: '';
  position: absolute;
  left:0;
  bottom: -10px;
  background-color: #e91e63;
  height: 2px;
  box-sizing: border-box;
  width: 50px;
}
.footer-col ul li:not(:last-child){
  margin-bottom: 10px;
}
.footer-col ul li a{
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  color: #bbbbbb;
  display: block;
  transition: all 0.3s ease;
}
.footer-col ul li a:hover{
  color: #ffffff;
  padding-left: 8px;
}
.footer-col .social-links a{
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255,255,255,0.2);
  margin:0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
  color: #24262b;
  background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}

</style>
<body>

  <footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4 style="color: black">company</h4>
          <ul>
            <li><a href="{{ route('about') }}" style="color: black">About us</a></li>
            <li><a href="{{ route('services') }}" style="color: black">Our services</a></li>
            <li><a href="#" style="color: black">Privacy policy</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4 style="color: black">interesting</h4>
          <ul>
            <li><a href="#" style="color: black">Home</a></li>
            <li><a href="#" style="color: black">Product</a></li>
            <li><a href="{{ route('services') }}" style="color: black">Our services</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4 style="color: black">Get help</h4>
          <ul>
          <li><a href="{{ route('help') }}" style="color: black">FAQ</a></li>
          <li><a href="{{ route('about') }}" style="color: black">About us</a></li>
          <li><a href="{{ route('services') }}" style="color: black">Our services</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4 style="color: black">follow us</h4>
          <div class="social-links" >
            <a href="#"><i class="fab fa-facebook-f" style="color: black"></i></a>
            <a href="#"><i class="fab fa-twitter" style="color: black"></i></a>
            <a href="#"><i class="fab fa-instagram" style="color: black"></i></a>
            <a href="#"><i class="fab fa-linkedin-in" style="color: black"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>

</body>
</html>