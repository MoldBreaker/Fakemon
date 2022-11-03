<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Fakemon</title>
    <script src="valid.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php 
        $id = $_GET['id'];
        require "connect.php";
        $sql = "select * from fakemon where id = $id";
        $result = mysqli_query($connect,$sql);
        $getMon = mysqli_fetch_array($result); 
    ?>

<div class="container">
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $getMon['id']?>">

        <div class="form-group">
            <label for="">Fakemon Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $getMon['name']?>">
        </div>
        <div class="text-danger" id="name_error"></div> <br>

        Type <select name="type1" id="type1" class="form-select" aria-label="Default select example" required>
            <option value="">None</option>
            <?php include 'type.php';?>
        </select> <div class="text-danger" id="type1_error"></div> <br>

        Type <select name="type2" id="type2" class="form-select" aria-label="Default select example">
            <option value="none">None</option>
            <?php include 'type.php';?>
        </select> <div class="text-danger" id="type2_error"></div> <br>

        Ability <select name="ability" id="ability" class="form-select" aria-label="Default select example">
            <?php include "selectAbility.php"?>
        </select> <br> 

        <div class="form-group">
            <label for="">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" placeholder="Enter HP" value="<?php echo $getMon['hp']?>">
        </div>
        <span class="text-danger" id="hp_error"></span> <br>

        <div class="form-group">
            <label for="">Atk</label>
            <input type="number" class="form-control" id="atk" name="atk" placeholder="Enter Atk" value="<?php echo $getMon['atk']?>">
        </div>
        <span class="text-danger" id="atk_error"></span> <br>

        <div class="form-group">
            <label for="">Def</label>
            <input type="number" class="form-control" id="def" name="def" placeholder="Enter Def" value="<?php echo $getMon['def']?>">
        </div>
        <span class="text-danger" id="def_error"></span> <br>

        <div class="form-group">
            <label for="">Sp.Atk</label>
            <input type="number" class="form-control" id="spatk" name="spatk" placeholder="Enter Sp.Atk" value="<?php echo $getMon['spatk']?>">
        </div>
        <span class="text-danger" id="spatk_error"></span> <br>

        <div class="form-group">
            <label for="">Sp.Def</label>
            <input type="number" class="form-control" id="spdef" name="spdef" placeholder="Enter Sp.Def" value="<?php echo $getMon['spdef']?>">
        </div>
        <span class="text-danger" id="spdef_error"></span> <br>

        <div class="form-group">
            <label for="">Speed</label>
            <input type="number" class="form-control" id="speed" name="speed" placeholder="Enter Speed" value="<?php echo $getMon['speed']?>">
        </div>
        <span class="text-danger" id="speed_error"></span> <br>

        <div class="form-group">
            <label for="">Infomation</label>
            <textarea class="form-control" name="info" id="info" rows="3"> <?php echo $getMon['info']?> </textarea>
        </div>
        <span id="info_error" class="text-danger"></span><br>

        <div class="form-group">
            <label for="">Image</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Enter link of image" value="<?php echo $getMon['image']?>">
        </div>
        <span id="image_error" class="text-danger"></span> <br>

        <div class="d-flex justify-content-center">
            <button onclick="history.back()" class="btn btn-outline-secondary">Back</button>
            <button onclick="return check()" class="btn btn-primary">Change</button>
        </div>
    </form>

</div>
</body>
</html>