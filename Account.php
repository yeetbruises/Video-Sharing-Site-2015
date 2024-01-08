<?php 
	session_start();
	if(isset($_SESSION["Username"])){
	    echo "
			<a id='abvs' href='Homepage.php'><img align='left' src='http://images.cooltext.com/4572411.png' width='290' height='54' alt='' ></a>
    		<div align='center' id='NavContainer'>
        		<ul>
                	<p id='Checker'></p>
					<li><button style='color: white; width: 15%;'>
					<a>You are logged in as ", $_SESSION['ScreenN'], "</a>
				</button></li>
					<li><button>
					<a style='color: white;text-decoration:none;' href='Upload.php'>Upload</a>
				</button></li>
					<li><button>
					<a style='color: white;text-decoration:none;' href='Logout.php'>Logout</a>
				</button></li>
            	    <li><button align='right'><a href='Videos.php'>Videos</a></button></li>
        	        <li><button align='right'><a href='About.php'>About</a></button></li>
        	        <li><button align='right'><a href='Account.php'>Account</button></li>
        	    </ul>
				<li id='BorderBottom' class='BorderBottom'><button></button></li>
			</div>
			<div id= 'to' align = 'right' style = 'background-color: black; margin-top: 0px;'>

			</div>
			";	
	}else{
		echo "
			<a id='abvs' href='Homepage.php'><img align='left' src='http://images.cooltext.com/4572411.png' width='290' height='54' alt='' ></a>
    		<div align='center' id='NavContainer'>
        		<ul>
                	<p id='Checker'></p>
            	    <li><button align='right'><a href='Videos.php'>Videos</a></button></li>
        	        <li><button align='right'><a href='About.php'>About</a></button></li>
        	        <li><button id='Log' align='right'><a href='Login.php'>Login</a></button></li>
        	    </ul>
				<li id='BorderBottom' class='BorderBottom'><button></button></li>
			</div>
			<div id= 'to' align = 'right' style = 'background-color: black; margin-top: 0px;'>

			</div>
			";
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Epic Motor Rage</title>
        <link rel="stylesheet" type="text/css" href="NavBarStyleSheet.css">
	</head>
    <body background="">
        <div id="Bottom" style="height:90%;">
        	<div align="center" style="background-color:white; width:90%; margin-left:5%;">
            	<h1 style="color:black;">This is your account information</h1>
                <h5 style="color:black;">Your current information is listed below. You can make any change in the future.</h5>
          		<p id="UserN">Your username is <?php echo $_SESSION["Username"]; ?></p>
                <p id="UserN">Your password is <?php echo $_SESSION["Password"]; ?></p><a href="#Change.php"><input type="button" value="Change" id="login"></a>
                <p id="UserN">Your screenname is <?php echo $_SESSION["ScreenN"] ?></p>
                <p> The reason your password looks like that, is because it was quadruple MD5 encoded.</p>
            </div>
        </div>
	</body>
</html>