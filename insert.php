<?php

session_start();
if(!isset($_SESSION['uname'])){
    header("location:login.php");
}
 $conn=mysqli_connect("localhost","root","","studentmanagementsystem");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $insert="INSERT into studentinfo(firstname,lastname,email) values('$fname','$lname','$email')";
    $query=mysqli_query($conn,$insert);
    if($query){
        header("location:select.php");
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        table {
            width: 50%;
            height: 10%;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid ;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: white;
        }
        button {
            width: 10%;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: gray;
        }
    </style>



</head>
<body>
    <center>
    <table border="2">
 <form action="" method="POST">
    <h2>Add student information</h2>
 <tr><td>Firstname</td><td><input type="text" name="fname" required></td></tr>
     <tr><td>Lastname</td><td><input type="text" name="lname"required></td></tr>
     <tr><td>Email</td><td><input type="text" name="email"required></td></tr>
     <tr ><td colspan="2" style="text-align: center;"><button>Insert</button></td></tr>
 </form> 
</table>
 
</center>
</body>
</html>