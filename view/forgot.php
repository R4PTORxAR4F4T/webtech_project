<h1>Forgot password</h1>

<form action="" method="post">
    <label for="checkname">User name:</label>
    <input type="text" id="" name="checkname" required><br><br>

    <label for="checkemail">Email:</label>
    <input type="email" id="" name="checkemail" required><br><br>

    <label for="newpassword">Password:</label>
    <input type="password" id="" name="newpassword" required><br><br>

    <label for="confirmNewPassword">Confirm Password:</label>
    <input type="password" id="" name="confirmNewPassword" required><br><br>

    <input type="submit" name="submit" value="submit"> <br>
</form>

<br>
<a href="userLogin.php">SignIn</a>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the user inputs
  $checkname = $_POST['checkname'];
  $checkemail = $_POST['checkemail'];
  $newpassword = $_POST['newpassword'];
  $confirmNewPassword = $_POST['confirmNewPassword'];

  $file = fopen('../data/userAccInfo.txt', 'r');
  while (!feof($file)) {
    $line = fgets($file);
    $parts = explode(':', $line);
    if ($parts[0] == $checkname && $parts[1] == $checkemail) {
        if ($newpassword == $confirmNewPassword) {
            $data = $checkname . ':' . $checkemail . ':' . $newpassword . ':' . $confirmNewPassword . "\n";
            $contents = file_get_contents('../data/userAccInfo.txt');
            $contents = str_replace($line, $data, $contents);
            file_put_contents('../data/userAccInfo.txt', $contents);
            echo 'Password updated successfully.';
        }
        else {
            echo 'Passwords do not match.';
        }
        break;
    }
 }
    fclose($file);
}
?>