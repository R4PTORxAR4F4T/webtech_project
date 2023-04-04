<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login Portal</title>
<?php                 
                



if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	
} else {
	setcookie("username","");
	setcookie("password","");
	
}

?>

</head>
<body>
 
<h2>Login Portal</h2>

<form action="logincheck.php" method="post">
	<p>
		Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" class="input-field">
	</p>
		 <p>Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field">
	</p>
		<p><input type="checkbox" name="remember" /> Remember me
	</p>
		<input type="submit" name="login" value="submit"><br>
		<a href="creatAcc.php"> creat accoutn ? </a><br>
		<a href="forgot.php"> forgot password !! </a>
</form>

    <br><br>
	<a href=""> Back </a>
  
</div>


</body>
</html>
