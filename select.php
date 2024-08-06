<?php
session_start();
if(!isset($_SESSION['uname'])){
    header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: blue;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .action-buttons {
            white-space: nowrap;
        }
        .action-buttons a {
            display: inline-block;
            padding: 5px 10px;
            margin: 2px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 3px;
        }
        .action-buttons a:hover {
            background-color: #45a049;
        }
    </style>

</head>
<body>
    <h1>Student Details View</h1>
    <button style="float: right;"><a href='index.php' style="text-decoration: none; color:black;">Logout</a></button>
    <form method="post">
        <table border="1">
        <tr>
            <th>Student_id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>time_created</th>
            <th>time_update</th>
            <th>Action</th>
</tr>
<?php

$conn=mysqli_connect("localhost","root","","studentmanagementsystem");
$select="SELECT *FROM studentinfo";
$query=mysqli_query($conn,$select);
if(mysqli_num_rows($query) >0){
 while($get=mysqli_fetch_assoc($query)){
 echo "<tr>
 <td>".$get['id']."</td>
 <td>".$get['firstname']."</td>
 <td>".$get['lastname']."</td>
 <td>".$get['email']."</td>
 <td>".$get['time_created']."</td>
 <td>".$get['time_updated']."</td>
 <form method='POST'><td><button><a href='update.php?id=".$get['id']."'>Update</a></button><button><a href='delete.php?id=".$get['id']."'>Delete</a></button></td></form>
 </tr>";
}
}
?>
</table>
click <a href='insert.php'>here</a> if you want to add a student information.
</form>
</body>
</html>