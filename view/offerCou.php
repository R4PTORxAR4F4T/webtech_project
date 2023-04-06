<h1>Offered Course</h1>
<p>Departments</p>

<a href="?action=cse" name="cse">BSc CSE</a><br>
<?php

    if (isset($_GET['action']) && $_GET['action'] === 'cse'){
        // echo "working 1<br>";
?>
    <input type="search" name="CouSearch">
    <input type="submit"><br>
<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtechproject');
    $sql = "select * from semester";
    $result = mysqli_query($con, $sql);

    echo"<table border=1>";
    while($row = mysqli_fetch_assoc($result)){
        $code = $row['code'];
        $name = $row['name'];
        $credit_lec = $row['credit_lec'];
        $credit_sci = $row['credit_sci'];
        $credit_comp = $row['credit_comp'];
        $credit_lan = $row['credit_lan'];
        $credit_stu = $row['credit_stu'];
        $prerequisite = $row['prerequisite'];

        echo "<tr>
            <td> $code</td>
            <td> $name</td>
            <td> $credit_lec</td>
            <td> $credit_sci</td>
            <td> $credit_comp</td>
            <td> $credit_lan</td>
            <td> $credit_stu</td>
            <td> $prerequisite</td>
            
        </tr>";
        }
    echo"</table>";

    // $file = fopen('../data/cseCourse.txt', 'r');
    // // $data = fread($file, filesize('../data/cseCourse.txt'));  
    // // $data = fgets($file);  
    // // echo $data;
    // while(!feof($file)){
    //     $data = fgets($file);
    //     echo $data;
    //     echo"<br>";
    // }

    // fclose($file);
    // echo"<br>";
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
