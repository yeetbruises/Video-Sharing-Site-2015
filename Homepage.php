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
        <style>
			#gh {
				position: absolute;
   				top: 23%;
				left: 55%;
				padding-top: 10%;
				}	
			#rg {
				position: absolute;
   				top: 36%;
				left: 55%;
				padding-top: 10%;
				}
			#erer {
				position: absolute;
   				top: 70%;
				left: 55%;
				}
		</style>
	</head>
    <body background="">
    	<div class="NavBar">
    		
        </div>
        <div id="intro">
        	<a id="gh" href="http://cooltext.com"><img src="http://images.cooltext.com/4573598.png" width="412" height="60" alt="Epic Motor   RAGE" /></a>
            <a id="rg" href="http://cooltext.com"><img src="http://images.cooltext.com/4573605.png" width="370" height="43" alt="It's like youtube, except we only show dirtbike,  motorcycle, atv, and bike road rage." /></a>
            <li id="erer"><button align="right"><a style="color: white; text-decoration: none;" href="Videos.php">Videos</a></button></li>
        </div>
	</body>
</html>