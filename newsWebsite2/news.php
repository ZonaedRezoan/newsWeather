<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Weather/font/Rimouski.css">
    <link rel="stylesheet" href="Weather/style.css">
    <title>News Paper</title>
    <style>
        body{
            background-color: azure;
        }
        h1{
            margin:0 auto;
        }
        .divmain{
            margin-left:20px;
            width: 70%;
        }
        .div1{
            border:2px solid black;
            float:left;
            width: 30%;
            height: 200px;
            margin-left: 10px;
            margin-top: 10px;
        }
        .div2{
            width: 90%;
            border: 1px solid black;
            height:60%;
            overflow: hidden;
            margin-left: 14px;
            margin-top: 10px;
        }
        .div3{
            float:left;
            /* border: 1px solid black; */
            margin-top:10px;
            margin-left:15px;
            
        }
        #label2{
            margin-bottom:10px;
        }
        .weather{
            margin-top:5px;
            float:right;
            border: 1px solid black;
        }
    </style>

</head>
<body>
    <div class="all">
        <h1>All News</h1>
        <div class="weather">
            <h1>Dhaka</h1>
            <h2><span>30</span> ° C</h2>
        </div>
        <div class="divmain">
            <?php
            $sql = "SELECT * from news order by id desc";
            $query = mysqli_query($con, $sql);

            while ($info = mysqli_fetch_array($query)) {
                ?>
                <div class="div1">
                    <div class="div2">
                        <?php echo ($info['news']); ?>
                    </div>

                    <div class="div3">
                        <label id="label1"><?php echo formatDay($info['date']); ?></label><br><br>
                        <label id="label2"><?php echo formatDate($info['date']); ?></label>
                        <label id="label2"><?php echo formatTime($info['date']); ?></label>
                    </div>

                    <a class="readfullnews" href="fullNews.php?newsid=<?php echo $info['id'] ?>"> Read Full News </a>
                </div>

                <?php
            }
            
            ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="Weather/test.js"></script>

</body>
</html>
