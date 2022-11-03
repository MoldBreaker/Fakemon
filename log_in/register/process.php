<?php 

if(isset($_POST['name']) == false || isset($_POST['email']) == false || isset($_POST['password']) == false){
    header('location:../sign_in.php');
    die();
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

require "../../connect.php";

$sql = "insert into acount(name,email,password) values ('$name','$email','$password')";
mysqli_query($connect,$sql);

header('location:../sign_in.php?error=Register Success');