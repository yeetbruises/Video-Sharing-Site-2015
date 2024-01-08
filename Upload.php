<?php 
	echo "
			<a id='abvs' href='Homepage.php'><img align='left' src='http://images.cooltext.com/4572411.png' width='290' height='54' alt='' ></a>";



	$con = mysqli_connect("localhost", "root", "", "eggslab");
	if(isset($_POST['submit'])){
		
		$name = $_FILES['video']['name'];
		$temp = $_FILES['video']['tmp_name'];
		$title = $_POST['Title'];
		$description = $_POST['Description'];
		$thumbnail = $_POST['thumbnail'];
		
		move_uploaded_file($temp, "uploaded/".$name);
		$url = "http://localhost/uploaded/$name";
		mysqli_query($con, "INSERT INTO video_table (Title, Description, Name, tmpN, url) VALUES ('$title','$description','$name','$temp', '$url')");
		header("location: reviewMSG.php");
	}else{
		//stuff
	}
?>
<!doctype html>
<html>
	<head>
    	<style>
			textarea {
				resize:none;
				width: 20%;
				height: 90px;
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
			input[type='text']{
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
			form {
				padding-top: 10%;
				}
		</style>
    </head>
    <body>
        <form action="Upload.php" method="POST" enctype="multipart/form-data">
        	<div id="UploadVid" align="center">
            	<h1 style="color:white;font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Upload</h1>
                <h4 style="color:white;font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Video</h4>
				<input style="color:white;" type="file" name="video" />
                <h4 style="color:white;font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Thumbnail</h4>
				<input style="color:white;" type="file" name="image" />
            	<br><br><input placeholder="Title" name="Title" type="text">
            	<br><br><textarea style="resize: none;" placeholder="Description" name="Description"></textarea>
				<br><input type="submit" name="submit"/>
            </div>
		</form>
        <br><div align="center"><a style="font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;color:white;text-decoration:none;" href="Videos.php">Videos</a></div>
        <?php
			if(isset($_POST['submit'])){
				echo "The file ", $name, "has been uploaded sucsessfully.";
			}else{
				
			}
		?>
	</body>
</html>