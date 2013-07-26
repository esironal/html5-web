<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="img/icon.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<?php
		// add null css if local (for dev only)
		if ($_SERVER['SERVER_NAME'] === 'localhost') {
			echo '<link rel="stylesheet" type="text/css" href="css/null.css">';
		}
	?>
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="js/respond.js"></script>
	<![endif]-->
</head>
<body>

	<header class="site-header">
	</header>

	<div class="site-main">
	</div>

	<footer class="site-footer">
	</footer>

	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
	<script src="js/main.js"></script>

</body>
</html>