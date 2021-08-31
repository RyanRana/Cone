<html>
	<script>
		var showing ="none"
		function change(platform){
			if (showing != "none"){
				document.getElementById(showing).style.display="none"
			}
			document.getElementById(platform.toString()).style.display="block"
			document.getElementById(platform.toString()).style.marginLeftLeft="15px";
			showing = platform.toString()
			
		}
		
	</script>
	<title>Network</title>
	<meta name="viewport" content="width=500, initial-scale=1.0"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<body style="font-family: Helvetica, Arial, sans-serif;"> 
		<div id="container" style="min-height:40%">
			<div id="box1" >
				<h3>Just one step away from making networking easier.</h3>
				<form  method="post">
					<input name = "name" id="name" type="text" required placeholder="Name" />
					<input name = "pass" type="password" id="mailbox" required placeholder="Password" />
					<input name = "email" id="email" type="email" required placeholder="Email" />
					<input name = "phone" id="phone" type="tel" placeholder="Phone Number (Optional)" />
					<button type="button" onclick="change('facebook')" class="fa fa-facebook"></button>
					<button type="button" onclick="change('twitter')"class="fa fa-twitter"></button>
					<button type="button" onclick="change('linkedin')"class="fa fa-linkedin"></button>
					<button type="button" onclick="change('youtube')"class="fa fa-youtube-play"></button>
					<button type="button" onclick="change('instagram')" class="fa fa-instagram"></button>
					<button type="button" onclick="change('snapchat')"class="fa fa-snapchat-ghost"></button>
					<button type="button" onclick="change('github')" class="fa fa-github"></button>
					<button type="button" onclick="change('twitch')"class="fa fa-twitch"></button>
					<button type="button" onclick="change('slack')"class="fa fa-slack"></button>
					<button type="button" onclick="change('reddit')"class="fa fa-reddit"></button>
					<input style="display:none" name = "facebook" id="facebook" type="text" placeholder="Facebook Name (Optional)" />
					<input style="display:none" name = "twitter" id="twitter" type="text" placeholder="Twitter Tag (Optional)" />
					<input style="display:none" name = "instagram" id="instagram" type="text" placeholder="Instagram Tag (Optional)" />
					<input style="display:none" name = "snapchat" id="snapchat" type="text" placeholder="Snapchat Tag (Optional)" />
					<input style="display:none" name = "youtube" id="youtube" type="text" placeholder="Youtube Name (Optional)" />
					<input style="display:none" name = "linkedin" id="linkedin" type="text" placeholder="Linkden Name (Optional)" />
					<input style="display:none" name = "github" id="github" type="text" placeholder="Github Tag (Optional)" />
					<input style="display:none" name = "twitch" id="twitch" type="text" placeholder="Twitch Tag (Optional)" />
					<input style="display:none" name = "slack" id="slack" type="text" placeholder="Slack Tag (Optional)" />
					<input style="display:none" name = "reddit" id="reddit" type="text" placeholder="Reddit Tag (Optional)" />
					<input type="submit" name="submit" value="Sign up" />
				</form>
			</div>
			<div id="box2" >
				<p id="intro4">Already have account? Click <a href="intro.php">here</a>.</p>
			</div>
		</div>
	</body>
<style>
		body{
			background-color: ghostwhite;
		}
		#container{
			margin-top: 5%;
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
		input[type=text], input[type=email],input[type=password],input[type=tel]{
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
		#description{
		padding: 12px;
			font-family: sans-serif;
		  	border: 1px solid #ccc;
			border-radius: 4px;
		  	box-sizing: border-box;
			margin-top: 4px;
		  	margin-bottom: 4px;
		  	resize: vertical;
			background-color: ghostwhite;
			width: 100%;
		}
		.fa {
		  padding: 10px;
		  font-size: 30px;
		  width: 81.43px;
		  text-align: center;
		  text-decoration: none;
		  margin: 5px 4.5px;
		}
		.fa:hover {
			opacity: 0.7;
		}
		.fa-facebook {
		  background: #3B5998;
		  color: white;
		}
		.fa-twitter {
		  background: #55ACEE;
		  color: white;
		}
		.fa-linkedin {
		  background: #007bb5;
		  color: white;
		}
		.fa-youtube-play {
		  background: #bb0000;
		  color: white;
		}
		.fa-instagram {
			background: #f09433; 
			background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
			background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
			background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
			color: white;
		}
		.fa-snapchat-ghost {
		  background: #fffc00;
		  color: white;
		  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
		}
		.fa-github {
			  background: black;
			  color: white;

			}
		.fa-twitch {
			  background: #9147ff;
			  color: white;

			}
		.fa-slack {
			  background: #2eb57c;
			  color: white;

			}
		.fa-reddit {
			  background: #ff4602;
			  color: white;

			}
		button{
			border: 1px solid #ccc;
		}
	</style>
	<?php 
            if (isset($_POST["submit"])){
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$charactersLength = strlen($characters);
				$randomString = '';
				for ($i = 0; $i < 50; $i++){
					$randomString .= $characters[rand(0, $charactersLength - 1)];
				}
				$user_check_query = "SELECT * FROM users WHERE random='$randomString' LIMIT 1";
				$db = mysqli_connect('localhost', 'root', '', 'Connect');
			    $result = mysqli_query($db, $user_check_query);
			    $user = mysqli_fetch_assoc($result);
				if ($user) { 
				  	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
					$charactersLength = strlen($characters);
					$randomString = '';
					for ($i = 0; $i < 20; $i++) {
						$randomString .= $characters[rand(0, $charactersLength - 1)];
					}
			  	}
				
                $name = $_POST["name"];
                $pass = $_POST["pass"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $facebook = $_POST["facebook"];
                $twitter = $_POST["twitter"];
                $linkedin = $_POST["linkedin"];
                $youtube = $_POST["youtube"];
                $instagram = $_POST["instagram"];
                $snapchat= $_POST["snapchat"];
                $github = $_POST["github"];
                $twitch = $_POST["twitch"];
                $slack = $_POST["slack"];
                $reddit = $_POST["reddit"];
               
				$user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";
			    $result = mysqli_query($db, $user_check_query);
			    $user = mysqli_fetch_assoc($result);
				if ($user) { 
				  if ($user['name'] === $name) {
					echo "<script>alert('Username already exists')</script>";
					}	
					if ($user['email'] === $email) {
						echo "<script>alert('Email already exists')</script>";
					}
			  	}
			  	else{
					 $sql = "INSERT INTO users (random, name,pass,email,phone,facebook,twitter,linkedin,youtube,instagram,snapchat,github,twitch,slack,reddit) VALUES ('$randomString','$name','$pass','$email','$phone','$facebook','$twitter','$linkedin','$youtube','$instagram','$snapchat','$github','$twitch','$slack','$reddit') ";
					if (mysqli_query($db,$sql)){
						$URL="intro.php";
						echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
						echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
						exit();
					}  
            	}
			}
	
	
	?>
</html>
