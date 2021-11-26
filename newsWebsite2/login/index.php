<?php
session_start();

    include("../db.php");
    include("function.php");
    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert News</title>
    <style>
        .newsInsert{
            width: 400px;
            height: 300px;
            border: 2px solid black;
            margin: 0 auto;
        }
        textarea{
            margin-left: 15px;
            border: 2px solid black;
            margin-top: 10px;
        }
        input{
            margin-left: 15px;
            /* border: 2px solid black; */
            margin-top: 20px;
        }
        
    </style>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Insert News</h1>

    <br>
    Hello, <?php echo $user_data['user_name']; ?>

    <div class="newsInsert">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <textarea name="news" id="" cols="50" rows="15" placeholder="Enter News" required></textarea>
            <input type="file" name="image">
            <input style="float:right; margin-right:12px; font-size:20px;" type="submit" name="submit" value="Submit">
        </form>

        <?php

        if(isset($_POST['submit'])){
            $news = $_POST['news'];
            $sql = "INSERT INTO news(news) values('$news')";
            $query = mysqli_query($con, $sql);
        }

        ?>


    </div>
</body>
</html>

