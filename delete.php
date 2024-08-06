<?php

session_start();

$conn=mysqli_connect("localhost","root","","studentmanagementsystem");
$id=$_GET['id'];
$delete="DELETE from studentinfo where id='$id'";
$query=mysqli_query($conn,$delete);
if($query){
header("location:select.php");
}
?>