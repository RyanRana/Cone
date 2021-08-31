<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<html>
	<style>
	#content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
}
form{
    width: 50%;
    margin: 20px auto;
}
form div{
    margin-top: 5px;
}
#img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
}
#img_div:after{
    content: "";
    display: block;
    clear: both;
}
img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
}
	</style>
	<script type="text/javascript" src="jquery.min.js"></script>
	<title>CourseCheck</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
		$id = $_GET["id"];
		$link = mysqli_connect("localhost", "root", "", "Connect");
		$sql = "SELECT * FROM users WHERE random = '$id'";
		$result = mysqli_query($link,$sql)or die( mysqli_error($link));
		$personal = mysqli_fetch_row($result);
		echo "<div class='show' id='full'>
			<button id='back' style='width:100%' onclick='back()'>Back</button>
			<p>
			<span>
			<form  style='display:block' id='nameform' method='POST' enctype='multipart/form-data'>
			<label for='name' class='width'>Name</label>
			<input type='text' style='display:inline-block' id='name' placeholder='$personal[2]' name='name'>
			<input name='namesubmit'  id='namesub' type='submit' value='Submit'></form>
			</span>
			<span>
			<form  style='display:block' id='emailform' method='POST' enctype='multipart/form-data'>
			<label for='email' class='width'>Email</label>
			<input type='text' id='email' style='display:inline-block' placeholder='$personal[4]' name='email'>
			<input name='emailsubmit'  id='emailsub' type='submit' value='Submit'></form>
			</span>
			<span>
			<form  style='display:block' id='phoneform' method='POST' enctype='multipart/form-data'>
			<label id='phonelabel' for='phone' class='width'>Phone</label>
			<input type='text' id='phone' style='display:inline-block' placeholder='$personal[5]' name='phone'>
			<input name='phonesubmit'  id='phonesub' type='submit' value='Submit'></form>
			</span>
			</p>
			<table id='tableid'>
				<tr><td><p class='fa fa-facebook'></p></td><td>
					<form  id='facebookform' method='POST' enctype='multipart/form-data'>
					<input type='text' placeholder='$personal[6]' name='facebook'>
					<input name='facebooksubmit' type='submit' value='Submit'>
					</form>
				</td></tr>
				<tr><td ><p class='fa fa-twitter'></p></td><td >
					<form  id='twitterform' method='POST' enctype='multipart/form-data'>
					<input type='text' placeholder='$personal[7]' name='twitter'>
					<input name='twittersubmit' type='submit' value='Submit'>
					</form>
				</td></tr>
				<tr><td ><p class='fa fa-linkedin'></p></td><td >
					<form  id='linkedinform' method='POST' enctype='multipart/form-data'>
					<input type='text' placeholder='$personal[8]' name='linkedin'>
					<input name='linkedinsubmit' type='submit' value='Submit'>
					</form>
				</td></tr>
				<tr><td ><p class='fa fa-youtube-play'></p></td><td >
				<form  id='youtubeform' method='POST' enctype='multipart/form-data'>
					<input type='text' placeholder='$personal[9]' name='youtube'>
					<input name='youtubesubmit' type='submit' value='Submit'>
					</form>
				</td></tr>
				<tr><td ><p class='fa fa-instagram'></p></td><td>
				<form  id='instagramform' method='POST' enctype='multipart/form-data'>
					<input type='text' placeholder='$personal[10]' name='instagram'>
					<input name='instagramsubmit' type='submit' value='Submit'>
					</form>
				</td></tr>
				<tr><td ><p class='fa fa-snapchat-ghost'></p></td><td >
				<form  id='snapchatform' method='POST' enctype='multipart/form-data'>
					<input type='text' placeholder='$personal[11]' name='snapchat'>
					<input name='snapchatsubmit' type='submit' value='Submit'>
					</form>
				</td></tr>
				<tr><td ><p class='fa fa-github'></p></td><td >
				<form  id='githubform' method='POST' enctype='multipart/form-data'>
					<input type='text' placeholder='$personal[12]' name='github'>
					<input name='githubsubmit' type='submit' value='Submit'>
					</form>
				</td></tr>
				<tr><td ><p class='fa fa-twitch'></p></td><td >
				<form  id='twitchform' method='POST' enctype='multipart/form-data'>
					<input type='text' placeholder='$personal[13]' name='twitch'>
					<input name='twitchsubmit' type='submit' value='Submit'>
					</form>
				</td></tr>
				<tr><td ><p class='fa fa-slack'></p></td><td >
					<form  id='slackform' method='POST' enctype='multipart/form-data'>
					<input type='text' placeholder='$personal[14]' name='slack'>
					<input name='slacksubmit' type='submit' value='Submit'>
					</form>
				</td></tr>
				<tr><td ><p class='fa fa-reddit'></p></td><td >
					<form  id='redditform' method='POST' enctype='multipart/form-data'>
					<input type='text' placeholder='$personal[15]' name='reddit'>
					<input name='redditsubmit' type='submit' value='Submit'>
					</form>
				</td></tr>
			</table>
		</div>";
	if (isset($_POST["namesubmit"])){
				$nametext= $_POST["name"];
			    $sql = "UPDATE users set name='" . $_POST['name'] . "' WHERE random='" . $id . "'";
		$thing = $_POST['name'];
                if (mysqli_query($link,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
					echo "<script>
			document.getElementsByName('name')[0].placeholder='$thing'
			</script>";
                }
            }
	if (isset($_POST["emailsubmit"])){
		$emailtext= $_POST["email"];
		$sql = "UPDATE users set email='" . $_POST['email'] . "' WHERE random='" . $id . "'";
		$thing = $_POST['email'];
        if (mysqli_query($link,$sql)){
          echo'<script>alert("Your edit has went through succesfully")</script>';
			echo "<script>
			document.getElementsByName('email')[0].placeholder='$thing'
			</script>";
        }
    }
	if (isset($_POST["phonesubmit"])){
		$sql = "UPDATE users set phone='" . $_POST['phone'] . "' WHERE random='" . $id . "'";
		$thing = $_POST['phone'];
        if (mysqli_query($link,$sql)){
          echo'<script>alert("Your edit has went through succesfully")</script>';
			echo "<script>
			document.getElementsByName('phone')[0].placeholder='$thing'
			</script>";
        }
    }
	if (isset($_POST["facebooksubmit"])){
		$sql = "UPDATE users set facebook='" . $_POST['facebook'] . "' WHERE random='" . $id . "'";
		$thing = $_POST['facebook'];
        if (mysqli_query($link,$sql)){
          echo'<script>alert("Your edit has went through succesfully")</script>';
			echo "<script>
			document.getElementsByName('facebook')[0].placeholder='$thing'
			</script>";
        }
    }
	if (isset($_POST["twittersubmit"])){
		$sql = "UPDATE users set twitter='" . $_POST['twitter'] . "' WHERE random='" . $id . "'";
		$thing = $_POST['twitter'];
        if (mysqli_query($link,$sql)){
          echo'<script>alert("Your edit has went through succesfully")</script>';
			echo "<script>
			document.getElementsByName('twitter')[0].placeholder='$thing'
			</script>";
        }
    }
	if (isset($_POST["linkedinsubmit"])){
		$sql = "UPDATE users set linkedin='" . $_POST['linkedin'] . "' WHERE random='" . $id . "'";
		$thing = $_POST['linkedin'];
        if (mysqli_query($link,$sql)){
          echo'<script>alert("Your edit has went through succesfully")</script>';
			echo "<script>
			document.getElementsByName('linkedin')[0].placeholder='$thing'
			</script>";
        }
    }
	if (isset($_POST["youtubesubmit"])){
		$sql = "UPDATE users set youtube='" . $_POST['youtube'] . "' WHERE random='" . $id . "'";
		$thing = $_POST['youtube'];
        if (mysqli_query($link,$sql)){
          echo'<script>alert("Your edit has went through succesfully")</script>';
			echo "<script>
			document.getElementsByName('youtube')[0].placeholder='$thing'
			</script>";
        }
    }
	if (isset($_POST["instagramsubmit"])){
		$sql = "UPDATE users set instagram='" . $_POST['instagram'] . "' WHERE random='" . $id . "'";
		$thing = $_POST['instagram'];
        if (mysqli_query($link,$sql)){
          echo'<script>alert("Your edit has went through succesfully")</script>';
			echo "<script>
			document.getElementsByName('instagram')[0].placeholder='$thing'
			</script>";
        }
    }
	if (isset($_POST["snapchatsubmit"])){
		$sql = "UPDATE users set snapchat='" . $_POST['snapchat'] . "' WHERE random='" . $id . "'";
		$thing = $_POST['snapchat'];
        if (mysqli_query($link,$sql)){
          echo'<script>alert("Your edit has went through succesfully")</script>';
			echo "<script>
			document.getElementsByName('snapchat')[0].placeholder='$thing'
			</script>";
        }
    }
	if (isset($_POST["githubsubmit"])){
		$sql = "UPDATE users set github='" . $_POST['github'] . "' WHERE random='" . $id . "'";
		$thing = $_POST['github'];
        if (mysqli_query($link,$sql)){
          echo'<script>alert("Your edit has went through succesfully")</script>';
			echo "<script>
			document.getElementsByName('github')[0].placeholder='$thing'
			</script>";
        }
		
    }
	if (isset($_POST["twitchsubmit"])){
		$sql = "UPDATE users set twitch='" . $_POST['twitch'] . "' WHERE random='" . $id . "'";
		$thing = $_POST['twitch'];
        if (mysqli_query($link,$sql)){
          echo'<script>alert("Your edit has went through succesfully")</script>';
			echo "<script>
			document.getElementsByName('twitch')[0].placeholder='$thing'
			</script>";
        }
    }
	if (isset($_POST["slacksubmit"])){
		$sql = "UPDATE users set slack='" . $_POST['slack'] . "' WHERE random='" . $id . "'";
		$thing = $_POST['slack'];
        if (mysqli_query($link,$sql)){
          echo'<script>alert("Your edit has went through succesfully")</script>';
			echo "<script>
			document.getElementsByName('slack')[0].placeholder='$thing'
			</script>";
        }
    }
	if (isset($_POST["redditsubmit"])){
		$sql = "UPDATE users set reddit='" . $_POST['reddit'] . "' WHERE random='" . $id . "'";
		$thing = $_POST['reddit'];
        if (mysqli_query($link,$sql)){
          echo'<script>alert("Your edit has went through succesfully")</script>';
			echo "<script>
			document.getElementsByName('reddit')[0].placeholder='$thing'
			</script>";
        }
    }
	
	
	
	
	
	
	
	
	
	
	
    ?>
	<style>
		body{
			background-color: ghostwhite;
		}
		#container{
			margin-top: 5%;
		}
		#full{
			background-color: white;
			margin-top:0;
			width: 33%;
			padding: 10px;
			margin-right:33%;
			margin-bottom:10px;
			margin-left:33%;
			text-align: center;
			border: 1px solid #e2e2e2;
			font-family: sans-serif;
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
		  	width: 70%;
		  	padding: 9px;
		  	border: 1px solid #ccc;
			border-radius: 4px;
		  	box-sizing: border-box;
			margin-top: 4px;
		  
		  	resize: vertical;
			background-color: ghostwhite;
			font-size: 15px;
		}
		button{
			background-color: #0095f6;
			color: white;
			width: 70%;
		  	padding: 12px;
			border: none;
		  	border-radius: 4px;
		  	box-sizing: border-box;
			margin-top: 4px;
		  	margin-bottom: 0px;
		  	resize: vertical;
		}
		input[type=submit]{
			background-color: #93c22e;
			color: white;
			width: 28%;
		  	padding: 12px;
			border: none;
		  	border-radius: 4px;
		  	box-sizing: border-box;
			margin-top: 4px;
	
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
		  
		  font-size: 20px;
		  width: 20px;
		  text-align: center;
		  text-decoration: none;
		  margin: 5px 4.5px;
			padding: 8px;
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
			  color: white
			}	
		button:hover {
		  opacity: 70%
		}
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}
		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		td:nth-child(1) {  
		  width: 23px;
		}
		#phone,#email,#name{
			width: 46%;
			margin-right: 3%;
			margin-bottom: 8px;
		}
		#phonesub,#emailsub,#namesub{
			width: 23%;
			
		}
		.width{
			width: 16%;
			float: left;
			padding: 12px;
		
			
		}
		#phonesub,#phone{
		
			margin-bottom: 0px;
		}
		#phonelabel{
			padding-bottom: 0px;
		}
	</style>
	<script type="text/javascript">
		function back(){
			var link = "home.php?id="+"<?php echo $personal[1];?>"
			window.location.replace(link);
		}
</script>
<style>
	#qrcode{width: 100%;height: 100%}
</style>
</html>