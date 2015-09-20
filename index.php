<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head><script src="js/jquery-1.11.3.min.js"></script></head>

<!--- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Deepict</title>
	<meta name="description" content="">
	<meta name="author" content="">

<!-- CSS and JS
	================================================== -->
	<link rel="stylesheet" href="css/newlayout.css">
	<script src="js/loadfb.js"></script>
	<script src="js/addfilter.js"></script>

<!-- Body
	================================================== -->
	
	<body class="no-touch">
		<div id="pagewrap">

			<header>
				<h1><center>Deepict</center></h1>
				<h3><center>Deep neural network imaging</center></h3>
				<br></br>
			</header>

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

				<form>
				<div class="wrap">
					
					<!-- Define all of the tiles: -->
					<div class="box">
						<div class="boxInner">
							<img data-id="1" src="img/preview/starry_night.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Starry Night</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img data-id="2" src="img/preview/the_scream.png" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">The Scream</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img data-id="3" src="img/preview/woman-with-hat.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Woman with hat</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img data-id="4" src="img/preview/picasso.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Picasso</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img data-id="5" src="img/preview/escher_sphere.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Escher</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img data-id="6" src="img/preview/pollock.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Autumn Rhythm</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img data-id="7" src="img/preview/mona.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Mona Lisa</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img data-id="8" src="img/preview/FightingTemeraire.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Fighting Temeraire</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img data-id="9" src="img/preview/sunrise.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Sunrise impression</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img data-id="10" src="img/preview/mondrian.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Mondrian</div>
						</div>
					</div>

				</div> <!--end wrap-->
				<center><input type="submit" value="submit" /></center>
				</form>


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

				<img src ="out.png"></img>

				<!--<img id="loadinggif" src="buttons/wait.gif" />-->

			</aside>
<footer>
	<center><h4>Product of Crystal Qian and Zi Xiang Pan</h4>
	<p>Credits to <a href="http://arxiv.org/pdf/1508.06576v2.pdf">Leon Gatys'</a> paper on a deep neural network algorithm and <a href="https://github.com/jcjohnson/neural-style">@jcjohnson's</a> implementation.</p><br/>
	<p>Copyright 2015.</p></center>
</footer>

</div>
</body>
