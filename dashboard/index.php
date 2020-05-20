<?php require_once('includes/config.php');?>

<?php if(!isset($_SESSION['discord'])){ //if login in session is not set
    header("Location: https://dashboard.charon.gg/login");
}
?>

<?php

    /* Your password */
    $password = 'CHARON';

    if (empty($_COOKIE['password']) || $_COOKIE['password'] !== $password) {
        // Password not set or incorrect. Send to login.php.
        header('Location: access');
        exit;
    }
?>

<!-- Hosts -->
<?php
$status =  GetServerStatus('dashboard.charon.gg',80,443);
function GetServerStatus($site, $port)
{
$status = array("OFFLINE", "ONLINE");
$fp = @fsockopen($site, $port, $errno, $errstr, 2);
if (!$fp) {
    // echo "HOST ".$status[0]."<br>";
     $webhookurl = "https://discordapp.com/api/webhooks//BaF7pnNtKghfd0SMV02oM-FzqVveaqKiEvW7vDx2u1yz2Tozwk0y44pFmJgVtfmwtI5l";
// $msg = "HOST ".$status[0]."";
     $msg = "```diff
- DASHBOARD ".$status[0]." at ".date("l").", ".date("d F 20y")."```";
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
     $webhookurl = "https://discordapp.com/api/webhooks//BaF7pnNtKghfd0SMV02oM-FzqVveaqKiEvW7vDx2u1yz2Tozwk0y44pFmJgVtfmwtI5l";
     // $msg = "Host ".$status[1]."";
      $msg = "```diff
+ DASHBOARD ".$status[1]." at ".date("l").", ".date("d F 20y")."```";
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

<?php
	//Store variable as usual
  $_SESSION['discord']['user-id'];
  ?>

<!DOCTYPE html>
<html>
<head>
  <title>Memento mori</title>
  <meta name="description" content="Official Charon Website">
  <meta name="keywords" content="Charon">
  <link href="../bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="../favicon.png" rel="icon" type="images/png" />
  <link href="css/style.css" rel="stylesheet" />
  <link rel="manifest" href="manifest.json">
  <link rel="stylesheet" href="css/main.css"/>
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

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166896483-1"></script>

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
input[type=submit] {
    padding:5px 15px;
    background:#ccc;
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
</style>

	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">
				<!-- Header -->
					<header id="header">
                                                 <h1>Welcome <?php echo $_SESSION['discord']['username'];?>!</h1>
                                                <font style="color:white;"><p>Press the <i class="fa fa-plus"></i> icon in the upper-right menu <font color="#ff00c4"><b>once</b></font> to submit your whitelist request.<br></font><font size="4%" style="opacity: 0px; color: #fff;"><?php $members = json_decode(file_get_contents('https://discordapp.com/api/guilds/709579925824208966/widget.json'), true)['members']; $membersCount = 1; foreach ($members as $member) { if ($member['status'] == 'online') { $membersCount++; } } echo "Current Members: " . $membersCount;?></p></font>
						<nav>
							<ul>
								<li><a href="//url.charon.gg/twitter" class="icon fa-twitter" aria-hidden="true"><span class="label">Twitter</span></a></li>
								<li><a href="https://t.me/myth1c4l" class="icon fa-telegram" aria-hidden="true"><span class="label">Telegram</span></a></li>
								<li><a href="https://keybase.io/mythical" class="icon fa-key" aria-hidden="true"><span class="label">Keybase</span></a></li>
								<li><a href="//charon.gg/donate/" class="icon fa-btc" aria-hidden="true"><span class="label">Donate</span></a></li>
								<li><a href="mailto:contact@charon.gg" class="icon fa-envelope-o" aria-hidden="true"><span class="label">Email</span></a></li>
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
<body>
  <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="https://charon.gg/"><span style="text-shadow: 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4;font-weight:bold;color:black;text-transform: uppercase;letter-spacing: 10px;">Charon</span></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
         <?php if ($_SESSION['discord']['user-id'] === '706685677877723137' && $_SESSION['discord']['user-id'] === '706685677877723137' ) { ?>&nbsp;<li>&nbsp;<button type="button" onclick="window.location.href='admin'" class="btn btn-default navbar-btn">Admin</button></li><?php } else { header("Location: admin"); } ?>
         &nbsp;<li>&nbsp;<button type="button" onclick="window.location.href='https://charon.gg/'" class="btn btn-default navbar-btn" style="background: url(https://cdn.discordapp.com/avatars/<?php echo $_SESSION['discord']['user-id'];?>/<?php echo $_SESSION['discord']['avatar-id'];?>.png); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;"><i class="fa fa-picture-o" style="opacity: 10%;"></i></button></li>
         <li><button style="border-left: 3px solid #ff00c4; border-right: 3px solid #ff00c4;" type="button" onclick="window.location.href='/'" class="btn btn-default navbar-btn"><i class="fa fa-user" style="opacity: 60%;"></i> <?php echo $_SESSION['discord']['username'];?>#<?php echo $_SESSION['discord']['discriminator'];?></li>&nbsp;<li><form method="post"><input style="display: none;" id="message" type="text" name="message"><button onClick="window.open('whitelist','windowname','width=650,height=650')" id="submit" class="btn btn-default navbar-btn" type="submit"><i style="color: #fff;" class="fa fa-plus"></i></a></form></button></li>
         &nbsp;<li>&nbsp;<button type="button" onclick="window.location.href='logout'" class="btn btn-default navbar-btn">Logout</button></li></ul>
</div>
</div>
</nav>
</body>

<?php

    $message = $_POST['message'];
    $data = ['content' => $message];
    $options = [

        'http' => [

            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => json_encode($data)

        ]

    ];

    $context = stream_context_create($options);
    $result = file_get_contents('https://discordapp.com/api/webhooks/711843027190284318/BaF7pnNtKghfd0SMV02oM-FzqVveaqKiEvW7vDx2u1yz2Tozwk0y44pFmJgVtfmwtI5l', false, $context);

?>

<script>
const hash = '?avatar=0?message=```<?php echo $_SESSION['discord']['user-id'];?>```';
const example = "https://charon.gg/" + hash;

(new URL(example)).searchParams.forEach((x, y) =>
document.getElementById(y).value = x);
</script>

<style>
button:focus {

  outline:none;

  box-shadow: none;

}
</style>

    <footer>
        <div class="footer">
        <i>Copyright <i class="fa fa-copyright" aria-hidden="true"></i> Charon - All rights reserved.<br><a href="//dashboard.charon.gg"><img style="display: none; -webkit-filter: drop-shadow(1px 1px 0 #ff00c4) drop-shadow(-1px -1px 0 #ff00c4); filter: drop-shadow(1px 1px 0 #ff00c4) drop-shadow(-1px -1px 0 #ff00c4); width: 186px; height: 49px;" src="//charon.gg/black.png"></a><font color="white" style="font-size: 15px;">"uneasy lies the head that wears a crown"</font>
  <div style="position: absolute; bottom: 0; right: 20px; width: 100px; text-align:right; padding: 10px;">
    <div style="a:hover{color:#fff;}"> <a href="//secure-db.charon.gg"><?php echo   $ip = $_SERVER['REMOTE_ADDR']; ?> </a>
  </div>
 <footer>

<audio id= "audio1"  onloadeddata="setHalfVolume()" autoplay>
  <source loop src="https://cdn.discordapp.com/attachments/709303214435991747/711815036468854894/home.mp3" type="audio/mpeg">
 villain
</audio>

<script>
function setHalfVolume() {

    var myAudio = document.getElementById("audio1");
    myAudio.volume = 0.2; //Changed this to 0.5 or 50% volume since the function is called Set Half Volume ;)

}
</script>

</html>
