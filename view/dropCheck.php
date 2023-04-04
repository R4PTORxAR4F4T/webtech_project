<?php
$date = $_POST['date'];
$subject = $_POST['subject'];
$section = $_POST['section'];
$option = $_POST['option'];
$instractor = $_POST['instractor'];
$status = "processing";

$data = "$date $subject sec:$section $option instractor:$instractor status:$status"."\r\n";

$file = fopen('../data/dropInfo.txt', 'a') or die("Unable to open file!");
fwrite($file, $data);
fclose($file);

echo "Request have been saved";
?>

<br>
<br>
<a href="dropCou.php">Back</a>

<a href="home.php">home</a>

