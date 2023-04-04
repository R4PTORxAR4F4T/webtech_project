<h2>Chat BOX</h2>

<?php

$file = file('../data/userProfile.txt');
foreach($file as $line) {
    $parts = explode(':', $line);
    $name = trim($parts[0]);
}





if(isset($_REQUEST['send'])){
    $massage = $_REQUEST['massage'];

    if($massage != ""){
        // writing massage on website
        $data ="$name => $massage \r\n";
        $file = fopen('../data/chat.txt', 'a');
        fwrite($file, $data);
        $massage="";
    }
}

// reading and show
$file = fopen('../data/chat.txt', 'r');
while(!feof($file)){
    $data = fgets($file);
    // echo $username;
    echo $data;
    echo"<br>";
}

?>

<form action="" method="post">
<input 
    name="massage" 
    type="text" 
    value=""
>
<input type="submit" name="send" value="send">
</form>


<br>
<a href="home.php">Back</a>