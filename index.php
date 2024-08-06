<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['uname'];
    $password = $_POST['password'];
    $conn = mysqli_connect("localhost", "root", "", "studentmanagementsystem");
    $select = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($conn, $select);

    if (!empty($username) || !empty($password)) {
        if ($query) {
            $get = mysqli_fetch_assoc($query);
            $uusername = $get['username'];
            $ppassword = $get['password'];
            if ($username == $uusername && $password == $ppassword) {
                $_SESSION['uname'] = $username;
                header("location:home.php");
            } 
        }
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            background-color: blue;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            margin: 0;
            padding-bottom: 10px;
            font-size: 24px;
            color: #333;
        }

        td {
            padding: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"],
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #45a049;
        }

        button a {
            text-decoration: none;
            color: white;
        }

        button {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <center>
        <table>
            <form method="POST">
                <tr>
                    <td colspan='2' style="text-align:center;"><h3>Login Form</h3></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="submit" value="Login">
                        <button><a href='signup.php'>Sign up</a></button>
                    </td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>
