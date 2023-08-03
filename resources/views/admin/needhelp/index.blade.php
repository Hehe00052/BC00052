<!-- resources/views/admin/needhelp/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Need Help Items</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
    
    
    /* demo styles */
    
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
    body{
      background: -webkit-linear-gradient(left, #25c481, #25b7c4);
      background: linear-gradient(to right, #25c481, #25b7c4);
      font-family: 'Roboto', sans-serif;
    }
    section{
      margin: 50px;
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
    .btn{
        display: inline-block;
        outline: none;
        cursor: pointer;
        font-size: 15px;
        line-height: 1;
        border-radius: 500px;
        transition-property: background-color,border-color,color,box-shadow,filter;
        transition-duration: .3s;
        border: 1px solid transparent;
        letter-spacing: 2px;
        min-width: 155px;
        text-transform: uppercase;
        white-space: normal;
        font-weight: 700;
        text-align: center;
        padding: 16px 14px 18px ;
        color: #ffffff;
        box-shadow: inset 0 0 0 2px #616467;
        background-color: transparent;
        height: 48px;
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
    </style>
</head>
<body>
 @include('header')

<section>
    <h1>Admin Need help Items</h1>
<div class="tbl-header">
<table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        </table>
        </div>
        <div class="tbl-content">
        <table cellpadding="0" cellspacing="0">
        <tbody>
            @foreach ($needHelpItems as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->message }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <div>
                        <a href="{{ route('admin.show', $item->id) }}" class="btn btn-primary">View</a>
                        </div><br>
                        <div>
                        <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-success">Edit</a>
                        </div><br>
                        <form action="{{ route('admin.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
</div>
</section>

    <footer>
        &copy; BC00052-ATN Shop
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
