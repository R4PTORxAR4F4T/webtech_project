<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/home.css">
</head>
<body>
    <?php 
        session_start();
        if(isset($_COOKIE['flag'])){
    ?>

    <div class="home-title">
    <h1>Welcome to our website  <?=$_SESSION['username']?></h1>
    </div>

    <div class="feature-cards">
        <a class="card-c1" href="dropCou.php">Drop course</a><br>
        <a class="card-c2" href="offerCou.php">Offered Courses</a><br>
        <a class="card-c3" href="feculty.php">Feculty Information</a><br>
        <a class="card-c4" href="chat.php">Chat</a><br>
        <a class="card-c5" href="notice.php">Notice</a><br>
    </div>
    <br>
    <br>
    <div class="logout">
    <a href="logout.php">Log out</a>
    </div>


    <?php
        }else{
            echo "invalid request, please login first...";
    ?>

    <br>
    <a href="userLogin.php">Try again</a>

    <?php
        }

    ?>
</body>
</html>