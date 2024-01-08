<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	echo shell_exec("ffmpeg -version");


	$con = mysqli_connect("localhost", "root", "", "eggslab");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = $con->query("select * from video_table where id='$id'");
		while($row = mysqli_fetch_assoc($query)){	
			$name = $row['Name'];
			$url = $row['url'];
			$title = $row['Title'];
			$des = $row['Description'];
			echo "<h1>You are watching ".$title."</h1><br>";
			echo "<video width='900' height='550' control>
					<source src='$url' type='video/mp4'>
				  </video>
				  <br>";
			echo $des;	
		}
	}else{
		echo "Error";	
	}
?>

</body>
</html>