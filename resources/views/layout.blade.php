<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #f5f5dc;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .header, .footer {
            background-color: #8b4513;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .header h1, .footer p {
            margin: 0;
        }
        .content {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .btn {
            background-color: #8b4513;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 3px;
            display: inline-block;
            margin-top: 10px;
            margin-right: 5px;
        }
        .btn:hover {
            background-color: #a0522d;
        }
        .alert {
            padding: 10px;
            background-color: #f8d7da;
            color: #721c24;
            margin-bottom: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #8b4513;
            color: white;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px 0;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        label {
            display: block;
            margin: 10px 0 5px 0;
            font-weight: bold;
        }
        .action-buttons {
            display: flex;
            gap: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Laravel CRUD</h1>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
        <p>&copy; 2024</p>
    </div>
</body>
</html>
