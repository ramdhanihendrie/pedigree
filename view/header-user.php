<div id="header">
	<h1 style="flex-grow: 1">Pedigree</h1>
	<div style="flex-grow: 2" id="navmenu">
		<a href="?module=home#pos">Home</a>
		<a href="?module=family#pos">Family</a>
		<a href="?module=about#pos">About</a>
	</div>
	<h3 class="username-navbar">
		<?php session_start();
				include"content/connection.php";
				$username=$_SESSION['username'];
				$no_family=$_SESSION['no_family'];
				echo "$username, $no_family"; ?>
	</h3>
	<div class="butmen" style="flex-shrink: 1" align="right">
		<form action="?module=signout#pos" method="post">
			<a href="index.php" class="btnsignup">Sign-Out</a>
		</form>
	</div>
</div>