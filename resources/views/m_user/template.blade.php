<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40;
            color: #fff;
        }

        .container {
            margin-top: 50px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #bd2130;
            border-color: #bd2130;
        }

        .table {
            color: #fff;
        }

        .table thead th {
            background-color: #212529;
            border-color: #343a40;
        }

        .table-bordered {
            border-color: #343a40;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #343a40;
        }

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #117a8b;
            border-color: #117a8b;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
