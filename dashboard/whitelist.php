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

<!-- charon.gg - Ð½Ðµ ÑƒÐ»Ð°Ð·Ð¸Ñ‚Ðµ Ð½Ð° Ð¾Ð²Ñƒ Ð²ÐµÐ± ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ñƒ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Memento mori</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">
        <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
      	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

        <style type="text/css">
            body {
                overflow: hidden;
            }
        </style>

        <style>
        html{
        background-color: black;
       }

       body{
        -webkit-animation: fadein 1.5s;
        background: linear-gradient( rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75) ), url('/css/images/overlay-pattern.png');
        color: white;
       }
       </style>

        <script type="text/javascript">
         function closeWindow() {
            setTimeout(function() {
            window.close();
          }, 6500);
            }

            window.onload = closeWindow();
            </script>

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166896483-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-166896483-1');

</script>

    <html oncontextmenu="return false;">

    <body

    onbeforecopy = "return false"

    ondragstart = "return false"

    onselectstart = "return false"

    oncontextmenu = "return false"

    onselect = "document.selection.empty()"

    oncopy = "document.selection.empty()">

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

        <link href="https://fonts.googleapis.com/css?family=Rubik:300" rel="stylesheet">
        <style>
            html {
                box-sizing: border-box;
            }
            *,
            *::before,
            *::after {
                box-sizing: inherit;
            }
            body {
                background-color: #000;
                color: #fff;
                font-family: 'Rubik', sans-serif;
                height: 100vh;
                margin: 0;
                border: 3px solid #00ff00;
            }
            h1 {
                font-size: 26px;
                font-weight: 300;
                margin: 0;
            }
            h2 {
                font-size: 20px;
                font-weight: 300;
                margin: 0;
            }
            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100%;
                position: relative;
                text-align: center
            }
            .logo {
                position: absolute;
                left: 0px;
                top: 13px;
                width: 100px;
                min-width: 250px;
                height: 24px;
            }
            .logo svg {
                height: 100%;
                width: 100%;
            }
            .error-icon {
                margin-top: 100px;
                margin-right: 31px;
                padding: 30px;
            }
            .error-message {
                margin-bottom: 120px;
                width: 70%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="logo">
                <b><a style="text-decoration: none; color: #fff;" href="//charon.gg"><i class="fa fa-lock"></i> Charon</b>
            </div>
            <div class="error-icon">
               <a target="_blank" href="//dashboard.charon.gg"><img style="margin: 15px; width: 100%; height: 100%; border: 1px solid #ff00c4; border-right: 3px solid #ff00c4; border-left: 3px solid #ff00c4; border-bottom: 8px solid #ff00c4;" src="https://cdn.discordapp.com/avatars/<?php echo $_SESSION['discord']['user-id'];?>/<?php echo $_SESSION['discord']['avatar-id'];?>.png">
            </div>
            <h2 class="error-message"><div style="display: inline; position: relative; width: auto; height:auto; text-align:center; font-size: 20px; background-color: #000; border-top: 1px solid #fff; border-bottom: 1px solid #fff; border-left: 5px solid #fff; border-right: 5px solid #fff; padding: 8px;"><a target="_blank" style="Text-decoration: none; color:#fff;" href="//dashboard.charon.gg"><i class="fa fa-list"></i> <?php echo $_SESSION['discord']['username'];?>#<?php echo $_SESSION['discord']['discriminator'];?></div><br><br><font style="font-size: 13px; background-color: #000; padding: 5px; border: 1px solid #ff00c4;" color="#00ff00"><b><text id="changeText"><?php echo $_SESSION['discord']['user-id'];?></text></b></font></h2>
   </div>
</div>

<script>
var text = ["WHITELIST REQUEST SENT", "EST TIME: WITHIN 24/48HOURS"];

var counter = 0;

var elem = document.getElementById("changeText");

var inst = setInterval(change, 2500);



function change() {

  elem.innerHTML = text[counter];

  counter++;

  if (counter >= text.length) {

    counter = 0;

    // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle

  }

}
</script>
    </body>
</html>
