<?php
	include '_main.php';
	$title = "//homepage"
?>

<!DOCTYPE html>
<html>
	<head>
	    <!-- Main "Items" -->
	    <meta charset="UTF-8">
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="assets/css/font-awesome.min"/>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/animate.min.css" />
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="icon" type="image/x-icon" href="favicon.ico" />
		
		<!-- Search stuff -->
        <?php include "assets/extra/meta.php"; ?>
	</head>
	
	<body class="landing">
		
		<canvas id="canvas-snow" width="100%" height="100%"></canvas>
		
		<div class="wrapper">

			<div class="title animate">
                <img src="<?php echo $str_avatar; ?>">
				<h1><?php echo $str_name; ?></h1>
				<h2>HTML, CSS & PHP  &nbsp;&bull;&nbsp; Linux & Windows Server</h2>
			</div>
			
			<div class="kontakt animate">
			    <p>Contact:</p>
			    <a href="mailto:alexander@samuels1.no" class="icon fa-envelope"> Email</a> <br>
				<a href="http://steamcommunity.com/profiles/76561198070618780" class="icon fa-steam"> Steam</a> <br>
				<a href="http://facebook.com/AlexFlipnoteIRL" class="icon fa-facebook"> Facebook</a> <br>
			</div>
			
			<div class="jobb animate">
			    <p>Websites done:</p>
			    <a href="http://samuels1.no" class="icon fa-arrow-right"> http://samuels1.no</a> <br>
			    <a href="http://festive.tf" class="icon fa-arrow-right"> http://festive.tf</a> <br>
			    <a href="http://dngaming.tf" class="icon fa-arrow-right"> http://dngaming.tf</a> <br>
			    <a href="http://tvc.tf" class="icon fa-arrow-right"> http://tvc.tf</a>
			</div>
			
			<a class="button" href="mailto:alexander@samuels1.no">
                <svg fill="#FFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
            </a>
		</div>
		
		<?php include "assets/extra/script.html"; ?>
		
	</body>
</html>
