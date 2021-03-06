<?php require_once('dashboard/includes/config.php');?>

<!-- Hosts -->
<?php
$status =  GetServerStatus('charon.gg',80,443);
function GetServerStatus($site, $port)
{
$status = array("OFFLINE", "ONLINE");
$fp = @fsockopen($site, $port, $errno, $errstr, 2);
if (!$fp) {
    // echo "HOST ".$status[0]."<br>";
     $webhookurl = "";
// $msg = "HOST ".$status[0]."";
     $msg = "```diff
- HOMEPAGE ".$status[0]." at ".date("l").", ".date("d F 20y")."```";
$json_data = array ('content'=>"$msg");
$make_json = json_encode($json_data);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );

} else
  {
   //   echo "HOST ".$status[1]."<br>";
     $webhookurl = "";
     // $msg = "Host ".$status[1]."";
      $msg = "```diff
+ HOMEPAGE ".$status[1]." at ".date("l").", ".date("d F 20y")."```";
$json_data = array ('content'=>"$msg");
$make_json = json_encode($json_data);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
  }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Momento mori</title>
	<meta content="admin@charon.gg" name="description">
	<meta content="charon" name="keywords">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment-with-locales.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="manifest" href="images/site.webmanifest">
  <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
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
				<p><font style="color:white;"><a href="https://disboard.org/server/713050126075035670" style="text-decoration: none;" target="_blank"><i class='fab fa-discord' style='font-size:30px;color:white;opacity:0px;vertical-align:middle;display:inline;'></i></a> &nbsp;&bull;&nbsp; DISCORD: tatsu#1337 &nbsp;&bull;&nbsp; XMPP: charon@creep.im &nbsp;&bull;&nbsp; SIGNAL: 1+ (515) 468-2023<br></font><font size="4%" style="opacity: 0px; color: #fff;"><?php $members = json_decode(file_get_contents('https://discordapp.com/api/guilds/709579925824208966/widget.json'), true)['members']; $membersCount = 1; foreach ($members as $member) { if ($member['status'] == 'online') { $membersCount++; } } echo "Current Members: " . $membersCount;?></font></p>
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
							<a aria-hidden="true" class="icon fa-btc" href="/donate/"><span class="label">Donate</span></a>
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
					<li>&nbsp;<i class="icon fa-btc" style="right: -23px; top: 1px; padding-left: 24px; font-size: 18px; color: #F7931A;"></i><button class="btn btn-default navbar-btn" onclick="window.location.href='https://bitcointicker.co/'" style="width:90px; border: 1px solid #F7931A; background-color: #000;" type="button">
					<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
					<div class="contain">
						<div id="price" style="padding-left: 15px; color: #F7931A;">&nbsp;</div>
					</div></button></li>
					<li style="list-style: none">&nbsp;</li>
					<li><button class="btn btn-default navbar-btn" onclick="window.location.href='https://shoppy.gg/@Hermes'" type="button"><i class="fa fa-shopping-bag"></i> Store</button></li>
					<li style="list-style: none">&nbsp;</li>
					<li><button class="btn btn-default navbar-btn" onclick="window.location.href='access-dashboard'" type="button"><i class="fa fa-user"></i> Dashboard</button></li>
					<li style="list-style: none">&nbsp;</li>
					<li><button class="btn btn-default navbar-btn" onclick="window.location.href='about'" type="button"><i class="fa fa-question"></i> Help</button></li>
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
          <?php echo '<a style="cursor: pointer" onclick="javascript: window.location = \'https://charon.gg/secure\';">';?><?php echo   $ip = $_SERVER['REMOTE_ADDR']; ?></a>
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
