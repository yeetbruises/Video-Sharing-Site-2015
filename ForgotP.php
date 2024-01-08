<?php
	$con = mysqli_connect("localhost", "root", "", "eggslab");
	if(isset($_POST['Submit'])){
		$errorMSG = "";
		$UN = $_POST['SecretCode'];
		$result = $con->query("select * from users where secretcode='$UN'");
		$row = $result->fetch_array(MYSQLI_BOTH);
		$count=mysqli_num_rows($result);
		if($count==1){
			session_start();
			$_SESSION["Username"] = $row['username']; 
			$_SESSION["Password"] = $row['password']; 
			
			header('Location: Homepage.php');
		}else{
			
		}
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
        <style>
			#LoginContainer {
				margin-top: 15%;
				}
			h1, p {
				font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
				color: white;
				}
			input[type='text'], input[type='password'] {
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
			input[type='submit'], input[type='button'] {
				width: auto;
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
			#Bottom {
				background-color: red;
				height: 30%;
				width: 50px;
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
			input[type='button']:active {
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
    	<div align="center" id="LoginContainer">
			<form method="post" action="" autocomplete="on" enctype="application/x-www-form-urlencoded">
        		<h1>Forgot Password</h1>
            	<input type="password" placeholder="Secret code" name="SecretCode" required />
            	<br><br>
            	<input type="submit" name="Submit" value="Submit">
                <br><br>
                <p>No account? <a href="Register.php">Click here to register an account!</a></p>
        	</form>
            <br>
        </div>
	</body>
</html>
