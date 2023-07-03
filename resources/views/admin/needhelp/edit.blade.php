<!-- edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Need Help Item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Custom CSS for the cute theme */
        body {
            background-color: #f8f9fa;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #6c757d;
        }

        header {
            background-color: #ffdac1;
            padding: 10px;
            margin-bottom: 20px;
        }

        footer {
            background-color: #ffdac1;
            padding: 10px;
            text-align: center;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .btn {
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 4px;
        }

        .btn-primary {
            background-color: #ffb3ba;
            border-color: #ffb3ba;
            color: #fff;
        }

        .btn-primary:hover, .btn-primary:focus {
            background-color: #ff9f9d;
            border-color: #ff9f9d;
        }
    </style>
</head>
<body>
    <header>
        <h1>Edit Need Help Item</h1>
    </header>

    <div class="container">
        <form action="{{ route('admin.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $item->email }}">
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message">{{ $item->message }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <footer>
        &copy; BC00052-ATN Shop
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
