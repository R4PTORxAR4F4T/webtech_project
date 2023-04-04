<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'webtechproject');

$date = $_POST['date'];
$subject = $_POST['subject'];
$section = $_POST['section'];
$option = $_POST['option'];
$instractor = $_POST['instractor'];
$status = "processing";

// $data = "$date $subject sec:$section $option instractor:$instractor status:$status"."\r\n";

// $file = fopen('../data/dropInfo.txt', 'a') or die("Unable to open file!");
// fwrite($file, $data);
// fclose($file);

$sql = "insert into dropinfo values('','$date', '$subject', '$section','$option','$instractor','$status')";
$status = mysqli_query($con, $sql);

if($status){
    echo "Request have been saved";
}else{
    echo "error ...";
}

?>

<br>
<br>
<a href="dropCou.php">Back</a>

<a href="home.php">home</a>

