<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head><script src="js/jquery-1.11.3.min.js"></script>

</head>

<!--- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Deepict</title>
	<meta name="description" content="">
	<meta name="author" content="">

<!-- CSS and JS
	================================================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/newlayout.css">
	<script src="js/loadfb.js"></script>
	<script src="js/addfilter.js"></script>
	<script src="js/refresh.js"></script>

<!-- Body
	================================================== -->
	
	<body class="no-touch">
	<?php
				session_start();
						?>

	<div id="pagewrap">

			<header>
				<h1><center>Deepict</center></h1>
				<h3><center>Deep neural network imaging</center></h3>
			</header>

    
			<section id="content">
				<center><h2>1. Login</h2></center>
				<br>
				<div id="#pic-container">
                    <!--<img id="~/Code/neural_imaging/img/mickey" style="width:80%" src="img/mickey.jpg">-->
                    <img style="width:80%" id="~/Code/neural_imaging/img/golden_gate.jpg" stype="width:80%" src="img/golden_gate.jpg">
					<!--<img id="~/Code/neural_imaging/img/preview/placeholder" src="buttons/blankfb.png">
					<canvas id="fb-img" width="200px" height="200px"></canvas>-->

				<button onclick="facebookLogin()"><i class="fa fa-facebook"></i> Connect to Facebook</button></center>
				</div>
			</section>

			<section id="middle">
				<h2><center>2. Pick a style</center></h2>

				<form>
				<div class="wrap">
					
					<!-- Define all of the tiles: -->
					<div class="box">
						<div class="boxInner">
							<img id="~/Code/neural_imaging/img/preview/starry_night" src="img/preview/starry_night.jpg" onclick="" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Starry Night</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img id="~/Code/neural_imaging/img/the_scream" src="img/the_scream.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">The Scream</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img id="~/Code/neural_imaging/img/preview/woman-with-hat" src="img/preview/woman-with-hat.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Woman with hat</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img id="~/Code/neural_imaging/img/preview/picasso" src="img/preview/picasso.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Picasso</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img id="~/Code/neural_imaging/img/preview/escher_sphere" src="img/preview/escher_sphere.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Escher</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img id="~/Code/neural_imaging/img/preview/pollock" src="img/preview/pollock.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Autumn Rhythm</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img id="~/Code/neural_imaging/img/preview/mona" src="img/preview/mona.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Mona Lisa</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img id="~/Code/neural_imaging/img/preview/FightingTemeraire" src="img/preview/FightingTemeraire.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Fighting Temeraire</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img id="~/Code/neural_imaging/img/preview/sunrise" src="img/preview/sunrise.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Sunrise impression</div>
						</div>
					</div>
					<div class="box">
						<div class="boxInner">
							<img id="~/Code/neural_imaging/img/preview/mondrian" src="img/preview/mondrian.jpg" />
							<input type="hidden" name="images[]" />
							<div class="titleBox">Mondrian</div>
						</div>
					</div>

				</div> <!--end wrap-->
				</form>


			</section>

			<aside id="sidebar">
				<center><h2>3. Voila!</h2></center>
				<center><img style="width:80%" id="out" src="./out.png"/></center>

				<?php

       
                if(isset($_POST['img'])){

                $artvar = $_POST['img'];
                print $artvar;
				$art = $artvar . ".jpg";
				$source = "~/Code/neural_imaging/img/golden_gate.jpg";

                
				$output = shell_exec("./neural.sh " . $art . " " . $source);

                echo '<script language="javascript">';
                    echo 'alert("Done!")';
                echo '</script>';

				ini_set('display_errors',1);
				ini_set('display_startup_errors',1);
				error_reporting(-1);

				print $output;
                }
				?>
				<!--<img id="img/preview/loadinggif" src="buttons/wait.gif" />-->
			</aside>
<footer>
	<center><h4>Made by Crystal Qian and Zi Xiang Pan at hackmit</h4>
	<p>with help from <a href="http://arxiv.org/pdf/1508.06576v2.pdf">Leon Gatys'</a> paper on a deep neural network algorithm and <a href="https://github.com/jcjohnson/neural-style">@jcjohnson's</a> implementation.</p><br/>
	<p>Copyright (kind of) 2015.</p></center>
</footer>

</div>
</body>
