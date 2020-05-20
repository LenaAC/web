<title>404</title>
	<link href="../favicon.png" rel="icon" type="images/png">
<section class="error-body">
	<video preload="auto" class="background" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/396624/err.mp4" autoplay muted loop></video>
	<div class="message">
		<h1 t="404">404</h1>
		<div class="bottom">
			<p>You have lost your way</p>
			<a href="#">return home</a>
		</div>
	</div>
</section>

<style>
$bg: #11111b;
$red: #ff6778;
$green: #afd33d;
$blue: #1122ff;
$pink: #ff00c4;
$text: $pink;

@function font($to, $from, $toWidth, $fromWidth) {
    $slope: ($to - $from) / ($toWidth - $fromWidth);
    $base: $from - $slope * $fromWidth;
    @return calc(#{$base} + #{100vw * $slope});
}
@mixin dotgrid($dot: #aaa,$dot-background: #000,$dot-size: 1px,$dot-spacing: 22px) {
    background: linear-gradient(90deg, $dot-background ($dot-spacing - $dot-size), transparent 1%) center, linear-gradient($dot-background ($dot-spacing - $dot-size), transparent 1%) center, $dot;
    background-size: $dot-spacing $dot-spacing;
    background-position: center;
}

:root {
	box-sizing: border-box;
	cursor: default;
}
::selection {
	color: $bg;
	background-color: lighten($text, 10%);
}
html, body {
	width: 100%;
	height: 100%;
	background-color: $bg;
	color: $text;
	font-size: font(22px, 9px, 1920px, 320px);
}
.error-body {
	position: relative;
	width: 100%;
	height: 100%;
	overflow: hidden;
	&:before {
		content: '';
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: $text;
		mix-blend-mode: overlay;
		z-index:1;
	}
	&:after {
		content: '';
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		@include dotgrid($dot: lighten($bg, 100%), $dot-background: $bg);
		opacity: .2;
		z-index:1;
	}
	.background {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 0;
		filter: grayscale(1);
		mix-blend-mode: luminosity;
	}
	.message {
		position: relative;
		width: 100%;
		height: 100%;
		text-align: center;
		z-index:3;
		h1 {
			$faded: rgba($text, .3);
			position: absolute;
			top: 10%;
			left: 0%;
			width: 100%;
			font-size: 10em;
			margin: 0;
			animation: shake 600ms ease-in-out infinite alternate;
			text-shadow: 0 0 .07em $text,
			         -.2em 0 2em $faded,
								.2em 0 2em $faded;
			user-select: none;
			&:before {
				content: attr(t);
				position: absolute;
				left: 50%;
				transform: translate(-50%, .34em);
				height: .1em;
				line-height: .5em;
				width: 100%;
				animation: scan 500ms ease-in-out infinite alternate random(600)+ms,
					glitch-anim 300ms ease-in-out infinite alternate;
				overflow: hidden;
				opacity: .7;
			}
			&:after {
				$n:random(30);
				content: attr(t);
				position: absolute;
				top: -$n+px;
				left: 50%;
				transform: translate(-50%, .34em);
				height: .5em;
				line-height: .1em;
				width: 100%;
				animation: scan 665ms ease-in-out infinite alternate random(600)+ms,
					glitch-anim 300ms ease-in-out infinite alternate;
				overflow: hidden;
				opacity: .8;
			}
		}
		.bottom {
			position: absolute;
			top: 65%;
			left: 0;
			width: 100%;
		}
		p, a {
			font-size: 2em;
			font-family: monospace;
			text-shadow: 0 0 5px $text;
			filter: blur(.8px);
		}
		a {
			$dd: 225ms;

			position: relative;
			color: $text;
			text-decoration: none;
			font-weight: 700;
			border: 2px solid $text;
			text-transform: uppercase;
			padding: 5px 30px;
			box-shadow: inset 0 0 0 0 rgba($text, .2);
			transition: 25ms ease-in-out all 0ms;
			overflow: hidden;
			animation: attn 3s ease-in-out infinite;
			&:hover {
				cursor: crosshair;
				box-shadow: inset 0 -2em 0 0 rgba($text, .2);
				transition: 225ms ease-in-out all $dd;
				animation: none;
				&:before,
				&:after {
					transform: translate(-50%, 0) scale(0, 1);
				}
			}
			&:active {
				box-shadow: inset 0 -2em 0 0 rgba($text, .5);
				transition: 225ms ease-in-out all $dd;
			}
			&:before,
			&:after {
				content: '';
				position: absolute;
				left: 50%;
				transform: translate(-50%, 0) scale(1, 1);
				transform-origin: center;
				background-color: $bg;
				width: 90%;
				height: 5px;
				transition: $dd ease-in-out all;
				mix-blend-mode: hard-light;
			}
			&:before {
				top: -4px;
			}
			&:after {
				bottom: -4px;
			}
		}
	}
}

@keyframes scan {
	$num: random(30);
	$numVal: $num * .01em;
	from , 20%, 100%{
		height: 0;
		transform: translate(-50%, .44em);
	}
	10%,15% {
		height: 1em;
		line-height: .2em;
		transform: translate(-55%, $numVal);
	}
}
@keyframe pulse {
	$faded: rgba($text, .3);
	from {
		text-shadow: 0 0 0 $text,
								 0 0 0 $faded,
								 0 0 0 $faded;
	}
	to {
		text-shadow: 0 0 .07em $text,
			         -.2em 0 2em $faded,
								.2em 0 2em $faded;
	}
}
@keyframes attn {
	0%, 100% {
		opacity: 1;
	}
	30%, 35% {
		opacity: .4;
	}
}
@keyframes shake {
	0%, 100% {
		transform: translate(-1px, 0);
	}
	10% {
		transform: translate(2px, 1px);
	}
	30% {
		transform: translate(-3px, 2px);
	}
	35% {
		transform: translate(2px, -3px);
		filter: blur(4px);
	}
	45% {
		transform: translate(2px, 2px) skewY(-8deg) scale( .96, 1);
		filter: blur(0);
	}
	50% {
		transform: translate(-3px, 1px);
	}
}
@keyframes glitch-anim {
  $steps: 10;
  @for $i from 0 through $steps {
    #{percentage($i*(1/$steps))} {
      clip: rect(random(100)+px, 9999px, random(100)+px, 0);
    }
  }
}
</style>
