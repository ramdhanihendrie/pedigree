<!DOCTYPE html>
<html>
<head>
	<title>Pedigree</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
	<div id="container">
		<div id="background">
			<div id="header">
				<h1 style="flex-grow: 1">Pedigree</h1>
				<div style="flex-grow: 2" id="navmenu">
					<a href="?module=home#pos">Home</a>
					<a href="?module=about#pos">About</a>
					<a href="?module=admin#pos">Admin</a>
				</div>
				<div id="butmen" style="flex-grow: 2" align="right">
					<div id="navsignin">
						<a href="?module=signin#pos">Sign-In</a>
					</div>
					<div id="navsignup">
						<a href="?module=signup#pos">Sign-Up</a>
					</div>
				</div>
			</div>

			<div id="page">
				<?php if(isset ($_GET ['module']))
					include "content/$_GET[module].php";
				else
					include "content/home.php";?>
			</div>
		</div>

		<div id="footer">
			<h1>2019</h1>
		</div>
	</div>

</body>
</html>