<nav class="menu2">
  <menu>
    <li><a href="{{ url('admin/listproducts.blade.php') }}"><b>List Product</b></a></li>
    <li><a href="{{url('/admin/addproduct')}}"><b>Add Product</b></a></li>
    <li><a href="{{url('admin/needhelp')}}"><b>Help</b></a></li>
  </menu>
</nav>
<style>
	body {
	  background-color: #0a68bb;
	  background-image: url('https://images.unsplash.com/photo-1564500617448-e541b1df7cee?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
	  background-size: cover;
	}

	nav {
	  margin: 30px auto;
	  width: 400px; 
	}

	menu {
	  border-radius: 3px;
	}

	menu:after,
	menu:before {
	  display: block;
	  content: ' ';
	}

	menu:after {
	  clear: both;
	}

	li {
	  list-style-type: none;
	  background: linear-gradient(rgba(220, 220, 255, 0.4) 85%, rgba(255, 255, 255, 0.5) 100%);

	  float: left;
	  cursor: pointer;
	  padding: 15px 20px; 
	  border-top: 2px solid rgba(200, 200, 255, 0.5);
	  border-bottom: 2px solid rgba(50, 50, 50, 0.4);
	}

	li a {
	  text-decoration: none;
	  color: white; 
	  display: block; 
	}

	li:first-child {
	  border-radius: 5px 0 0 5px;
	}

	li:last-child {
	  border-radius: 0 5px 5px 0;
	}
</style>
