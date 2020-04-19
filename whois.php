<?php include("assets/script/whoiscript.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>¿Who is?</title>
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
		<h1 class="font-weight-bold text-uppercase">Who is?</h1>
	</div>
	<br>
	
	<div class="container-fluid d-flex justify-content-center">
		
		<form action="<?=$_SERVER['PHP_SELF'];?>">
			<p><b><label for="domain">Domain / IP Address:</label></b> <input class="form-control" type="text" name="domain" id="domain" value="<?=$domain;?>"> <input class="btn btn-dark float-right" type="submit" value="Lookup"></p>
		</form>		
	</div>
	<br>
	<div class="d-flex justify-content-center m-2">
		<?php
		if($domain) {
			$domain = trim($domain);
			if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
			if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
			if(ValidateIP($domain)) {
				$result = LookupIP($domain);
			}
			elseif(ValidateDomain($domain)) {
				$result = LookupDomain($domain);
			}
			else die("Invalid Input!");
			echo "<pre class='text-light>\n" . $result . "\n</pre>\n";
		}
		?>
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
</body>
</html>
