<?php require_once('dashboard/includes/config.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Momento mori</title>
	<meta content="Official Charon Website" name="description">
	<meta content="Charon" name="keywords">
	<link href="bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link href="../favicon.png" rel="icon" type="images/png">
	<link href="css/style.css" rel="stylesheet">
	<link href="manifest.json" rel="manifest">
	<link href="css/main.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment-with-locales.min.js"></script>
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

	</script><!-- Global site tag (gtag.js) - Google Analytics -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166896483-1">
	</script>
	<script>

	 window.dataLayer = window.dataLayer || [];

	 function gtag(){dataLayer.push(arguments);}

	 gtag('js', new Date());



	 gtag('config', 'UA-166896483-1');

	</script>
	<style>
	#MyIframe{
	    pointer-events:none;
	}
	</style>
	<script>
	moment.locale('ja');
	console.log(moment().format('MMM Do'));
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
</head>
<body class="loading">
	<div id="wrapper">
		<div id="bg"></div>
		<div id="overlay"></div>
		<div id="main">
			<!-- Header -->
			<header id="header">
				<h1>Charon</h1><font style="color:white;"></font>
				<p><font style="color:white;"><a href="https://disboard.org/server/709579925824208966" style="text-decoration: none;" target="_blank"><i class='fab fa-discord' style='font-size:30px;color:white;'></i></a> &nbsp;&bull;&nbsp; DISCORD: dread#1337 &nbsp;&bull;&nbsp; XMPP: charon@creep.im &nbsp;&bull;&nbsp; SIGNAL: (515) 468-2023</font></p>
				<nav>
					<ul>
						<li>
							<a aria-hidden="true" class="icon fa-twitter" href="//url.charon.gg/twitter"><span class="label">Twitter</span></a>
						</li>
						<li>
							<a aria-hidden="true" class="icon fa-telegram" href="https://t.me/myth1c4l"><span class="label">Telegram</span></a>
						</li>
						<li>
							<a aria-hidden="true" class="icon fa-key" href="https://keybase.io/mythical"><span class="label">Keybase</span></a>
						</li>
						<li>
							<a aria-hidden="true" class="icon fa-btc" href="//charon.gg/donate/"><span class="label">Donate</span></a>
						</li>
						<li>
							<a aria-hidden="true" class="icon fa-envelope-o" href="mailto:contact@charon.gg"><span class="label">Email</span></a>
						</li>
					</ul>
				</nav>
			</header>
		</div>
	</div>
	<script>
	           window.onload = function() { document.body.className = ''; }
	           window.ontouchmove = function() { return false; }
	           window.onorientationchange = function() { document.body.scrollTop = 0; }
	</script>
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
	 .btn-default{color: #ff00c4;background-color:#000;border-color: #ff00c4;border-radius:0px;}.navbar-inverse{background-color:#000;border-color: #ff00c4;}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{color:#fff;background-color:#212121;border-color:#ff00c4;}.btn-default:hover{color:#fff;background-color:#000000;border-color:#ff00c4;}.btn-default.focus,.btn-default:focus{color:#fff;background-color:#000000;border-color:#ff00c4;}.btn-default.active.focus,.btn-default.active:focus,.btn-default.active:hover,.btn-default:active.focus,.btn-default:active:focus,.btn-default:active:hover,.open>.dropdown-toggle.btn-default.focus,.open>.dropdown-toggle.btn-default:focus,.open>.dropdown-toggle.btn-default:hover{color:#fff;background-color:#000000;border-color:#ff00c4;}body{background:url() no-repeat center center fixed;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-color:black;}
	</style>
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="https://charon.gg/"><span style="text-shadow: 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4;font-weight:bold;color:black;text-transform: uppercase;letter-spacing: 10px;">Charon</span></a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li style="list-style: none">&nbsp;</li>
					<li>&nbsp;<i class="icon fa-btc" style="right: -23px; top: 1px; padding-left: 25px; font-size: 18px; color: #ff00c4;"></i><button class="btn btn-default navbar-btn" onclick="window.location.href='https://bitcointicker.co/'" style="width:100px;" type="button">
					<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
					<div class="contain">
						<div id="price" style="padding-left: 15px;">&nbsp;</div>
					</div></button></li>
					<li style="list-style: none">&nbsp;</li>
					<li><button class="btn btn-default navbar-btn" onclick="window.location.href='https://b.charon.gg/'" type="button"><i class="fa fa-sticky-note"></i></button></li>
					<li style="list-style: none">&nbsp;</li>
					<li><button class="btn btn-default navbar-btn" onclick="window.location.href='access-dashboard'" type="button"><i class="fa fa-user"></i> Dashboard</button></li>
					<li style="list-style: none">&nbsp;</li>
					<li><button class="btn btn-default navbar-btn" onclick="window.location.href='about'" type="button"><i class="fa fa-question"></i></button></li>
				</ul>
			</div>
		</div>
	</nav>
	<script>
	function round(value, decimals) {

	 return Number(Math.round(value+'e'+decimals)+'e-'+decimals);

	}





	var stats = {}

	var before = 0



	function httpGet(theUrl)

	{

	   var xmlHttp = new XMLHttpRequest();



	   xmlHttp.open("POST", theUrl, false ); // false for synchronous request

	   xmlHttp.send( null );

	   return JSON.parse(xmlHttp.responseText);

	}



	setInterval(function(){

	stats = httpGet("https://www.bitstamp.net/api/ticker/")



	document.getElementById("price").innerHTML = "$"+round(stats["last"],2).toFixed(2);







	 if (stats["last"]-stats["open"] >= 0) {    document.getElementById("change").innerHTML = "+"+round(stats["last"]-stats["open"],2).toFixed(2) + " Today";



	document.getElementById("change").style.color = "#00ff44";

	 }

	 else {

	   document.getElementById("change").innerHTML = round(stats["last"]-stats["open"],2).toFixed(2) + " Today";

	document.getElementById("change").style.color = "#ff0000";

	 }



	 before = stats["last"]



	}, 1000);






	</script>
	<style>
	button:focus {

	 outline:none;

	 box-shadow: none;

	}
	</style>
	<footer>
		<div class="footer">
			<i>Copyright <i aria-hidden="true" class="fa fa-copyright"></i> Charon - All rights reserved.<br>
			<a href="//dashboard.charon.gg"><img src="//charon.gg/black.png" style="display: none; -webkit-filter: drop-shadow(1px 1px 0 #ff00c4) drop-shadow(-1px -1px 0 #ff00c4); filter: drop-shadow(1px 1px 0 #ff00c4) drop-shadow(-1px -1px 0 #ff00c4); width: 186px; height: 49px;"></a><font color="white" style="font-size: 15px;">"uneasy lies the head that wears a crown"</font></i>
			<div style="position: absolute; bottom: 0; right: 20px; width: 100px; text-align:right; padding: 10px;">
				<div style="a:hover{color:#fff;}">
					<a href="//secure-db.charon.gg"><?php echo   $ip = $_SERVER['REMOTE_ADDR']; ?></a>
				</div>
				<footer>
					<audio autoplay="" id="audio1" onloadeddata="setHalfVolume()"><source src="https://cdn.discordapp.com/attachments/709303214435991747/711815036468854894/home.mp3" type="audio/mpeg"> villain</audio>
					<script>
					function setHalfVolume() {

					var myAudio = document.getElementById("audio1");

					myAudio.volume = 0.2; //Changed this to 0.5 or 50% volume since the function is called Set Half Volume ;)

					}
					</script>
				</footer>
			</div>
		</div>
	</footer>
</body>
</html>
