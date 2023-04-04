<h2>NOTICE</h2>

<a href="home.php">home</a>
<br>
<br>

<?php

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
        
    <input type="submit" name="update">
    </form>
<?php
    
    if(isset($_REQUEST['update'])){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $noticeTitle = $_POST['noticeTitle']; 
            $noticelink = $_POST['noticelink'];  
            
            if($noticeTitle != "" && $noticelink != ""){
            $file = fopen('../data/notice.txt', 'a');

            $data = "<a href="."'$noticelink'".">$noticeTitle</a>"."\r\n";
            fwrite($file, $data);
            
            fclose($file);
            }
            }
            
        }
    }

    $file = fopen('../data/notice.txt', 'r');

    while(!feof($file)){
        $data = fgets($file);
        echo $data;
        echo"<br>";
    }
    fclose($file);
?>

