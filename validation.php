<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'project');
$username = $_POST['username']; 
$password = $_POST['password'];


$s = "select * from usertable where username = '$username'&& password = '$password'";
$result = mysqli_query($con,$s);
$num = mysqli_num_row($result);
if($num ==1){
    $_SESSION['username'] = $username;
    header('location:home.php');
}else{
  header('location:index.php');
}
?>