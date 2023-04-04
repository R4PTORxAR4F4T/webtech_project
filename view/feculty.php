<a href="home.php">back</a>
<br>
<br>
<a href="?action=add" name="add">Adding </a>
<a href="?action=remove" name="remove">Remove</a>
<br><br>

<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'webtechproject');

$sql = "select * from facultyinfo";
$result = mysqli_query($con, $sql);
// print_r($result);

if (isset($_GET['action']) && $_GET['action'] === 'add'){
    echo("adding");
}

if (isset($_GET['action']) && $_GET['action'] === 'remove'){
    echo("removing");
}

while($row = mysqli_fetch_assoc($result)){
    // print_r($row['name']);
    
    $name = $row['name'];
    $subject = $row['subject'];
    $room = $row['room'];
    $email = $row['email'];
    $mobile = $row['mobile'];

    echo"<table border=1>
                <tr>
                    <td colspan=2>PROFILE IMAGE</td>
                </tr>
                <tr>
                    <td colspan=2>PROFILE IMAGE</td>
                </tr>
                <tr>
                    <td>NAME</td>
                    <td>$name</td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td>$subject</td>
                </tr>
                <tr>
                    <td>Room</td>
                    <td>$room</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td>$mobile</td>
                </tr>
            </table>";
        echo"<br>";
}

// $file = file('../data/fecultyInfo.txt');

// foreach($file as $line) {
//     $parts = explode(':', $line);

// }
?>
