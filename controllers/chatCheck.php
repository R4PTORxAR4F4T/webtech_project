<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'webtechproject');

$file = file('../data/userProfile.txt');
foreach($file as $line) {
    $parts = explode(':', $line);
    $name = trim($parts[0]);
}

$current_time = time();
$current_date_time = date("Y-m-d H:i:s", $current_time);

if(isset($_REQUEST['send'])){
    $massage = $_REQUEST['massage'];
    $reciver = $_REQUEST['reciver'];

    if($massage != ""){

        $sql = "insert into chat_messages values('','$name', '$reciver', '$massage','$current_date_time')";
        $status = mysqli_query($con, $sql);
        header('location: chat.php');
        // // writing massage on website text file as db
        // $data ="$name => $massage \r\n";
        // $file = fopen('../data/chat.txt', 'a');
        // fwrite($file, $data);
        // $massage="";
    }
}

// reading and show text file as db
// $file = fopen('../data/chat.txt', 'r');
// while(!feof($file)){
//     $data = fgets($file);
//     // echo $username;
//     echo $data;
//     echo"<br>";
// }

$sql = "SELECT *
FROM chat_messages
WHERE sender_name LIKE '%$name%' OR receiver_name LIKE '%$name%' OR receiver_name LIKE '%all%';
";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)){
    print_r($row);
    echo "<br>";
}

?>