<!-- resources/views/admin/needhelp/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Need Help Items</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
            color: #495057;
        }

        tbody tr:last-child td {
            border-bottom: none;
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

        .btn-danger {
            background-color: #ffdac1;
            border-color: #ffdac1;
            color: #fff;
        }

        .btn-primary:hover, .btn-primary:focus {
            background-color: #ff9f9d;
            border-color: #ff9f9d;
        }

        .btn-danger:hover, .btn-danger:focus {
            background-color: #ffc59f;
            border-color: #ffc59f;
        }
    </style>
</head>
<body>
    <header>
        <h1>Admin Need Help Items</h1>
    </header>

    <table class="table">
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
        <tbody>
            @foreach ($needHelpItems as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->message }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="{{ route('admin.show', $item->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-success">Edit</a>
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

    <footer>
        &copy; BC00052-ATN Shop
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
