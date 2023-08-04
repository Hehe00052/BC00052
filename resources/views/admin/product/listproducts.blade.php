<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Please give me D mark :3">
<meta name="author" content="hehe">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<title>BC00052</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<style>
    
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:561px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}

.btn{
        display: inline-block;
        outline: none;
        cursor: pointer;
        font-size: 15px;
        border-radius: 500px;
        transition-property: background-color,border-color,color,box-shadow,filter;
        transition-duration: .3s;
        border: 1px solid;
        letter-spacing: 2px;
        min-width: 100px;
        text-transform: uppercase;
        white-space: normal;
        font-weight: 700;
        height:15;
        text-align: center;
        color: #ffffff;
        box-shadow: inset 0 0 0 2px #616467;
        background-color: transparent;
        :hover{
        color: #fff;
        background-color: #616467;
        }
 
    }
    .btn-danger{
        border-color:  #ff3300;
    }
    .btn-success{
        border-color:  #00ff00;
    }


@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}

/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

</style>
@include('header')

<section>
    <h1>List product</h1>
<div class="tbl-header">
<table cellpadding="0" cellspacing="0">
                    @if (count($products) > 0)
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    <th>Actions</th> 
                                </tr>
                            </thead>
                            </table>
                            </div>
                            <div class="tbl-content">
                            <table cellpadding="0" cellspacing="0">
                            <tbody>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>${{ number_format($product->price, 2) }}</td>
            <td>{{ $product->description }}</td>
            <td>
                @if ($product->photo)
                    <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}" style="max-height: 100px; max-width:100px">
                @else
                    No Photo
                @endif
            </td>
            <td>
                <!-- Edit and Delete buttons -->
                <div style="display: flex; align-items: center;">
                    <!-- Edit button -->
                    <div style="margin-right: 10px;">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm">
                            <i class="fas fa-edit"></i> 
                        </a>
                    </div>
                    
                    <!-- Delete button -->
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    @else
        <p>No products found.</p>
    @endif
</tbody>

    </table>
</div>
</section>

</body>
<script>
    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>