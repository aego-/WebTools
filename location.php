<?php include("assets/script/data.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Location</title>
<!--=====================================
			CSS Bootstrap
======================================-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--=====================================
		More JS, CSS and FONTS
======================================-->
	<!-- font -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
	<!-- my style -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container text-center py-2 col-12">
		<h1 class="font-weight-bold text-uppercase">Location</h1>
	</div>
	<br>
	<div class="container-fluid">
		<h4 class="text-uppercase">Your data:</h4>
		<p class="text-justify">
			<strong>Operating system:</strong> <?php echo $user_os; ?><br>
			<strong>Web browser:</strong> <?php echo $user_browser; ?><br>
			<strong>Device details:</strong> <?php echo $_SERVER['HTTP_USER_AGENT'] ?><br>
			<strong>Date:</strong> <?php echo $date_Mex; ?><br>
			<strong>Access time:</strong> <?php echo $time_Mex; ?><br>
			<strong>IP:</strong> <?php echo $real_user_ip; ?><br>
			<strong>Country:</strong> <?php echo getCountryFromIP($ip, " NamE "); ?><br>
			<strong>Country code:</strong> <?php echo getCountryFromIP($ip, "code"); ?><br>
			<strong>Coordinates:</strong> <span id="geo"></span><br>
			<strong>Map:</strong> https://google.com/maps/place/<span id="geom"></span><br>
			<strong>Screen resolution:</strong>
			<span><script type="text/javascript">document.write (window.innerWidth,' x ',window.innerHeight,' pixeles ');</script></span>
		</p>
	</div>

<footer>
	<span class="float-left pl-3">&copy; 2020</span><span class="float-right pr-3">by aego</span>
</footer>
<!--=====================================
			JS Bootstrap
======================================-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="assets/script/script.js"></script>
</body>
</html>