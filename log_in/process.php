<?php 

$email = $_POST['email'];
$password = $_POST['password'];

require "../connect.php";

$sql = "select * from acount";
$result = mysqli_query($connect,$sql);

foreach ($result as $each) {
    if($each['email'] == $email){
        if($each['password'] == $password){
            header('location:../index.php?error=Sign In Success');
            die();
        }
    }
}
header('location:sign_in.php?error=Sign In Failed');
mysqli_close($connect);







