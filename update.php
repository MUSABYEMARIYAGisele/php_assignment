<?php
session_start();
$conn=mysqli_connect("localhost","root","","studentmanagementsystem");
$id=$_GET['id'];
$sql="SELECT *FROM studentinfo where id='$id'";
$query=mysqli_query($conn,$sql);
while($get=mysqli_fetch_assoc($query)){
    $fname=$get['firstname'];
    $lname=$get['lastname'];
    $email=$get['email'];
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
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        td {
            padding: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: gray;
        }
    </style>

</head>
<body>
    <table>
        <h1>Update Student Information</h1>
    <form action="" method="POST">
     <tr><td>Firstname</td><td><input type="text" name="fname" value="<?php echo $fname;?>"></td></tr>
     <tr><td>Lastname</td><td><input type="text" name="lname" value="<?php echo $lname;?>"></td></tr>
     <tr><td>Email</td><td><input type="text" name="email" value="<?php echo $email;?>"></td></tr>
     <tr ><td colspan="2" style="text-align: center;"><button>Update</button></td></tr>
     <?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $update="UPDATE studentinfo set firstname='$fname' ,lastname='$lname' , email='$email' where id='$id'";
        $query=mysqli_query($conn,$update);
        if($query){
            echo "data updated";
            header("location:select.php");
        }
     }
     
     
     ?>
    </form>
</table>
</body>
</html>