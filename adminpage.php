<!DOCTYPE html>
<html>
<head>
	<title>WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	

	<div id="container">
		<div id="background">
			<div id="header">
				<h1>Pedigree</h1>
				<form action="?module=logout#pos" method="post">
					<a href="index.php" class="btn btn-login">Sign-Out</a>
				</form>
			</div>
			<div id="page">
				<?php if(isset ($_GET ['module']))
					include "content/$_GET[module].php";
				else
					include "content/tabel.php";?>
			</div>
		</div>

		<div id="footer">
			<h1>2019</h1>
		</div>
	</div>


</body>
</html>