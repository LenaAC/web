<?php require_once('../dashboard/includes/config.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Charon | Dashboard</title>
	<meta content="1000;https://charon.gg/" http-equiv="refresh">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="../bootstrap.min.css" rel="stylesheet">
	<meta content="Official Charon Website" name="description">
	<meta content="Charon" name="keywords">
	<link href="../favicon.png" rel="icon" type="images/png">
	<link href="../css/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
	</script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!-- Global site tag (gtag.js) - Google Analytics -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

        <script type="text/javascript">
        var sheet = document.createElement('style');
        sheet.innerHTML = "#main {opacity:0;}"; // your main content
        element = document.getElementById('wrapper'); // your 'main content wrapper
        element.appendChild(sheet);
        setTimeout(function(){
        sheet.innerHTML = "#main {opacity:1;}";
        element.appendChild(sheet);
        }, 400); // time to wait to start transition
        </script>
        <div class="wrapper">
        <div id="main">Loading...</div>
        </div>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166896483-1">
	</script>
	<script>

	 window.dataLayer = window.dataLayer || [];

	 function gtag(){dataLayer.push(arguments);}

	 gtag('js', new Date());



	 gtag('config', 'UA-166896483-1');

	</script>
	<style>
	body::-webkit-scrollbar {
	   width: 1em;
	}
	body::-webkit-scrollbar-track {
	   -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	}
	body::-webkit-scrollbar-thumb {
	 background-color: #333333;
	 outline: 1px solid #ff00d4;
	 border: 1px solid #ff00d4;
	}
	</style>
	<style>
	       @font-face {
	 font-family:'barthowheel';
	 src: url('barthowheel.ttf') format('truetype');
	 font-weight: normal;
	}
	body {
	 font-family: 'barthowheel';
	 overflow: hidden;
	}
	</style>
	<style>
	 .btn-default{color:#00ff2b;background-color:#000;border-color:#00ff2b;border-radius:0px;}.navbar-inverse{background-color:#000;border-color: #ff00c4;}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{color:#fff;background-color:#212121;border-color:#00ff2b;}.btn-default:hover{color:#fff;background-color:#000000;border-color:#00ff2b;}.btn-default.focus,.btn-default:focus{color:#fff;background-color:#000000;border-color:#00ff2b;}.btn-default.active.focus,.btn-default.active:focus,.btn-default.active:hover,.btn-default:active.focus,.btn-default:active:focus,.btn-default:active:hover,.open>.dropdown-toggle.btn-default.focus,.open>.dropdown-toggle.btn-default:focus,.open>.dropdown-toggle.btn-default:hover{color:#fff;background-color:#000000;border-color:#00ff2b;}body{background:url(https://cdn.discordapp.com/attachments/709303214435991747/711973432446943372/dU18gto-min.gif) no-repeat center center fixed;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-color:black;}.well{background-color:#000000;border: 1px solid #ff00c4;border-radius:0px;color:white;opacity: 0.9;}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="../"><span style="text-shadow: 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4;font-weight:bold;color:black;text-transform: uppercase;letter-spacing: 10px;">Charon</span></a>
			</div>
			<div class="nav navbar-nav navbar-right" style="margin-left: 2em">
				<a class="navbar-brand" href="//url.charon.gg/twitter" target="_blank"><span style="text-shadow: 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4;font-weight:bold;color:black;text-transform: uppercase;letter-spacing: 10px;"><i aria-hidden="true" class="fa fa-twitter"></i></span></a> <a class="navbar-brand" href="https://t.me/myth1c4l" target="_blank"><span style="text-shadow: 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4;font-weight:bold;color:black;text-transform: uppercase;letter-spacing: 10px;"><i aria-hidden="true" class="fa fa-telegram"></i></span></a>
			</div>
		</div>
	</nav>
	<div class="container" style="padding-top:100px;">
		<div style="padding: 15px;" class="well">
			<center>
				<a href="../">
				<div id="container2"></div></a>
			</center>
			<hr style="border-top:3px solid #ff00c4;">
			<b>Dashboard</b><br>
			<br>
			Login to our Dashboard to request whitelisting your Discord account to access our Discord Server.<br>
			<span style="font-size: 10px; border: 1px solid #ff00c4; border-radius: 3px; padding: 3px;"><i class="fa fa-info-circle"></i> DASHBOARD PASSWORD: <font color="#fff">CHARON</font>.</span><br>
			<br>
			We thank everyone that has contacted us so far, for now if you do not have access feel free to watch our <a href="https://dlive.tv/villain" style="color: #ffd900; text-decoration: none;" target="_blank"><b>DLive Streams</b></a>.<br>
			<br>
			<i style="color: #a5a5a5;">Login to <a href="../dashboard/login" style="color: #a5a5a5;">Charon</a></i>
		</div>
	</div>
	<style type="text/css">
	   #container2{
	       text-align: center;
	       width: 100%;
	       height: 100px; /* Set height */
	       margin: 0px;
	       padding: 0px;
	       background-image: url('https://cdn.discordapp.com/attachments/593411908476993536/593616164102602754/bg.jpg');
	       background-size: content; /* Scaling down large image to a div */
	       background-repeat: no-repeat;
	       background-position: center;
	       border: 1px solid #ff00c4;
	   }
	</style><audio autoplay="" id="audio1" onloadeddata="setHalfVolume()"><source src="../villain.mp3" type="audio/mpeg"> villain</audio>
	<script>
	function setHalfVolume() {

	   var myAudio = document.getElementById("audio1");

	   myAudio.volume = 0.2; //Changed this to 0.5 or 50% volume since the function is called Set Half Volume ;)

	}
	</script>
	<style>
	   footer{
	       bottom: 0;
	       position: fixed;
	       width: 100%;
	   }

	   .footer {
	       background: black;
	       height: 75px;
	       margin: auto;
	       width: 100%;
	       text-align:center;
	       padding:10px;
	       color:#ff00c4;
	       border-top: 1px solid;
	   }
	</style>
	<footer>
		<div class="footer">
			Copyright <i aria-hidden="true" class="fa fa-copyright"></i> Charon - All rights reserved.<br>
			<b><a href="../terms-and-conditions/" style="text-decoration: none;"><font color="#FF00C4" size="1"><b>Terms and Conditions</b></font></a></b>
			<footer></footer>
		</div>
	</footer>
</body>
</html>
