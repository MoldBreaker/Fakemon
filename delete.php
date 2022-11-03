<?php 

$id = $_GET['id'];
require 'connect.php';
$sql = "delete from fakemon where id = $id";

mysqli_query($connect,$sql);

header("Refresh:0; url=index.php");

mysqli_close($connect);