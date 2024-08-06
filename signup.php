<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $username=$_POST['uname'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];


if(empty($username) || empty($password) || empty($cpassword)){
    echo '<script>alert("please fill all field")</script>';
}

else{
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        echo '<script>alert("username must contain only characters")</script>';
    }
    elseif(strlen($password) <8 || strlen($password) >8){
        echo '<script>alert("password must contain 8 charactes")</script>';
    }

    else{
    $conn=mysqli_connect("localhost","root","","studentmanagementsystem");
    //   if($conn){
    //     echo "connected";
    //   }
if($password == $cpassword){
    $sql="INSERT INTO users values('','$username','$password')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo '<script>alert("data inserted")</script>';
    }
}
else{
    echo '<script>alert("password not match")</script>';
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
    <title>Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin: 50px auto;
        }
        h3 {
            text-align: center;
            color: #333;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid ;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"], button {
            width: 100%;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover, button:hover {
            background-color: blue;
        }
        button a {
            text-decoration: none;
            color: white;
        }
    </style>

</head>
<body>
    <center>
        <table>
    <form method="POST">
        <tr><td colspan='2'><h3>FILL THE FORM FOR SIGNUP<h3></td></tr>
      <tr><td>Username</td><td><input type="text" name="uname"></td></tr>
      <tr><td>Password</td><td><input type="password" name="password"></td></tr> 
      <tr><td>Confirm Password</td><td><input type="password" name="cpassword"></td></tr>
      <tr><td colspan="2" style="text-align:center;"><input type="submit" name="submit" value="Signup">
    <button><a href='index.php' style="text-decoration: none; color: black;">Login</a></button></td></tr>
</form>
</table>
</center>
</body>
</html>