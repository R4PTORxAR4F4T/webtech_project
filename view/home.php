<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>



<h1>Welcome to our website  <?=$_SESSION['username']?></h1>

<a href="dropCou.php">Drop course</a><br>
<a href="offerCou.php">Offered Courses</a><br>
<a href="feculty.php">Feculty Information</a><br>
<a href="chat.php">Chat</a><br>
<a href="notice.php">Notice</a><br>
<br>
<br>
<a href="logout.php">Log out</a>


<?php
    }else{
        echo "invalid request, please login first...";
?>

<br>
<a href="userLogin.php">Try again</a>

<?php
    }

?>

