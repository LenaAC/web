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

<?php if ($_SESSION['discord']['user-id'] === '706685677877723137' && $_SESSION['discord']['user-id'] === '706685677877723137' ) { ?>

<!DOCTYPE html>
<html>
<head>
  <title>Charon | Admin Dashboard</title>
  <meta http-equiv="refresh" content="1000;https://charon.gg/" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <link href="bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <meta name="description" content="Official Charon Website">
  <meta name="keywords" content="Charon">
  <link href="../favicon.png" rel="icon" type="images/png" />
  <link href="../css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  .btn-default{color:#00ff2b;background-color:#000;border-color:#00ff2b;border-radius:0px;}.navbar-inverse{background-color:#000;border-color: #ff00c4;}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{color:#fff;background-color:#212121;border-color:#00ff2b;}.btn-default:hover{color:#fff;background-color:#000000;border-color:#00ff2b;}.btn-default.focus,.btn-default:focus{color:#fff;background-color:#000000;border-color:#00ff2b;}.btn-default.active.focus,.btn-default.active:focus,.btn-default.active:hover,.btn-default:active.focus,.btn-default:active:focus,.btn-default:active:hover,.open>.dropdown-toggle.btn-default.focus,.open>.dropdown-toggle.btn-default:focus,.open>.dropdown-toggle.btn-default:hover{color:#fff;background-color:#000000;border-color:#00ff2b;}body{background:url(https://cdn.discordapp.com/attachments/709303214435991747/711973432446943372/dU18gto-min.gif) no-repeat center center fixed;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-color:black;}.well{background-color:#000000;border: 1px solid #ff00c4;border-radius:0px;color:white;opacity:  0.9;}
  </style>
</head>
<body>
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top"> <div class="container"> <div class="navbar-header"> <a class="navbar-brand" href="../"> <span style="text-shadow: 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4;font-weight:bold;color:black;text-transform: uppercase;letter-spacing: 10px;">Charon</span> </a> </div><ul class="nav navbar-nav navbar-right"> <a class="navbar-brand" target="_blank" href="//url.charon.gg/twitter"> <span style="text-shadow: 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4;font-weight:bold;color:black;text-transform: uppercase;letter-spacing: 10px;"><i class="fa fa-twitter" aria-hidden="true"></i></span> </a> <a class="navbar-brand" target="_blank" href="https://t.me/myth1c4l"> <span style="text-shadow: 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4, 0px 0px 0.2em #ff00c4;font-weight:bold;color:black;text-transform: uppercase;letter-spacing: 10px;"><i class="fa fa-telegram" aria-hidden="true"></i></span> </a> </ul> </div></nav><div style="padding-top:100px;" class="container"><div class="well"><center><a href="../"><div id="container2"></div></a></center><hr style="border-top:3px solid #ff00c4;"><b>Admin Dashboard</b><br/><br/>Welcome to our Administrative Dashboard <br><span style="font-size: 10px; border: 1px solid #ff00c4; border-radius: 3px; padding: 3px;"><i class="fa fa-info-circle"></i> <?php echo $_SESSION['discord']['user-id'];?> is currently whitelisted to access this page.</span><br/>
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
</style>
<br>
<center><a style="text-decoration: none;" href="//i.mythologic.al/u/"><i style="font-size: 30px; padding: 20px; border: 3px solid #fff; width: 160px;" class="fa fa-picture-o"><h3 style="color: #fff; font-family:'barthowheel';">Screenshots</h3></i></a>&nbsp;&nbsp;&nbsp;<a style="text-decoration: none;" href="ip-logs"><i style="font-size: 30px; padding: 20px; border: 3px solid #fff; width: 160px;" class="fa fa-history"><h3 style="color: #fff; font-family:'barthowheel';">IP Logs</h3></i></a>&nbsp;&nbsp;&nbsp;<a style="text-decoration: none;" href="//mail.mythologic.al/"><i style="font-size: 30px; padding: 20px; border: 3px solid #fff; width: 160px;" class="fa fa-envelope"><h3 style="color: #fff; font-family:'barthowheel';">Mail</h3></i></a></center>
<br>
<br>
<i><font style="color: #a5a5a5;"><i class="fa fa-home"></i> <a style="color: #a5a5a5;" href="https://charon.gg/">Charon</a> <i class="fa fa-cog"></i> <a style="color: #a5a5a5;" href="//dashboard.charon.gg">Dashboard</a></div></div></font>
</i></body>
<audio id= "audio1"  onloadeddata="setHalfVolume()" autoplay>
  <source loop src="../villain.mp3" type="audio/mpeg">
 villain
</audio>

<script>
function setHalfVolume() {

    var myAudio = document.getElementById("audio1");

    myAudio.volume = 0.2; //Changed this to 0.5 or 50% volume since the function is called Set Half Volume ;)

}
</script>
</html>

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
        <div style="color: #ff00c4;" class="footer">
        Copyright <i class="fa fa-copyright" aria-hidden="true"></i> Charon - All rights reserved.<br></i><b><a href="//charon.gg/terms-and-conditions/" style="text-decoration: none;"><font size="1" color="#ff00c4">Terms and Conditions</a></font></b>
    <footer>

<?php } else { header("Location: /"); } ?>
