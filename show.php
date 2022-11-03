<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FakeMon Info</title>
    <link rel="stylesheet" href="show.css">
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 30%;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<?php $id = $_GET['id']; 
require "connect.php";
$sql = "select * from fakemon where id = $id";
$output = mysqli_query($connect,$sql);
$getMon = mysqli_fetch_array($output);
?> 

<div class="page-header text-center">
    <h1>No<?php echo $getMon['id']?>. <?php echo $getMon['name']?> </h1>
</div>

<img src="<?php echo $getMon['image']?>" class="center"> <br>
    <?php include "graph.php";?>

<div id="infomation">
    <b>Ability: </b> <?php echo $getMon['ability']?> <br> <hr>
    <b>Info: </b>  <?php echo $getMon['info']?> <br>
</div>

<div class="text-center">
    <button onclick="history.back()" class="btn btn-primary">Back</button>
</div>
</body>
</html>