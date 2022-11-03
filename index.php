<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FakeMon</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .success{
            color: green;
            text-align: center;
            font-family: roboto;
        }
    </style>
    <script src="check_login.js"></script>
</head>
<body>
    <?php require "connect.php";

    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }

    $search = '';
    if(isset($_GET['search'])){
        $search = $_GET['search']; 
    }

    //paging

    $count = "select count(*) from fakemon where name like '%$search%'";
    $array_of_count = mysqli_query($connect,$count);
    $get_count = mysqli_fetch_array($array_of_count);
    $sum_page = $get_count['count(*)']; 

    $limit = 5;

    $page_count = ceil($sum_page / $limit);

    $skip = $limit * ($page - 1);

    $sql = "select * from fakemon where name like '%$search%' limit $limit offset $skip";
    $sum = mysqli_query($connect,$sql);
    ?> 

    <script>
        //log in variable
        let log = false;
    </script>

    <div class="page-header text-center">
        <h1>FAKEMON.ORG</h1>
    </div>
    <a onclick="return check_login(log)" href="form.php">Add Fakemon</a> 
    <p class="text-right">
        <a  href="log_in/sign_in.php">Sign In</a>
    </p>
    <div class="success">
    <?php 
        if(isset($_GET['error'])){
            $error= $_GET['error'];
            echo $error; ?>
            <script>log = true</script>
        <?php }?>
    
    </div>
    
    <table class="table table-hover" width="100%">
        <caption>
            <form>
                <div class="text-center">
                    <input type="search" name="search" value="<?php echo $search?>">
                </div>
            </form>
        </caption>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Type</th>
            <th>Type</th>
            <th>Ability</th>
            <th>HP</th>
            <th>Atk</th>
            <th>Def</th>
            <th>Sp.Atk</th>
            <th>Sp.Def</th>
            <th>Speed</th>
            <th>Base Stat</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php foreach($sum as $key){ ?>
            <tr>
                <td>
                    <?php echo $key['id']?>
                </td>
                <td>
                    <img src="<?php echo $key['image']?>" width="100" height="80">
                </td>
                <td>
                    <a href="show.php?id=<?php echo $key['id']?>">
                        <?php echo $key['name'] ?> 
                    </a>
                </td>
                <td>
                    <?php echo $key['type1']?>
                </td>
                <td>
                    <?php if($key['type2'] != 'none'){
                        echo $key['type2'];
                    } else echo '';?>
                </td>
                <td>
                    <?php echo $key['ability']?>
                </td>
                <td>
                    <?php echo $key['hp']?>
                </td>
                <td>
                    <?php echo $key['atk']?>
                </td>
                <td>
                    <?php echo $key['def']?>
                </td>
                <td>
                    <?php echo $key['spatk']?>
                </td>
                <td>
                    <?php echo $key['spdef']?>
                </td>
                <td>
                    <?php echo $key['speed']?>
                </td>
                <td>
                    <?php echo $key['stat']?>
                </td>
                <td>
                    <a href="form_update.php?id=<?php echo $key['id']?>">Update</a>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $key['id']?>">Delete</a>
                </td>
            </tr>
        <?php }?>
    </table>
    
    <div class="text-center">
    <?php for($i = 1;$i <= $page_count; $i++){ ?>
        <button>
            <a href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
                <?php echo "$i"; ?> 
            </a>
        </button>  
    <?php } ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>