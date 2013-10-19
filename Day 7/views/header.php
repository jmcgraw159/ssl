<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jeremy McGraw</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
		<a href="#"><h1>Jeremy McGraw</h1></a>
		<?
		if(isset($_SESSION["loggedin"])){
			include 'views/navlog.php';
		}else {
			include 'views/nav.php';
		}
		?>
	</header>