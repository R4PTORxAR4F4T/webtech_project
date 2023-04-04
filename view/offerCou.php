<h1>Offered Course</h1>
<p>Departments</p>

<a href="?action=cse" name="cse">BSc CSE</a><br>
<?php

    if (isset($_GET['action']) && $_GET['action'] === 'cse') {
        echo "working 1<br>";
?>
    <input type="search" name="CouSearch">
    <input type="submit"><br>
<?php
    $file = fopen('../data/cseCourse.txt', 'r');
    // $data = fread($file, filesize('../data/cseCourse.txt'));  
    // $data = fgets($file);  
    // echo $data;
    while(!feof($file)){
        $data = fgets($file);
        echo $data;
        echo"<br>";
    }

    fclose($file);
    echo"<br>";
    }
?>

<a href="?action=eee" name="eee">BSc EEE</a><br>
<?php

    if (isset($_GET['action']) && $_GET['action'] === 'eee') {
        echo "working 2<br>";
?>
        <input type="search" name="CouSearch">
        <input type="submit"><br>
<?php
    }
?>

<a href="?action=bba" name="bba">BSc BBA</a><br>
<?php

    if (isset($_GET['action']) && $_GET['action'] === 'bba') {
        echo "working 3<br>";
?>
        <input type="search" name="CouSearch">
        <input type="submit"><br>
<?php
    }
?>

<a href="?action=coa" name="coa">BSc CoE</a><br>
<?php

    if (isset($_GET['action']) && $_GET['action'] === 'coa') {
        echo "working 4<br>";
?>
        <input type="search" name="CouSearch">
        <input type="submit"><br>
<?php
    }
?>




<br>
<br>
<a href="home.php">Back</a>
