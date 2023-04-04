<h1>Drop Course</h1>
<br>
<a href="?action=dropapp" name="dropapp">Drop Application</a>
<br>

<?php
    $file = file('../data/userProfile.txt');
        foreach($file as $line) {
            $parts = explode(':', $line);
            $name = trim($parts[0]);
        }
    

    if (isset($_GET['action']) && $_GET['action'] === 'dropapp') {
?>
    <form method="post" action="dropCheck.php">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>
        
        <label for="subject">Subject :</label>
        <input type="text" id="subject" name="subject" required><br><br>
        
        <label for="section">Section :</label>
        <input type="text" id="section" name="section" required><br><br>
        
        <label for="option">CRADIT :</label>
        <select id="option" name="option" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br><br>
        
        <label for="instractor">Instractor:</label>
        <input type="text" id="instractor" name="instractor" required><br><br>
        
        <input type="submit" value="Submit">
        </form>
<?php
    }
?>

<a href="?action=dropInfo" name="dropInfo">Drop Info</a><br>

<?php

    if (isset($_GET['action']) && $_GET['action'] === 'dropInfo') {
        echo "<br>";


        $file = fopen('../data/dropInfo.txt', 'r');
        // $data = fread($file, filesize('../data/dropInfo.txt'));    
        // echo $data;
        // fclose($file);

        while(!feof($file)){
            $data = fgets($file);
            echo $data; 
            echo"<br>";
        }
        fclose($file);
        
        if($name == "admin"){
?>
        <form method="post" action="">
        <label for="requestNo">Request No:</label>
        <input type="text" id="requestNo" name="requestNo"><br><br>
        
        <label for="statusUp">Status Update :</label>
        <input type="text" id="statusUp" name="statusUp"><br><br>

        <input type="submit" value="update">
        </form>
<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $requestNo = $_POST['requestNo']; 
            $statusUp = $_POST['statusUp'];  

            $file = fopen('../data/dropInfo.txt', 'r'); 
            $current_line = 0; // Initialize current line

            while (!feof($file)) {
            $current_line++;
            $line = fgets($file); // Get current line
            if ($current_line == $requestNo){
                
                $parts = explode(' ', $line);
                
                $date = $parts[0];
                $subject = $parts[1];
                $section = $parts[2];
                $cradit = $parts[3];
                $instractor = $parts[4];
                $status = $statusUp;

                $data = file("../data/dropInfo.txt");
                $data[$requestNo-1] = "$date $subject $section $cradit $instractor status:$status"."\r\n";
                file_put_contents("../data/dropInfo.txt", implode("", $data));

                header('location: dropCou.php');
                // echo $parts[5]; // Output the line


                break; 
            }
            }
            fclose($file); 

        }

        }
    }

?>
<br>
<br>
<a href="home.php">Back</a>

<?php

      
?>