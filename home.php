<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to SMS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        h1 {
            text-align: center;
            color: #333;
            padding: 20px 0;
            background-color: #fff;
            margin: 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .nav-container {
            background-color: #3498db;
            padding: 20px 0;
        }
        table {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }
        td {
            text-align: center;
        }
        button {
            background-color: burlywood;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #27ae60;
        }
        a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
    </style>


</head>
<body>
    <h1> Student management System</h1>
    <div style="background-color:blue;">
    <table cellpadding="60px";>
        <tr>

       <td> <button><a href="select.php">View student Information</a></button></td>
       <td> <button><a href="insert.php"> Add student Information</a></button></td>
        <td><button><a href="index.php">Logout</a></button><td>
</tr>
</table>
</div>     




</body>
</html>