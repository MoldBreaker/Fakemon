<?php 

$id = $_POST['id'];
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

$sql = "update fakemon 
set
name = '$name',
type1 = '$type1',
type2 = '$type2',
ability = '$ability',
hp = $hp,
atk = $atk,
def = $def,
spatk = $spatk,
spdef = $spdef,
speed = $speed,
info = '$info',
image = '$image',
stat = $stat
where id = $id";

mysqli_query($connect,$sql);

header("Refresh:0; url=index.php?");

mysqli_close($connect);