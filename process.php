<?php

$name = $_POST['name'];
$type1 = $_POST['type1'];
$type2 = $_POST['type2'];
$ability = $_POST['ability'];
$hp = $_POST['hp'];
$atk = $_POST['atk'];
$def = $_POST['def'];
$spatk = $_POST['spatk'];
$spdef = $_POST['spdef'];
$speed = $_POST['speed'];
$info = $_POST['info'];
$image = $_POST['image'];
$stat = $hp + $atk + $def + $spatk + $spdef + $speed;

require 'connect.php';

$sql = "insert into fakemon(name,type1,type2,ability,hp,atk,def,spatk,spdef,speed,info,image,stat) values ('$name','$type1','$type2','$ability',$hp,$atk,$def,$spatk,$spdef,$speed,'$info','$image','$stat')";

mysqli_query($connect,$sql);

$error = mysqli_error($connect);
echo $error;

header("Refresh:0; url=index.php");

mysqli_close($connect);