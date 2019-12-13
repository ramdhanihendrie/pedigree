<!DOCTYPE html>
<html>
<head>
	<title>Pedigree</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<div id="container">
		<div id="background">
			<?php include "view/header-admin.php"; ?>
			<div id="page">
				<?php if(isset ($_GET ['module']))
					include "content/$_GET[module].php";
				else
					include "content/tabel.php";?>
			</div>
		</div>
		<?php include "view/footer.php"; ?>
	</div>


</body>
</html>