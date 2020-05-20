<?php require_once('includes/config.php');?>

<?php if(!isset($_SESSION['discord'])){ //if login in session is not set
    header("Location: https://dashboard.charon.gg/login");
}
?>

<?php

    /* Your password */

    $password = 'CHARON';

    /* Redirects here after login */
    $redirect_after_login = '/';

    /* Will not ask password again for */
    $remember_password = strtotime('+30 days'); // 30 days

    if (isset($_POST['password']) && $_POST['password'] == $password) {
        setcookie("password", $password, $remember_password);
        header('Location: ' . $redirect_after_login);
        exit;

    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>access</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="../favicon.png" rel="icon" type="images/png" />
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

</head>

<body style="background-color: #000;">>

    <div style="padding: 15px; text-align:center;margin-top:50px; color: #fff;">
        <h3 style="padding: 15px;"><i class="fa fa-key"></i> ENTER THE ACCESS CODE</h3>
        <form method="POST">
          <input placeholder="CHARON" class="form-control" type="text" name="password"><button class="btn">ENTER</button>
        </form>
    </div>
</body>
</html>

<style>
.form-control {
display: inline-block;
}
.btn {
display: inline-block;
border:1px solid #ff00c4;
-moz-border-radius:25px; /* Firefox 3.6 and earlier */
padding:10px;
background-color: #ff00c4;
color: #000;
font-size: 25px;
text-align: center;
font-family: 'barthowheel';
}
</style>

<style type="text/css">

input{
border:1px solid #ff00c4;
-moz-border-radius:25px; /* Firefox 3.6 and earlier */
padding:10px;
background-color: #000;
color: #fff;
font-size: 25px;
text-align: center;
font-family: 'barthowheel';
}
</style>

                <style>
            @font-face {
  font-family:'barthowheel';
  src: url('../barthowheel.ttf') format('truetype');
  font-weight: normal;
}
body {
  font-family: 'barthowheel';
  overflow: hidden;
}
        </style>
