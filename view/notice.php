<h2>NOTICE</h2>

<a href="home.php">home</a>
<br>
<br>

<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtechproject');

    $current_time = time();
    $current_date_time = date("Y-m-d H:i:s", $current_time);

    $file = file('../data/userProfile.txt');
        foreach($file as $line) {
            $parts = explode(':', $line);
            $name = trim($parts[0]);
        }

    if($name == "admin"){
?>
    <form method="post" action="">
    <label for="">Notic title:</label>
    <input type="text" id="noticeTitle" name="noticeTitle"><br><br>
    <label for="">link :</label>
    <input type="text" id="noticelink" name="noticelink"><br><br>    
    <textarea rows="4" cols="50" name="message" placeholder="Type your message here"></textarea><br><br>
    <input type="submit" name="update">
    </form>
<?php
    
    if(isset($_REQUEST['update'])){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $noticeTitle = $_POST['noticeTitle']; 
            $noticelink = $_POST['noticelink'];  
            $message = $_POST['message'];  

            if($noticeTitle != "" && $noticelink != "" && $message=!""){
                $title_linked = "<a href="."$noticelink".">$noticeTitle</a>";

                $sql = "insert into notic values('', '$message', '$title_linked','$current_date_time')";
                $status = mysqli_query($con, $sql);
                header('location: notice.php');
                // //================file as data base
                // $file = fopen('../data/notice.txt', 'a');
                // $data = "<a href="."'$noticelink'".">$noticeTitle</a>"."\r\n";
                // fwrite($file, $data);
                // fclose($file);
            }
            }
            
        }
    }

    $sql = "select * from notic";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
        print_r($row['link']);
        echo "<br>";
    }
    // $file = fopen('../data/notice.txt', 'r');

    // while(!feof($file)){
    //     $data = fgets($file);
    //     echo $data;
    //     echo"<br>";
    // }
    // fclose($file);
?>

