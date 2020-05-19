<!-- charon.gg - не улазите на ову веб страницу -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Memento mori</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="//charon.gg/favicon.png" rel="icon" type="images/png">
</head>
<body oncontextmenu="return false" ondragstart="return false" onselect="document.selection.empty()">
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
	               height: 80%;
	               width: 80%;
	           }
	           .error-icon {
	               margin-top: 90px;
	           }
	           .error-message {
	               margin-bottom: 120px;
	               width: 70%;
	           }
	</style>
	<div class="container">
		<div class="logo">
			<b><a href="//charon.gg" style="text-decoration: none; color: #fff;"><i class="fa fa-lock"></i> Charon</a></b>
		</div><b></b>
		<div class="error-icon">
			<b><img height="30%" src="//charon.gg/favicon.png" style="margin: 15px;" width="30%"></b>
		</div><b></b>
		<h2 class="error-message"><b><a href="//db.charon.gg" style="Text-decoration: none; color:#fff;"><i class="fa fa-database"></i> Encrypted File Database [<font color="#666666"><b></b></font>]</a></b></h2>
	</div>
	<script>
	var text = ["AES · 256B"];

	var counter = 0;

	var elem = document.getElementById("changeText");

	var inst = setInterval(change, 1000);



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
