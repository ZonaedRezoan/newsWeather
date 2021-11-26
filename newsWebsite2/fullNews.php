<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full News</title>
    <style>
        .div1{
            margin: 0 auto;
            margin-top: 30px;
        }
        .div2{
            width: 750px;
            margin-top: 20px;
            font-size: 20px;
        }
        p{
            font-size:20px;
            font-weight: bold; 
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <!-- <h1>This is fullNews page<?php echo $_GET['newsid']?></h1> -->
    <?php
    $sql = "SELECT * from news where id = ".$_GET['newsid'];
    $query = mysqli_query($con, $sql);
    $info = mysqli_fetch_array($query);
    // var_dump($info);
    // echo $info[''];
    
    ?>
    <p><?php echo $info['news'] ?></p>

    
</body>
</html>


