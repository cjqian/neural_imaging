<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

<!--- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Selfie dreams</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/newlayout.css">
<script src="js/loadfb.js"></script>
<body class="no-touch">
<div id="pagewrap">

<header>
<h1><center>depict</center></h1>
<h3><center>deep neural network image generation</center></h3>
<br></br>
</header>
<div id="container">
<section id="content">
<center><h2>1. Login</h2></center>
<br>
<div id="#pic-container">
<img id="placeholder" src="buttons/blankfb.png">
<canvas id="fb-img" width="200px" height="200px"></canvas>
</div>
<br>
<button onclick="facebookLogin()"><img src="buttons/fb.png" alt="Submit" ></button></center>
</section>

<section id="middle">
<h2><center>2. Pick a style</center></h2>

<div class="wrap">

<!-- Define all of the tiles: -->

<div class="box">
<div class="boxInner">
<img id="starry_night" src="img/preview/starry_night.jpg" />
<div class="titleBox">Starry Night</div>
</div>
</div>
<div class="box">
<div class="boxInner">
<img id="the_scream" src="img/preview/the_scream.png" />
<div class="titleBox">The Scream</div>
</div>
</div>
<div class="box">
<div class="boxInner">
<img id="woman-with-hat" src="img/preview/woman-with-hat.jpg" />
<div class="titleBox">Woman with hat</div>
</div>
</div>
<div class="box">
<div class="boxInner">
<img id="picasso" src="img/preview/picasso.jpg" />
<div class="titleBox">Picasso</div>
</div>
</div>
<div class="box">
<div class="boxInner">
<img id="escher_sphere" src="img/preview/escher_sphere.jpg" />
<div class="titleBox">Escher</div>
</div>
</div>
<div class="box">
<div class="boxInner">
<img id="pollock" src="img/preview/pollock.jpg" />
<div class="titleBox">Autumn Rhythm</div>
</div>
</div>
<div class="box">
<div class="boxInner">
<img id="mona" src="img/preview/mona.jpg" />
<div class="titleBox">Mona Lisa</div>
</div>
</div>
<div class="box">
<div class="boxInner">
<img id="FightingTemeraire" src="img/preview/FightingTemeraire.jpg" />
<div class="titleBox">Fighting Temeraire</div>
</div>
</div>
<div class="box">
<div class="boxInner">
<img id="sunrise" src="img/preview/sunrise.jpg" />
<div class="titleBox">Sunrise impression</div>
</div>
</div>
<div class="box">
<div class="boxInner">
<img id="mondrian" src="img/preview/mondrian.jpg" />
<div class="titleBox">Mondrian</div>
</div>
</div>

</div>

</section>

<aside id="sidebar">
<center><h2>3. Voila!</h2></center>
<?php
$output = shell_exec("sudo -u root /var/www/html/neural.sh");

$art = "examples/inputs/starry_night.jpg";
$source = "examples/inputs/brad_pitt.jpg";

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

echo $output;
?>

<!-- Default profile picture -->

<!-- Loading -->
<!--<img id="loadinggif" src="buttons/dots.gif" />-->

<img src ="out.png"></img>
</aside>
</div>

<footer>
<center><h4>Product of Crystal Qian and Zi Xiang Pan</h4>
<p>Credits to <a href="http://arxiv.org/pdf/1508.06576v2.pdf">Leon Gatys'</a> paper on a deep neural network algorithm and <a href="https://github.com/jcjohnson/neural-style">@jcjohnson's</a> implementation.</p><br/>
<p>Copyright 2015.</p></center>
</footer>

</div>
</body>
