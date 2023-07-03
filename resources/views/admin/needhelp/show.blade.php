<!-- resources/views/admin/needhelp/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Need Help Item</title>
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
            background-color: #ffb3ba;
            padding: 10px;
            margin-bottom: 20px;
        }

        footer {
            background-color: #ffb3ba;
            padding: 10px;
            text-align: center;
        }

        .item-details {
            background-color: #ffdac1;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .item-details p {
            margin-bottom: 10px;
        }

        .back-link {
            display: block;
            text-align: center;
            color: #495057;
            margin-top: 20px;
        }

        .back-link:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Admin Need Help Item</h1>
    </header>

    <div class="item-details">
        <p><strong>Name:</strong> {{ $needHelpItem->name }}</p>
        <p><strong>Email:</strong> {{ $needHelpItem->email }}</p>
        <p><strong>Message:</strong> {{ $needHelpItem->message }}</p>
        <p><strong>Created At:</strong> {{ $needHelpItem->created_at }}</p>
        <p><strong>Updated At:</strong> {{ $needHelpItem->updated_at }}</p>
    </div>

    <a href="{{ route('admin.index') }}" class="back-link">Back</a>

    <footer>
        &copy; 2023 Admin Need Help Item
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
