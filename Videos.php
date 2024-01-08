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
		<title>Untitled Document</title>
		<link rel="stylesheet" type="text/css" href="NavBarStyleSheet.css">
        <link rel="stylesheet" type="text/css" href="VideoSearchCSS.css">
    </head>
	<body>
        <div align='center' id="VideoContainer">
        	<?php
				$con = mysqli_connect("localhost", "root", "", "eggslab");
				$query = $con->query("select * from video_table");
				while($row = mysqli_fetch_assoc($query)){
					$id = $row['id'];
					$name = $row['Name'];
					$title = $row['Title'];
					$desc = $row['Description'];
					echo "
						<div class='VideoInfoContainer' align='left'>	
							<a href='Watch.php?id=$id' style='font-family:arial;'>
								$title
							</a>
							<br><br>
							<b class='De' style='font-family:arial;'>$desc</b>
						</div>
						<br>
						";	
				}
			?>
        </div>
	</body>
</html>