<html>
<title>CourseCheck</title>
<link rel="icon" href="icon.png">
<meta name="viewport" content="width=500, initial-scale=1.0"> 	
	<body style="font-family: Helvetica, Arial, sans-serif;"> 
		<div id="container" style="min-height:40%">
		<div id="box1" >
			<br>
			<img width="95%" id="headerphoto" src="Header.png">
			<br><br>
			<form  method="post">
				<input name = "email" id="email" type="email" placeholder="Email" />
				<input name = "pass" type="password" id="mailbox" placeholder="Password" />
				<input type="submit" name="logger" class="button2" value="Login" />
			</form>
		</div>
		<div id="box2" >
	<p id="intro4">Click <a href="index.php">here</a> to create a new account. It takes only a minute.</p>
		</div>
		<div id="box3" >
	<p>Production by Ryan Rana</p>
		</div>
		</div>
	</body>
<style>
	#container{
		margin-top: 10%;
	}
		body{
			background-color: ghostwhite;
		}
		#box1{
			background-color: white;
			margin-top:0;
			width: 33%;
			padding: 10px;
			margin-right:33%;
			margin-bottom:10px;
			margin-left:33%;
			text-align: center;
			border: 1px solid #e2e2e2;
		}
		#box2{
			background-color: white;
			margin-top:0;
			width: 33%;
			padding: 10px;
			margin-right:33%;
			margin-bottom:10px;
			margin-left:33%;
			text-align: center;
			border: 1px solid #e2e2e2;
		}
		#box3{
			background-color: white;
			margin-top:0;
			width: 33%;
			padding: 10px;
			margin-right:33%;
			margin-bottom:10px;
			margin-left:33%;
			text-align: center;
			border: 1px solid #e2e2e2;
		}
		input[type=text], input[type=email],input[type=password]{
		  	width: 100%;
		  	padding: 12px;
		  	border: 1px solid #ccc;
			border-radius: 4px;
		  	box-sizing: border-box;
			margin-top: 4px;
		  	margin-bottom: 4px;
		  	resize: vertical;
			background-color: ghostwhite;
		}
		input[type=submit]{
			background-color: #0095f6;
			color: white;
			width: 100%;
		  	padding: 12px;
			border: none;
		  	border-radius: 4px;
		  	box-sizing: border-box;
			margin-top: 4px;
		  	margin-bottom: 4px;
		  	resize: vertical;
		}
		
	</style>
	<?php
           
            if (isset($_POST["logger"])){
				$link = mysqli_connect("localhost", "root", "", "Connect");
				$email= $_POST["email"];
                $pass = $_POST["pass"];
				// Attempt select query execution
				$sql = "SELECT * FROM users";
				if($result = mysqli_query($link, $sql)){
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_array($result)){
							if ($email == $row['email']){
								if ($pass == $row['pass']){
									echo "<p> Sucess!</p>";
									
								$id = $row['random'];
								$_SESSION['id'] = $id;
								header('Location: home.php?id='.$id);
								}
								else{
									echo "<script>var x = document.getElementById('errortext').display='block';</script>";
								}
							}
							else{
								echo "<script>var x = document.getElementById('errortext').display='block';</script>";
							}
						}
				 	}
				}
			}			
    ?>
</html>
