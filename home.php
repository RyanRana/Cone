<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<html>
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
			<h1 id='namedisplay'>$personal[2]</h1>
			<p id='emaildisplay'>Contact at: $personal[4] or $personal[5]</p>
			<button onclick='logout()'>Log Out</button>
			<button onclick='edit()'>Edit Contents</button>
			<button onclick='copy()' onmouseout='outFunc()'>Share Link</button>
			<table id='tableid'>
				<tr><td><p class='fa fa-facebook'></p></td><td >$personal[6]</td></tr>
				<tr><td ><p class='fa fa-twitter'></p></td><td >$personal[7]</td></tr>
				<tr><td ><p class='fa fa-linkedin'></p></td><td >$personal[8]</td></tr>
				<tr><td ><p class='fa fa-youtube-play'></p></td><td >$personal[9]</td></tr>
				<tr><td ><p class='fa fa-instagram'></p></td><td >$personal[10]</td></tr>
				<tr><td ><p class='fa fa-snapchat-ghost'></p></td><td >$personal[11]</td></tr>
				<tr><td ><p class='fa fa-github'></p></td><td >$personal[12]</td></tr>
				<tr><td ><p class='fa fa-twitch'></p></td><td >$personal[13]</td></tr>
				<tr><td ><p class='fa fa-slack'></p></td><td >$personal[14]</td></tr>
				<tr><td ><p class='fa fa-reddit'></p></td><td >$personal[15]</td></tr>
			</table>
			<div id='qrcode' style='margin-top:15px;margin-left,margin-right:10%'></div>
		</div>";
	
	
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
		button{
			background-color: #0095f6;
			color: white;
			width: 32.5%;
		  	padding: 12px;
			border: none;
		  	border-radius: 4px;
		  	box-sizing: border-box;
			margin-top: 4px;
		  	margin-bottom: 19px;
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
			  color: white;

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
	</style>
	<script type="text/javascript" src="qrcode.js"></script>
	<script type="text/javascript">
		var size = document.getElementById("full").offsetWidth-22;
		var qrcode = new QRCode(document.getElementById("qrcode"), {
			width : size,
			height : size
		});
		function makeCode () {		
			var elText = "<?php  echo $personal[2] ?>"
			elText = elText.replace(/ /g, "%");
			'user.php?name='+elText
			var site = ('user.php?name='+elText).toString()
			qrcode.makeCode(site);
		}
		makeCode();
		$("#text").
		on("blur", function () {
				makeCode();
			}).
		on("keydown", function (e) {
				if (e.keyCode == 13) {
					makeCode();
				}
			});
		function copy(){
			  var tooltip = document.getElementById("myTooltip");
			  const str = "user.php?name="+"<?php echo $personal[2] ?>";
			  const el = document.createElement('textarea')
			  el.value = str
			  el.setAttribute('readonly', '')
			  el.style.position = 'absolute'
			  el.style.left = '-9999px'
			  document.body.appendChild(el)
			  el.select()
			  document.execCommand('copy')
			  document.body.removeChild(el)
			  alert("Link Copied to Clipboard: "+str)
		}
		function outFunc() {
  			var tooltip = document.getElementById("myTooltip");
  			tooltip.innerHTML = "Copy to clipboard";
		}
		function edit(){
			var link = "edit.php?id="+"<?php echo $personal[1];?>"
			window.location.replace(link);
			
			
		}
		function logout(){
			var link = "intro.php";
			window.location.replace(link);
			
			
		}
</script>
<style>
	#qrcode{width: 100%;height: 100%}
</style>
</html>