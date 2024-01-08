<?php
	include ("db.php");	

	$msg = "";
	if(isset($_POST["submit"]))
	{
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = md5($_POST["password"]);
		$screenname = $_POST["screenname"];
		$secretcode = $_POST["secretcode"];
		if (strlen($password) >= 6) {
			$password = md5($password);
			$password = md5($password);
			
			$username = mysqli_real_escape_string($db, $username);
			$email = mysqli_real_escape_string($db, $email);
			$password = mysqli_real_escape_string($db, $password);
			$screenname = mysqli_real_escape_string($db, $screenname);
			$secretcode = mysqli_real_escape_string($db, $secretcode);
			$query = mysqli_query($db, "INSERT INTO users (username, email, password, screenname, secretcode)VALUES ('$username', '$email', '$password', '$screenname', '$secretcode')");
			if($query)
			{
				$msg = "Thank You! you are now registered. Login now.";
				header("Location: login.php");
			}
		}
		else if(strlen($password) < 6)
		{
			$msg = "Your password must have at least 6 characters. Too short.";
		}	
	}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up</title>
        <style>
			#container {
				margin-top: 10%;
				}
			input[type='text'], input[type='password'], input[type='email']{
				width: 20%;
				height: 15px;
				background: rgba(0,0,0,0.6);
				border: none;
				outline: none;
				padding: 10px;
				font-size: 13px;
				color: #fff;
				text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
				border: 1px solid rgba(0,0,0,0.3);
				border-radius: 4px;
				box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
				-webkit-transition: box-shadow .5s ease;
				-moz-transition: box-shadow .5s ease;
				-o-transition: box-shadow .5s ease;
				-ms-transition: box-shadow .5s ease;
				transition: box-shadow .5s ease;
				}
			input[type='submit'] {
				background: rgba(0,0,0,0.6);
				border: none;
				outline: none;
				padding: 10px;
				font-size: 13px;
				color: #fff;
				text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
				border: 1px solid rgba(0,0,0,0.3);
				border-radius: 4px;
				box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
				-webkit-transition: box-shadow .5s ease;
				-moz-transition: box-shadow .5s ease;
				-o-transition: box-shadow .5s ease;
				-ms-transition: box-shadow .5s ease;
				transition: box-shadow .5s ease;
				}
			body {
				background: rgba(44,44,44,1);
                background: -moz-linear-gradient(to right, rgba(44,44,44,1) 0%, rgba(44,44,44,1) 2%, rgba(0,0,0,1) 51%, rgba(43,43,43,1) 76%, rgba(28,28,28,1) 91%, rgba(17,17,17,1) 96%, rgba(19,19,19,1) 100%);
                background: -webkit-linear-gradient(to right, rgba(44,44,44,1) 0%, rgba(44,44,44,1) 2%, rgba(0,0,0,1) 51%, rgba(43,43,43,1) 76%, rgba(28,28,28,1) 91%, rgba(17,17,17,1) 96%, rgba(19,19,19,1) 100%);
                background: -webkit-gradient(linear, 100% 0, 0 0, from(rgba(44,44,44,1)), color-stop(0.02, rgba(44,44,44,1)), color-stop(0.51, rgba(0,0,0,1)), color-stop(0.76, rgba(43,43,43,1)), color-stop(0.91, rgba(28,28,28,1)), color-stop(0.96, rgba(17,17,17,1)), to(rgba(19,19,19,1)));
                background: -o-linear-gradient(to right, rgba(44,44,44,1) 0%, rgba(44,44,44,1) 2%, rgba(0,0,0,1) 51%, rgba(43,43,43,1) 76%, rgba(28,28,28,1) 91%, rgba(17,17,17,1) 96%, rgba(19,19,19,1) 100%);
                background: linear-gradient(to right, rgba(44,44,44,1) 0%, rgba(44,44,44,1) 2%, rgba(0,0,0,1) 51%, rgba(43,43,43,1) 76%, rgba(28,28,28,1) 91%, rgba(17,17,17,1) 96%, rgba(19,19,19,1) 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2c2c2c', endColorstr='#131313', GradientType=1 );
				}
			h1 { 
				color: white;
				font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
				}
			input[type='submit']:active {
				background: rgba(76,76,76,1);
                background: -moz-linear-gradient(left, rgba(76,76,76,1) 0%, rgba(43,43,43,1) 0%, rgba(43,43,43,1) 9%, rgba(102,102,102,1) 52%, rgba(28,28,28,1) 91%, rgba(19,19,19,1) 100%);
                background: -webkit-linear-gradient(left, rgba(76,76,76,1) 0%, rgba(43,43,43,1) 0%, rgba(43,43,43,1) 9%, rgba(102,102,102,1) 52%, rgba(28,28,28,1) 91%, rgba(19,19,19,1) 100%);
                background: -webkit-gradient(linear, 0 0, 100% 0, from(rgba(76,76,76,1)), color-stop(0, rgba(43,43,43,1)), color-stop(0.09, rgba(43,43,43,1)), color-stop(0.52, rgba(102,102,102,1)), color-stop(0.91, rgba(28,28,28,1)), to(rgba(19,19,19,1)));
                background: -o-linear-gradient(left, rgba(76,76,76,1) 0%, rgba(43,43,43,1) 0%, rgba(43,43,43,1) 9%, rgba(102,102,102,1) 52%, rgba(28,28,28,1) 91%, rgba(19,19,19,1) 100%);
                background: linear-gradient(left, rgba(76,76,76,1) 0%, rgba(43,43,43,1) 0%, rgba(43,43,43,1) 9%, rgba(102,102,102,1) 52%, rgba(28,28,28,1) 91%, rgba(19,19,19,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313', GradientType=1 );
				}
		</style>
	</head>
	<body>
    	<div id="container" align="center">
        	<h1>Sign Up</h1>
    		<form autocomplete="on" method="post" action="" enctype="application/x-www-form-urlencoded">
				<input placeholder="Username" name="username" type="text" required />
        		<br><br>
        	    <input placeholder="Password" name="password" type="password" required />
        		<br><br>
        	    <input placeholder="Screen Name" name="screenname" type="text" required />
        		<br><br>
        	    <input placeholder="Secret Code" name="secretcode" type="password" required />
        		<br><br>
        	    <input placeholder="Email" name="email" type="email" required />
        		<br><br>
        	    <input type="submit" value="Submit" name="submit">
        	</form>
        </div>
	</body>
</html>