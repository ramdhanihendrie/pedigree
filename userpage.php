<?php 
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pedigree</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script>
	function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
	</script>
</head>
<body>
	
	<div id="container">
		<div id="background">
			<?php include "view/header-user.php"; ?>
			<div id="page">
				<?php if(isset ($_GET ['module']))
					include "content/$_GET[module].php";
				else
					include "content/home.php";?>
			</div>
		</div>
		<?php include "view/footer.php"; ?>
	</div>


</body>
</html>